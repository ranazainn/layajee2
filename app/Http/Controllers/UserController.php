<?php

namespace App\Http\Controllers;

// use App\Http\Controllers\Controller;
use DB;
use Auth;
use Session;
use App\User;
use App\Customer;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Mail\VerificationSend;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Repositories\UserRepository;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;
use Tymon\JWTAuth\Exceptions\JWTException;
use Illuminate\Foundation\Auth\RegistersUsers;

class UserController extends Controller
{
    protected $res = ['success' => true, 'message' => 'success', 'data' => null];

    use RegistersUsers;
    protected $redirectTo = '/verification';
    private $userRepository;
    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository;
        $this->userRepository->setFromWeb(true);
    }

    public function index()
    {

        return view('office');
    }


    public function createIndexOffice(Request $request)
    {

        $validatedData = $request->validate([
            'first_name' => 'required|string|max:50',
            'last_name' => 'required|string|max:50',
            'email' => 'required|max:50',
        ]);

        $data['name'] = $validatedData['first_name'] . ' ' . $validatedData['last_name'];
        $data['email'] = $validatedData['email'];
        $data['gender'] = $request->gender;
        $data['type'] = $request->type;

        $rqst_data = (object)$data;


        try {
            $user = $this->userRepository->getByEmail($data['email']);

            if ($user) {
                $credentials['email'] = $data['email'];
                $credentials['password'] = $user->plain_password;

                if (Auth::attempt($credentials)) {
                    $this->userRepository->setLoginDetails($data);

                    return redirect()->route('office');
                }
            } else {
                
                $user = $this->userRepository->create($data, 0);
                $token = JWTAuth::fromUser($user);
                $user['token'] = 'Bearer ' . $token;
                session()->put('USER_DATA', $user);
                session()->flash('status', __('Registration successful.'));
                $this->guard()->login($user);

                return $this->registered($request, $user) ?: redirect()->route('office');
            }
        } catch (\Exception $e) {

            return response(['err' => $e->getMessage()]);
        }
    }

    public function authenticate(Request $request)
    {
        if($request->email){
            $credentials = $request->only('email', 'password','role');
        }else{
            $credentials = $request->only('phone', 'password','role');
        }
        try {
            if (!$token = JWTAuth::attempt($credentials)) {
                return response()->json(['success' => false, 'is_verify' => 0, 'status' => 400, 'message' => 'invalid data', 'data' => null]);
            }
        } catch (JWTException $e) {
            return response()->json(['success' => false, 'status' => 500, 'message' => 'unauthorized', 'data' => null]);
        }
        if (!$token) {

            return response()->json(['success' => false, 'status' => 401, 'message' => 'unauthorized', 'data' => null]);
        } else {

            $user = JWTAuth::user();

        //    if($user->is_verified != 1){
        //         return response()->json(['success' => false, 'is_verify' => 0, 'status' => 401, 'message' => 'E-mail Not varify', 'data' => null]);       
        //    }
            $data = ['id' => $user['id'], 'name' => $user['name'], 'email' => $user['email'], 'phone' => $user['phone'], 'gender' => $user['gender'], 'role' => $user['role']];

            return response()->json(['success' => true, 'is_verify' => 1, 'status' => 200, 'message' => 'success', 'token' => $token, 'data' => $data]);

        }
            
    }

    public function getAuthenticatedUser()
    {
        try {

            if (!$user = JWTAuth::parseToken()->authenticate()) {
                return response()->json(['user_not_found'], 404);
            }
        } catch (\Tymon\JWTAuth\Exceptions\TokenExpiredException $e) {

            return response()->json(['success' => false, 'data' => null, 'status' => 400, 'message' => 'token expired']);
        } catch (\Tymon\JWTAuth\Exceptions\TokenInvalidException $e) {

            return response()->json(['success' => false, 'data' => null, 'status' => 400, 'message' => 'invalid token']);
        } catch (\Tymon\JWTAuth\Exceptions\JWTException $e) {

            return response()->json(['success' => false, 'data' => null, 'status' => 400, 'message' => 'token expired']);
        }

        return response()->json(compact('user'));
    }

    public function registerApi(Request $request)
    {
        try {
            $userAuth = Auth::user();
            $validator = \Validator::make($request->all(),[

                'first_name'    => 'required|string|max:50',
                // 'last_name'     => 'required|string|max:50',
                'email'         => 'required|max:50',
                'password'      => 'required|min:8',
                // 'gender'        => 'required',
                // 'phone'         => 'required|numeric',
                // 'role'          => 'required|digits_between:1,3|min:1|max:1',
                
            ]); 

            if ($validator->fails()) { 
    
                $val =  $validator->messages()->all();
                $this->res["success"]  = false;
                $this->res['message'] = implode("|",$val);
                return response()->json($this->res);            
            }
            $password = Hash::make($request->password);
            $userObj = [

                'name'              => $request->first_name . ' ' . $request->last_name,
                'email'             => $request->email,
                'type'              => $request->type,
                'gender'            => $request->gender,
                'password'          => $password,
                'plain_password'    => $request->password,
                // 'verification_code' => rand(1000, 9999),
                'phone'             => str_replace(' ', '', $userAuth->phone),
                'role'              => $request->role,
            ];

            $proCode = $request->p_code;

            $getCode = DB::table('promo_codes')->where('p_code', $proCode )->first();

            $userEmail = DB::table('users')->where('email',$request->email)->where('role',$request->role )->first();

            if($userEmail == null){

                if(!isset($proCode)){
                    $saveData = User::where('id',$userAuth->id)->update($userObj);
                    $user = $this->userRepository->getByEmail($request['email'], $request['role']);
                    $pCode = DB::table('promo_codes')->insert(["user_id" => $user->id, "p_code" => "LAYA".$user->id]);
                    $userdata = ['id' => $user['id'], 'name' => $user['name'], 'email' => $user['email'], 'phone' => $user['phone'], 'gender' => $user['gender'], 'role' => $user['role'], 'ref_point' => $user['ref_point']];
                
                    // $details = [

                    //     'name' => $user->name,
                    //     'verification_code' => $user->verification_code
                
                    // ];
                    //  \Mail::to($request['email'])->send(new VerificationSend($details));



                    $this->res["message"]   = "success";
                    $this->res["data"]      = $userdata;
                    return response()->json($this->res);
                }
       
            if($getCode != null ){

                $saveData =  User::where('id',$userAuth->id)->update($userObj);
                $user = $this->userRepository->getByEmail($request['email'], $request['role']);
                $pCode = DB::table('promo_codes')->insert(["user_id" => $user->id, "p_code" => "LAYA".$user->id]);
                $userdata = ['id' => $user['id'], 'name' => $user['name'], 'email' => $user['email'], 'phone' => $user['phone'], 'gender' => $user['gender'], 'role' => $user['role'], 'ref_point' => $user['ref_point']];
                $refPoint = DB::table('users')->select('users.ref_point')->where('id', $getCode->user_id)->first();
                $amount = DB::table('ref_amounts')->first();
                DB::table('users')->where('id',$getCode->user_id)->update(['ref_point'=>$amount->amount+$refPoint->ref_point]);
                DB::table('users')->where('id',$user->id)->update(['ref_point'=>$amount->amount]);

                // $details = [

                //     'name' => $user->name,
                //     'verification_code' => $user->verification_code
            
                // ];
                //  \Mail::to($request['email'])->send(new VerificationSend($details));

                $this->res["message"]   = "success";
                $this->res["data"]      = $userdata;
                return response()->json($this->res);
            }
            
            if($getCode == null){
        
                $this->res["success"]  = false;
                $this->res["message"]   = "Referral invalid";
                return response()->json($this->res);
            }
            
            }else{
                $this->res["success"]  = false;
                $this->res["message"]   = "Already Exists";
                return response()->json($this->res);
            }
            

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }

    public function verifyUserToken(Request $token)
    {
        try {
            $vCode = $token->verification_code;
            $user = User::where('verification_code', $vCode )->first();
            if($user != null){
                $user->is_verified = 1;
                $user->verification_code = null;
                $user->save();

                $this->res['success']    = true;
                $this->res['message']    =  "Account Varify";
                return response()->json($this->res);
                // return redirect('/');
            }else{
                $this->res['success']    = false;
                $this->res['message']    =  "Verification code not match please check your email first";
                return response()->json($this->res);
            }
                

            
        } catch (\Throwable $th) {

            $this->res['success'] = false;
            $this->res['message'] =  $th->getMessage();
            return response()->json($this->res);

        }
        
    }
    
    public function resendVerifyUserToken(Request $req, $id)
    {

        try {
            $user = DB::table('users')->where('id',$id)->first();
            
            if($user->is_verified == 1){
                $this->res['success']    = true;
                $this->res['message']    =  "User already verifiy";
                return response()->json($this->res);
            }else{
                $details = [
                    'name' => $user->name,
                    'verification_code' => $user->verification_code
                ];
                 \Mail::to($user->email)->send(new VerificationSend($details));

                 $this->res['success']    = true;
                 $this->res['message']    =  "Check your registered E-mail for verification";
                 return response()->json($this->res);
            }

            
        } catch (\Throwable $th) {

            $this->res['success'] = false;
            $this->res['message'] =  $th->getMessage();
            return response()->json($this->res);

        }
        
    }

    public function indexOffice2()
    {
        return view('indexoffice2');
    }
    public function schoolChildInfo()
    {
        $data = $this->customerRepo->findOrfail(8);
        return view('school-childInfo');
    }

    public function saveChildInfo(Request $request)
    {
        try {
            $user = $this->customerRepo->createchilinfo($request->toArray());
        } catch (\Exception $e) {
            return response(['err' => $e->getMessage()]);
        }
        return redirect()->back()->with('status', 'Record Successfully Created');
    }

    public function schoolParentInfo()
    {

        return view('school-parentInfo');
    }

    public function saveParent(RegisterRequest $request)
    {

        try {
            $user = $this->userRepository->getByEmail($request->email);
            if ($user) {
                $credentials['email'] = $request->email;
                $credentials['password'] = $user->plain_password;

                if (Auth::attempt($credentials)) {
                    $this->userRepository->setLoginDetails($request);
                    return redirect()->route('userhome');
                }
            } else {

                $user = $this->userRepository->create($request->toArray(), 0);
                $token = JWTAuth::fromUser($user);
                $user['token'] = 'Bearer ' . $token;

                session()->put('USER_DATA', $user);
                session()->flash('status', __('Registration successful.'));
                $this->guard()->login($user);
                return $this->registered($request, $user) ?: redirect($this->redirectPath());
            }
        } catch (\Exception $e) {

            return response(['err' => $e->getMessage()]);
        }
    }
    public function emailVerificationForm()
    {


        $user = Session::get('USER_DATA');
        // dd( $user );
        if ($user) {
            if ($user['is_verified']) {
                return redirect()->back()->with('err', __('Your Account is Already Verified'));
            }
        }

        return view('email-verify');
    }

    public function emailVerificationPost(Request $request)
    {

        $this->userRepository->setUser();
        $user = $this->userRepository->emailVerification($request, $fromWeb = true);
        if ($user) {

            if ($user->type == 'parent') {
                return redirect()->route('schoolchildinfo')->with('status', __('Email Verified'));
            } else {
                return redirect()->route('office')->with('status', __('Email Verified'));
            }
        }
        return redirect()->back()->with('err', __('Verification code does not match'));
    }

    public function emailVerificationResend()
    {

        $email = $this->userRepository->resendVerificationCodeTrait($fromWeb = true);
        if ($email) {
            return responseBuilder()->success(__('Email Verification Resend Successfully'));
        }
        return responseBuilder()->error(__('Something Went Wrong'));
    }

}
