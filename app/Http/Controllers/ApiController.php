<?php

namespace App\Http\Controllers;

use App\Repositories\UserRepository;
use App\Repositories\ChildRepository;
use App\Repositories\BookingRepository;
use App\Child;
use App\PromoCode;
use App\Booking;
use App\OfficeUser;
use App\DriverRoutes;
use App\PersonBookingDay;
use App\VehicleType;
use App\Banner;
use App\Repositories\OfficeInfoRepository;
use App\Repositories\RideRepository;
use App\Repositories\DriverRepository;
use App\Repositories\ServiceTypeRepository;
use App\Repositories\Driver_st_end_Repository;
use App\Repositories\DriverRouteRepository;
use Illuminate\Http\Request;
use App\Traits\EMails;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Image;
use Illuminate\Support\Carbon;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\User;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class ApiController extends Controller
{

    use EMails;

    protected $res = ['success' => true, 'message' => 'success', 'data' => null];

    protected $userRepository;
    protected $driverRouteRepository; 
    protected $driverRepository;
    protected $childRepository;
    protected $rideRepository;
    protected $officeInfoRepository;
    protected $serviceTypeRepository;
    protected $driver_st_end_Repo;
    protected $booking_Repository;


    public function __construct(BookingRepository $booking_Repository)
    {

        $this->userRepository = new UserRepository;
        $this->driverRouteRepository = new DriverRouteRepository;
        $this->driverRepository = new DriverRepository;
        $this->serviceTypeRepository = new ServiceTypeRepository;
        $this->childRepository = new ChildRepository;
        $this->rideRepository = new RideRepository;
        $this->officeInfoRepository = new OfficeInfoRepository;
        $this->driver_st_end_Repo = new Driver_st_end_Repository;
        $this->booking_Repository = $booking_Repository;


        // try {
        //     $user = JWTAuth::parseToken()->authenticate();
        // } catch (\Exception $e) {
        //     if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenInvalidException){
        //         return response()->json(['status' => 'Token is Invalid']);
        //     }else if ($e instanceof \Tymon\JWTAuth\Exceptions\TokenExpiredException){
        //         return response()->json(['status' => 'Token is Expired']);
        //     }else{
        //         return response()->json(['status' => 'Authorization Token not found']);
        //     }
        // }

    }


    public function forgotPassword(Request $request)
    {

        $rules = array('email' => 'email');

        $validator = \Validator::make($request->all(), $rules);
        // $data['email'] =$request['email'];


        try {

            if (!$request->all()) {

                return response()->json(['success' => false, 'status' => 400, 'message' => 'invalid data', 'data' => null,]);
            }
        } catch (\Exception $e) {

            return response()->json(['success' => false, 'status' => 500, 'message' => 'all fields are required', 'data' => null,]);
        }

        if ($validator->fails()) {

            return response()->json(['success' => false, 'data' => null, 'status' => 401, 'message' => $validator->errors()->first()]);
        } else {

            $user = $this->userRepository->getByEmail($request['email']);

            if ($user == false) {

                return response()->json(['success' => false, 'status' => 400, 'message' => 'invalid data', 'data' => null,]);
            } else {
               

                    $data['receiver_email'] = $user['email'];
                    $data['receiver_name'] =  $user['name'];
                    $data['password'] = $user['plain_password'];
                    $data['sender_name'] = 'Layajee';
                    $data['sender_email'] = "layajee@gmail.com";
                    $this->sendMail($data, 'emails.forgot_password', 'user password',   $data['receiver_email'], $data['sender_email']);

                    return response()->json(['success' => true, 'status' => 200, 'message' => 'success', 'data' => 'password has been sent to your email']);
                
            }
        }
    }

    // public function saveChildApi(Request $request)
    // {

    //     $rules = array(
    //         'pickup_time' => 'required',
    //         'drop_off_time' => 'required',
    //         'child_name' => 'required|max:50|string',
    //         'special_child' => 'required|',
    //         'gender' => 'required',
    //         'pickup_location' => 'required',
    //         'p_lat' => 'required',
    //         'p_long' => 'required',
    //         'drop_off_location' => 'required',
    //         'd_lat' => 'required',
    //         'd_long' => 'required',
    //     );

    //     $validator = \Validator::make($request->all(), $rules);

    //     $data['child_name'] = $request['child_name'];
    //     $data['gender'] = $request['gender'];
    //     $data['special_child'] = $request['special_child'];
    //     $data['pickup_time'] = $request['pickup_time'];
    //     $data['drop_off_time'] = $request['drop_off_time'];
    //     $data['pickup_location'] = $request['pickup_location'];
    //     $data['drop_off_location'] = $request['drop_off_location'];
    //     $data['p_lat'] = $request['p_lat'];
    //     $data['p_long'] = $request['p_long'];
    //     $data['d_lat'] = $request['d_lat'];
    //     $data['d_long'] = $request['d_long'];

    //     try {

    //         if (!$request->all()) {

    //             return response()->json(['success' => false, 'status' => 400, 'message' => 'invalid data', 'data' => null,]);
    //         }
    //     } catch (\Exception $e) {

    //         return response()->json(['success' => false, 'status' => 500, 'message' => 'all fields are required', 'data' => null,]);
    //     }

    //     if ($validator->fails()) {

    //         return response()->json(['success' => false, 'data' => null, 'status' => 401, 'message' => $validator->errors()->first()]);
    //     } else {

    //         $user_ride = $this->rideRepository->create($request->toArray());

    //         $data['ride_id'] = $user_ride->id;

    //         $user = $this->childRepository->create($data);
    //         $data['id'] = $user->id;

    //         return response()->json(['success' => true, 'status' => 200, 'message' => 'success', 'data' => $data]);
    //     }
    // }

    public function saveOfficeApi(Request $request)
    {

        $rules = array(
            'pickup_time' => 'required',
            'drop_off_time' => 'required',
            'pickup_location' => 'required',
            'p_lat' => 'required',
            'p_long' => 'required',
            'drop_off_location' => 'required',
            'd_lat' => 'required',
            'd_long' => 'required',
        );

        $validator = \Validator::make($request->all(), $rules);


        $data['drop_off_time'] = $request['drop_off_time'];
        $data['pickup_time'] = $request['pickup_time'];
        $data['pickup_location'] = $request['pickup_location'];
        $data['drop_off_location'] = $request['drop_off_location'];
        $data['p_lat'] = $request['p_lat'];
        $data['p_long'] = $request['p_long'];
        $data['d_lat'] = $request['d_lat'];
        $data['d_long'] = $request['d_long'];

        try {

            if (!$request->all()) {

                return response()->json(['success' => false, 'status' => 400, 'message' => 'invalid data', 'data' => null,]);
            }
        } catch (\Exception $e) {

            return response()->json(['success' => false, 'status' => 500, 'message' => 'all fields are required', 'data' => null,]);
        }

        if ($validator->fails()) {

            return response()->json(['success' => false, 'data' => null, 'status' => 401, 'message' => $validator->errors()->first()]);
        } else {

            $user_ride = $this->rideRepository->create($request->toArray());

            $data['ride_id'] = $user_ride->id;

            $user = $this->officeInfoRepository->create($data);
            $data['id'] = $user->id;

            return response()->json(['success' => true, 'status' => 200, 'message' => 'success', 'data' => $data]);
        }
    }

    public function saveDriver_st_end_Api(Request $request)
    {

        $rules = array(

            'user_id' => 'required',
            'd_id' => 'required',
            'start_time' => 'required',
            'off_time' => 'required',
            'start_location' => 'required',
            'st_lat' => 'required',
            'st_long' => 'required',
            'off_location' => 'required',
            'off_lat' => 'required',
            'off_long' => 'required',
        );

        $validator = \Validator::make($request->all(), $rules);

        $data['d_id'] = $request['d_id'];
        $data['user_id'] = $request['user_id'];
        $data['start_time'] = $request['start_time'];
        $data['off_time'] = $request['off_time'];
        $data['start_location'] = $request['start_location'];
        $data['off_location'] = $request['off_location'];
        $data['st_lat'] = $request['st_lat'];
        $data['st_long'] = $request['st_long'];
        $data['off_lat'] = $request['off_lat'];
        $data['off_long'] = $request['off_long'];
        $data['route'] = $request['route'];

        $routes = $request['route'];

        $routes_array=array();

        for($i=0;$i<count($routes);$i++)  {
      
            $routes_array['location_name']= $routes[$i]['location_name'];
            $routes_array['loc_lat']= $routes[$i]['loc_lat'];
            $routes_array['loc_long']=  $routes[$i]['loc_long'];
            $routes_array['d_id']= $request['d_id'];
            $routes_array['user_id'] =$request['user_id'];

            $this->driverRouteRepository->create($routes_array);
        }

        try {

            if (!$request->all()) {

                return response()->json(['success' => false, 'status' => 400, 'message' => 'invalid data', 'data' => null,]);
            }
        } catch (\Exception $e) {

            return response()->json(['success' => false, 'status' => 500, 'message' => 'all fields are required', 'data' => null,]);
        }

        if ($validator->fails()) {

            return response()->json(['success' => false, 'data' => null, 'status' => 401, 'message' => $validator->errors()->first()]);
        } else {

            // return $request->toArray();

            $route_st = $this->driver_st_end_Repo->create($request->toArray());

            $data['id'] = $route_st['id'];

            // $user=$this->officeInfoRepository->create($data);
            // $data['id']= $user->id;

            return response()->json(['success' => true, 'status' => 200, 'message' => 'success', 'data' => $data]);
        }
    }



    public function getServiceApi(Request $request)
    {

        $rules = array(
            'id' => 'required|digits_between:1,7|min:1|max:1',
            'usr_id' => 'required',
        );

        $validator = \Validator::make($request->all(), $rules);

        $id = $request->id;
        $data['usr_id'] = $request->usr_id;

        $data['service_id'] = $request->id;

        try {

            if (!$request->all()) {

                return response()->json(['success' => false, 'status' => 400, 'message' => 'invalid data', 'data' => null,]);
            }
        } catch (\Exception $e) {

            return response()->json(['success' => false, 'status' => 500, 'message' => 'all fields are required', 'data' => null,]);
        }

        if ($validator->fails()) {

            return response()->json(['success' => false, 'data' => null, 'status' => 401, 'message' => $validator->errors()->first()]);
        } else {

            $this->rideRepository->create($data);


            // $data['ride_id'] =$user_ride->id;


            $user = $this->serviceTypeRepository->getById($id);

            // $data['id']= $user->id;

            return response()->json(['success' => true, 'status' => 200, 'message' => 'success', 'data' => $user]);
        }
    }


    public function getVehicleApi()
    {

        $vehicle = $this->driverRepository->getAllVehicle();

        try {

            if (!$vehicle) {

                return response()->json(['success' => false, 'status' => 400, 'message' => 'invalid data', 'data' => null,]);
            } else {

                return response()->json(['success' => true, 'status' => 200, 'message' => 'success', 'data' => $vehicle]);
            }
        } catch (\Exception $e) {

            return response()->json(['success' => false, 'status' => 500, 'message' => 'something went wrong', 'data' => null,]);
        }
    }

    public function getVehicleInfo()
    {
        try {
            $vehicleInfo =  $this->driverRepository->getAuthVehicleInfo();
            $this->res['success'] = true;
            $this->res['message'] =  "Vehicle Info";
            $this->res['data']    = $vehicleInfo;
            return response()->json($this->res);
        } catch (\Throwable $th) {
            $this->res['success'] = false;
            $this->res['message'] =  $th->getMessage();
            return response()->json($this->res);
        }
    }

    public function getVehicleModelApi()
    {

        $vehicle_model = $this->driverRepository->getAllVehicleModel();

        try {

            if (!$vehicle_model) {

                return response()->json(['success' => false, 'status' => 400, 'message' => 'invalid data', 'data' => null,]);
            } else {

                return response()->json(['success' => true, 'status' => 200, 'message' => 'success', 'data' => $vehicle_model]);
            }
        } catch (\Exception $e) {

            return response()->json(['success' => false, 'status' => 500, 'message' => 'something went wrong', 'data' => null,]);
        }
    }

    public function getVehicleType()
    {
        try {
            $veh_type = VehicleType::get();
            $this->res['success']    = true;
            $this->res['message']    =  "Vehicle Types";
            $this->res['data']       = $veh_type;
            return response()->json($this->res);
        } catch (\Throwable $th) {
            $this->res['success'] = false;
            $this->res['message'] =  $th->getMessage();
            return response()->json($this->res);
        }
    }

    public function saveDriverData(Request $request)
    {

        $rules = array(
            'user_id' => 'required',
            'vehicle_id' => 'required',
            'vehicle_model_id' => 'required',
            'vehicle_number_plate' => 'required',
            'vehicle_color' => 'required',
            'vehicle_year' => 'required',
            'vehicle_seats' => 'required',

        );

        $validator = \Validator::make($request->all(), $rules);

        $data['user_id'] = $request['user_id'];
        $data['vehicle_id'] = $request['vehicle_id'];
        $data['vehicle_model_id'] = $request['vehicle_model_id'];
        $data['veh_type_id'] = $request['veh_type_id'];
        $data['vehicle_number_plate'] = $request['vehicle_number_plate'];
        $data['vehicle_color'] = $request['vehicle_color'];
        $data['vehicle_year'] = $request['vehicle_year'];
        $data['vehicle_seats'] = $request['vehicle_seats'];

        try {

            if (!$request->all()) {

                return response()->json(['success' => false, 'status' => 400, 'message' => 'invalid data', 'data' => null,]);
            }
        } catch (\Exception $e) {

            return response()->json(['success' => false, 'status' => 500, 'message' => 'all fields are required', 'data' => null,]);
        }

        if ($validator->fails()) {

            return response()->json(['success' => false, 'data' => null, 'status' => 401, 'message' => $validator->errors()->first()]);
        } else {

            $vehicle_model = $this->driverRepository->createDriver($data);

            // $user_ride=$this->rideRepository->create($request->toArray()); 

            // $data['ride_id'] =$user_ride->id;

            // $user=$this->officeInfoRepository->create($data);
            // $data['id']= $user->id;

            return response()->json(['success' => true, 'status' => 200, 'message' => 'success', 'data' => $data]);
        }
    }

    public function updateVehicleInfo(Request $req)
    {
        try {
            $user = Auth::user()->id;

            $vehicleUpdate = [
                'user_id'                 => $user,
                'vehicle_id'              => $req->vehicle_id,
                'vehicle_model_id'        => $req->vehicle_model_id,
                'vehicle_number_plate'    => $req->vehicle_number_plate,
                'vehicle_color'           => $req->vehicle_color,
                'vehicle_year'              => $req->vehicle_year,
                'vehicle_seats'           => $req->vehicle_seats,
                'updated_at'              => Carbon::now()->toDateTimeString(),
            ];
            $vehicleData = DB::table('drivers')->where('user_id', $user)->update($vehicleUpdate);
            $this->res['success'] = true;
            $this->res['message'] =  "Update Successfully!";
            $this->res['data']    =  $vehicleUpdate;
            return response()->json($this->res);
 
         } catch (\Throwable $th) {
             $this->res['success'] = false;
             $this->res['message'] =  $th->getMessage();
             return response()->json($this->res);
         }
    }

    public function getDocTypeApi()
    {

        $doc_type = $this->driverRepository->getDocTypeModel();

        try {

            if (!$doc_type) {

                return response()->json(['success' => false, 'status' => 400, 'message' => 'invalid data', 'data' => null,]);
            } else {

                return response()->json(['success' => true, 'status' => 200, 'message' => 'success', 'data' => $doc_type]);
            }
        } catch (\Exception $e) {

            return response()->json(['success' => false, 'status' => 500, 'message' => 'something went wrong', 'data' => null,]);
        }
    }

    public function saveDriverDocs(Request $request)
    {
        $authUser = Auth::user()->id;
        $rules = array(
            'vehicle_id' => 'required',
            'doc_type_id' => 'required',
            'doc_exp' => 'required',
            'doc_orientation_id' => 'required'
        );

        $validator = \Validator::make($request->all(), $rules);

        $data = array();

        if ($request->hasFile('image')) {

            if ($request->file('image')->isValid()) {

                $imageData = getImage($request->file('image'));
                $data['doc_ext'] = $imageData['doc_ext'];
                $data['doc_name'] = $imageData['doc_name'];
                $data['doc_path'] = $imageData['doc_path'];
            }
        }
        $data['driver_id'] =  $authUser;
        $data['vehicle_id'] = $request['vehicle_id'];
        $data['doc_type_id'] = $request['doc_type_id'];
        $data['doc_number'] = $request['doc_number'];
        $data['doc_exp'] = $request['doc_exp'];
        $data['doc_orientation_id'] = $request['doc_orientation_id'];

        try {

            if (!$request->all()) {

                return response()->json(['success' => false, 'status' => 400, 'message' => 'invalid data', 'data' => null,]);
            }
        } catch (\Exception $e) {

            return response()->json(['success' => false, 'status' => 500, 'message' => 'all fields are required', 'data' => null,]);
        }

        if ($validator->fails()) {

            return response()->json(['success' => false, 'data' => null, 'status' => 401, 'message' => $validator->errors()->first()]);
        } else {

            $vehicle_model = $this->driverRepository->createDriverDocs($data);

            return response()->json(['success' => true, 'status' => 200, 'message' => 'success', 'data' => $data]);
        }
    }
    /*
    |---------------------------------
    |           User Api's
    |---------------------------------
    */

    public function getAuthUserData()
    {
        try {
           $user = Auth::user();
           $refCode = PromoCode::where('user_id',$user->id)->first();
           $this->res['success']    = true;
           $this->res['message']    =  "Auth User Data";
           $this->res['data']       = $user;
           $this->res['user code']  = $refCode;
           return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res['success'] = false;
            $this->res['message'] =  $th->getMessage();
            return response()->json($this->res);
        }
    }

    public function updateUserById(Request $req)
    {
        
        try {
            $userId = Auth::user();

            $data = array();
            if($req->hasFile('image_name')) {

                if($req->file('image_name')->isValid()) {

                    $imageData = getUserImage($req->file('image_name'));
                    $data['image_name'] = $imageData['image_name'];
                    $data['img_ext'] = $imageData['img_ext'];
                    $data['img_path'] = $imageData['img_path'];
                }
            }
                    $data['name']       = $req->name;
                    // $data['phone']      = $req->phone;
                    $data['updated_at'] = Carbon::now()->toDateTimeString();

                    // if($userId->phone == $req->phone){
                    //     $this->res['success'] = false;
                    //     $this->res['message'] = "phone number already exist";
                    //     return response()->json($this->res);
                    // }

            $user = DB::table('users')->where('id','=',$userId->id)->update($data);

            $this->res['success'] = true;
            $this->res['message'] = "update User Data";
            $this->res['data']    = $data;
            return response()->json($this->res);
 
         } catch (\Throwable $th) {

             $this->res['success'] = false;
             $this->res['message'] =  $th->getMessage();
             return response()->json($this->res);
         }
    }

    public function updatePassword(Request $req)
    {
        try {

        
            $validator = \Validator::make($req->all(),[

                'old_password' => 'required',
                'new_password' => 'required|confirmed',
            ]); 

            if ($validator->fails()) { 

                $val =  $validator->messages()->all(); 
                $this->res['message'] = implode("|",$val);
                return response()->json($this->res);            
            }
            if (!Hash::check($req['old_password'], JWTAuth::user()->password)) {
                $this->res['success'] = false;
                $this->res['message'] =  "The old password does not match our records.";
                return response()->json($this->res);
        }
                $userPass = User::whereId(auth()->user()->id)->update([
                    'password' => Hash::make($req->new_password),
                    'plain_password' => $req->new_password,
                ]);
                $this->res['success'] = true;
                $this->res['message'] =  "Password changed successfully";
                return response()->json($this->res);

                
            
        } catch (\Throwable $th) {
            $this->res['success'] = false;
            $this->res['message'] =  $th->getMessage();
            return response()->json($this->res);
        }

    }
    /*
    |---------------------------------
    |   14/07/2022 / Driver API's
    |---------------------------------
    */

    public function getDriverDocs()
    {
        try {
            $driver = $this->driverRepository->getDriverDocsAuthUser();
            $this->res["message"]  ="Driver Details";
            $this->res["data"]  = $driver;
            return response()->json($this->res);
        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }

    public function getAuthUserLicense()
    {
       try {
            $driver = $this->driverRepository->getLicense();
            $this->res["message"]  ="License";
            $this->res["data"]  = $driver;
            return response()->json($this->res);
       } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
       }
    }

    public function updateAuthUserLicense(Request $req)
    {
        try {
            $userId = Auth::user()->id;
            $data = array();
        if($req->hasFile('image')) {

            if($req->file('image')->isValid()) {

                $imageData = getImage($req->file('image'));
                $data['doc_ext'] = $imageData['doc_ext'];
                $data['doc_name'] = $imageData['doc_name'];
                $data['doc_path'] = $imageData['doc_path'];
            }
        }
                    // $data['vehicle_id']     = $req->vehicle_id;
                    $data['doc_exp']        = $req->doc_exp;
                    $data['doc_number']     = $req->doc_number;
                    $data['updated_at'] = Carbon::now()->toDateTimeString();

            $user = DB::table('driver_docs')->where('driver_id','=',$userId)->where('doc_type_id','=',"1")->update($data);

            $this->res['success'] = true;
            $this->res['message'] = "update Reg book Data";
            $this->res['data']    = $data;
            return response()->json($this->res);
 
         } catch (\Throwable $th) {

             $this->res['success'] = false;
             $this->res['message'] =  $th->getMessage();
             return response()->json($this->res);
         }
    }

    public function getAuthUserRegistrationBook()
    {
       try {
            $driver = $this->driverRepository->getRegistrationBook();
            $this->res["message"]  ="Registration Book";
            $this->res["data"]  = $driver;
            return response()->json($this->res);
       } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
       }
    }
    public function updateAuthUserRegistrationBook(Request $req)
    {
        try {
            $userId = Auth::user()->id;

            $data = array();

        if ($req->hasFile('image')) {

            if ($req->file('image')->isValid()) {

                $imageData = getImage($req->file('image'));
                $data['doc_ext'] = $imageData['doc_ext'];
                $data['doc_name'] = $imageData['doc_name'];
                $data['doc_path'] = $imageData['doc_path'];
            }
        }
                    // $data['vehicle_id']     = $req->vehicle_id;
                    $data['doc_exp']        = $req->doc_exp;
                    $data['doc_number']     = $req->doc_number;
                    $data['updated_at'] = Carbon::now()->toDateTimeString();

            $user = DB::table('driver_docs')->where('driver_id','=',$userId)->where('doc_type_id','=',"2")->update($data);

            $this->res['success'] = true;
            $this->res['message'] = "update Reg book Data";
            $this->res['data']    = $data;
            return response()->json($this->res);
 
         } catch (\Throwable $th) {

             $this->res['success'] = false;
             $this->res['message'] =  $th->getMessage();
             return response()->json($this->res);
         }
    }

    public function driverRoutes(Request $req)
    {
        try {
            $validator = \Validator::make($req->all(),[

                'start_location' => 'required',
                'st_lat'         => 'required',
                'st_long'        => 'required',
                'off_location'   => 'required',
                'start_time'     => 'required',
                'off_time'       => 'required',
            ]); 
            if ($validator->fails()) { 
    
                $val =  $validator->messages()->all(); 
                $this->res['message'] = implode("|",$val);
                return response()->json($this->res);            
            }
            $authUser = Auth::user()->id;
            $saveRoute = [
                'user_id'           => $authUser,
                'start_location'    => $req->start_location,
                'off_location'      => $req->off_location,
                'start_time'        => $req->start_time,
                'off_time'          => $req->off_time,
                'st_lat'            => $req->st_lat,
                'st_long'           => $req->st_long,
                'off_lat'           => $req->off_lat,
                'off_long'          => $req->off_long
            ];

            $dRouteSave =  $this->driver_st_end_Repo->saveDriverRoute($saveRoute);

            if(isset($req->stops)){
            foreach($req->stops as $dRoutes){
                $multiRoute = [
                    // 'user_id'        => $authUser,
                    'd_id'           => $dRouteSave->id,
                    'location_name'  => $dRoutes['location_name'],
                    'loc_lat'        => $dRoutes['loc_lat'],
                    'loc_long'       => $dRoutes['loc_long']
                ];

                $mdr =  $this->driverRouteRepository->driverMultiRoute($multiRoute);
            }
            // exit();
            }

            $this->res["success"]  = true;
            $this->res["message"]  = "Route has been saved!";
            $this->res['data']     = $dRouteSave;
            $this->res['routes']   = $req->stops;
            return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }

    public function getAuthUserRoutes()
    {
        try {
            $driverRoutes =  $this->driver_st_end_Repo->getDriverRoute();
            $this->res['success'] = true;
            $this->res['message'] = "Driver Routes";
            $this->res['data']    =  $driverRoutes;
            return response()->json($this->res);
        } catch (\Throwable $th) {
            $this->res['success'] = false;
            $this->res['message'] =  $th->getMessage();
            return response()->json($this->res);
        }
    }

    public function getAuthUserRoutesById($id)
    {
        try {
            $driverRoutes =  $this->driver_st_end_Repo->getDriverRouteById($id);
            $this->res['success'] = true;
            $this->res['message'] = "Driver Routes";
            $this->res['data']    =  $driverRoutes;
            return response()->json($this->res);
        } catch (\Throwable $th) {
            $this->res['success'] = false;
            $this->res['message'] =  $th->getMessage();
            return response()->json($this->res);
        }
    }

    public function updateDriverRoutes(Request $req, $id)
    {
        try {
            
            $authUser  = Auth::user()->id;
            $Routeid   =  DB::table('driver_st_end')->where('user_id', $authUser)->where('id',$id)->first();
            $saveRoute = [
                'start_location'    => $req->start_location,
                'off_location'      => $req->off_location,
                'start_time'        => $req->start_time,
                'off_time'          => $req->off_time,
                'st_lat'            => $req->st_lat,
                'st_long'           => $req->st_long,
                'off_lat'           => $req->off_lat,
                'off_long'          => $req->off_long
            ];

            $dRouteSave =  DB::table('driver_st_end')->where('user_id', $authUser)->where('id',$id)->update($saveRoute);

            if(isset($req->stops)){
            foreach($req->stops as $dRoutes){
                $cid = 0;
                $check = isset($dRoutes['id'])?$dRoutes['id']:9999999999;
                if($check !=  9999999999 && $check != $cid){
                    // dd($check);
                    $multiRoute = [
                        'id'             => $check,
                        'location_name'  => $dRoutes['location_name'],
                        'loc_lat'        => $dRoutes['loc_lat'],
                        'loc_long'       => $dRoutes['loc_long']
                    ];
    
                        $mdr =  DB::table('driver_routes')->where('id', $check)->update($multiRoute);
                }else{

                        $data =  DriverRoutes::firstOrNew([
                            'd_id'           => $Routeid->id,
                            'location_name'  => $dRoutes['location_name'],
                            'loc_lat'        => $dRoutes['loc_lat'],
                            'loc_long'       => $dRoutes['loc_long'],
                        ]);
                        $data->save();
                        
                }
             
            }

            }

            $this->res["success"]  = true;
            $this->res["message"]  = "Route has been updated!";
            $this->res['data']     = "";
            $this->res['routes']   = "";
            return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }
    
    public function deleteRoute(Request $req, $id)
    {
        try {
            $id = DriverRoutes::find($id);
            if($id == null){
                $this->res["message"]   = "Record not found";
                return response()->json($this->res);
            }
            $routeDelete = $id->delete();
            $this->res["message"]   = "Delete";
            return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }

    public function getDriverBooking(Request $req)
    {
        try {
            $user = Auth::user()->id;
            $bookingData = Child::with('booking')->where('user_driver_id',$user)
            ->get();
            $this->res["message"]   = "Booking";
            $this->res['data']      = $bookingData;
            return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
       
    }
    /**
     * ==================
     * Booking Rest Api's
     * ==================
     */

    public function saveBooking(Request $obj)
    {

        try
        {
            $user = Auth::user()->id;
            // Validator
            $validator = \Validator::make($obj->all(),[

                    'name'              => 'required',
                    'gender'            => 'required',
                    'pick_date_time'    => 'required',
                    'pickup_address'    => 'required',
                    'pick_lat'          => 'required',
                    'pick_long'         => 'required',
                    'drop_address'      => 'required',
                    'drop_lat'          => 'required',
                    'drop_long'         => 'required',
                    'day'               => 'required',

                ]); 
                if ($validator->fails()) { 
        
                    $val =  $validator->messages()->all(); 
                    $this->res['message'] = implode("|",$val);
                    return response()->json($this->res);            
            }
            // Save Person Details
            $childObj = [
                'user_id'     => $user,
                'name'        => $obj['name'],
                'phone'       => $obj['phone'],
                'age'         => $obj['age'],
                'class'       => $obj['class'],
                'school_name' => $obj['school_name'],
                'is_special'  => $obj['is_special'],
                'gender'      => $obj['gender'],
                'description' => $obj['description']
            ];

            $saveData = $this->childRepository->create($childObj);

            // Save Booking Details

            $bookingObj = [
                'user_id'               => $user,
                'person_id'             => $saveData->id,
                'service_id'            => $obj['service_id'],
                'sub_service_id'        => $obj['sub_service_id'],
                'driver_id'             => $obj['driver_id'],
                'booking_cancel'        => 0,
                'trip_type'             => 1,
                'vehicle_types'         => $obj['vehicle_types'],
                "pick_date_time"        => $obj['pick_date_time'],
                "km"                    => $obj['km'],
                "estimate_time"         => $obj['estimate_time'],
                'pickup_address'        => $obj['pickup_address'],
                'drop_address'          => $obj['drop_address'],
                "pick_lat"              => $obj['pick_lat'],
                "pick_long"             => $obj['pick_long'],
                "drop_lat"              => $obj['drop_lat'],
                "drop_long"             => $obj['drop_long'],

            ];
                $bookingData = $this->booking_Repository->creates($bookingObj);

                // Save Person Booking Days
                $dataDay = $obj['day'];
                
                    foreach($dataDay as $index=>$day){
                        $objDay = [
                            'person_id' => $saveData->id,
                            'booking_id' => $bookingData->id,
                            'day'   =>   $day['day'],
                            'day_sr' => $index+1,
                            'is_off'    =>$day['is_off']
                         ];

                         $data = PersonBookingDay::create($objDay);
                    }

                $this->res['message'] =  "Booking has been saved";
                return response()->json($this->res);
        }

        catch (\Throwable $th) {

            $this->res['success'] = false;
            $this->res['message'] =  $th->getMessage();
            return response()->json($this->res);

        }
    }

    public function authUserBookings()
    {
        try {
            $userBooking = $this->booking_Repository->getAllBookingAuthUser();
            $this->res["message"]  ="Login user booking list";
            $this->res["data"]  = $userBooking;
            return response()->json($this->res);
        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
       

    }

    public function UpdateBooking(Request $obj, $id)
    {

        try
        {
            if($id == null){
                $this->res["message"]   = "Record not found";
                return response()->json($this->res);
            }

            $personObj = [
                'name'        => $obj['name'],
                'phone'       => $obj['phone'],
                'age'         => $obj['age'],
                'class'       => $obj['class'],
                'school_name' => $obj['school_name'],
                'is_special'  => $obj['is_special'],
                'gender'      => $obj['gender'],
                'description' => $obj['description']
            ];

            $personData = $this->childRepository->updatePersonData($personObj, $id);

            $bookingObj = [
                // 'person_id'             => $personData->id,
                'service_id'            => $obj['service_id'],
                'sub_service_id'        => $obj['sub_service_id'],
                'driver_id'             => $obj['driver_id'],
                'booking_cancel'        => 0,
                'trip_type'             => 1,
                'vehicle_types'         => $obj['vehicle_types'],
                "pick_date_time"        => $obj['pick_date_time'],
                "km"                    => $obj['km'],
                "estimate_time"         => $obj['estimate_time'],
                'pickup_address'        => $obj['pickup_address'],
                'drop_address'          => $obj['drop_address'],
                "pick_lat"              => $obj['pick_lat'],
                "pick_long"             => $obj['pick_long'],
                "drop_lat"              => $obj['drop_lat'],
                "drop_long"             => $obj['drop_long'],
            ];

            $bookingData = $this->booking_Repository->bookingUpdate($bookingObj, $id);

              // Save Person Booking Days
              $dataDay = $obj['day'];
                
              if(isset($dataDay)){
                foreach($dataDay as $day){
                    $cid = 0;
                    $check = isset($day['id'])?$day['id']:9999999999;
                    if($check !=  9999999999 && $check != $cid){
                        $objDay = [
                            'id' => $check,
                            'is_off' => $day['is_off']
                         ];
                         $data = PersonBookingDay::where('id', $check)->update($objDay);
                    }  
                }

              }

            $this->res['message'] =  "Booking Update";
            return response()->json($this->res);
                 
        }
        catch (\Throwable $th) {

            $this->res['success'] = false;
            $this->res['message'] =  $th->getMessage();
            return response()->json($this->res);

        }
    }

    public function deleteBooking($id)
    {
        try {
            
            $data = $this->childRepository->deletePersonBooking($id);
            $this->res['message'] =  "Deleted";
            return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res['success'] = false;
            $this->res['message'] =  $th->getMessage();
            return response()->json($this->res);
        }
    }

    /**
     * ==================
     * Person Rest Api's
     * ==================
     */

    public function savePersondApi(Request $obj)
    {
        try {
            
            $validator = \Validator::make($obj->all(),[

                'name'        => 'required',
                'gender'      => 'required',
            ]); 
            if ($validator->fails()) { 
    
                $val =  $validator->messages()->all(); 
                $this->res['message'] = implode("|",$val);
                return response()->json($this->res);            
            }
            $user = Auth::user()->id;
            // $childObj = [

            //     'user_id'     => $user,
            //     'name'        => $obj->full_name,
            //     'phone'         => $obj->phone,
            //     'age'         => $obj->age,
            //     'class'       => $obj->class,
            //     'school_name' => $obj->school_name,
            //     'area'        => $obj->area,
            //     'is_special'  => $obj->is_special,
            //     'gender'      => $obj->gender,
            //     'description' => $obj->description
            // ];
            // $saveData = $this->childRepository->create($childObj);
            $this->res["message"]   = "Child Save";
            $this->res["data"]   = $saveData;
            return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }

    public function getAllChildApi($id)
    {
        try {
            $child = $this->childRepository->getAllChild($id);
            $this->res["message"]   = "";
            $this->res["data"]   = $child;
            return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }

    public function getChildByIdApi($id)
    {
        try {
            $child = $this->childRepository->getChild($id);
            $this->res["message"]   = "";
            $this->res["data"]   = $child;
            return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }

    public function childUpdate(Request $req, $id)
    { 
        try {

            $validator = \Validator::make($req->all(),[

                'full_name'   => 'required',
                'age'         => 'required',
                'class'       => 'required',
                'school_name' => 'required',
                'area'        => 'required',
                'is_special'  => 'required',
                'gender'      => 'required',
            ]); 
            if ($validator->fails()) { 
    
                $val =  $validator->messages()->all(); 
                $this->res['message'] = implode("|",$val);
                return response()->json($this->res);            
            }

            $id = Child::find($id);
            if($id == null){
                $this->res["message"]   = "Record not found";
                return response()->json($this->res);
            }
            $childUpdateObj = [

                'full_name'   => $req->full_name,
                'age'         => $req->age,
                'class'       => $req->class,
                'school_name' => $req->school_name,
                'area'        => $req->area,
                'is_special'  => $req->is_special,
                'gender'      => $req->gender,
                'description' => $req->description

            ];

            $childUpdate = $id->update($childUpdateObj);
            // dd($childUpdate);
            $this->res["message"]   = "Child data has been updated";
            $this->res["data"]   = $childUpdateObj;
            return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }

    public function childDelete(Request $req, $id)
    { 
        try {
            $id = Child::find($id);
            if($id == null){
                $this->res["message"]   = "Record not found";
                return response()->json($this->res);
            }
            $childDelete = $id->delete();
            $this->res["message"]   = "Delete";
            return response()->json($this->res);
            //   }

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }

    /**
     * ===================
     *  Office Rest Api
     * ===================
     */

    public function saveOfficeUser(Request $obj)
    {
        try {
            
            $validator = \Validator::make($obj->all(),[

                'full_name'   => 'required',
                'phone_num'   => 'required|unique:offices_user',
                'gender'      => 'required',
                
            ]); 

            if ($validator->fails()) { 
    
                $val =  $validator->messages()->all(); 
                $this->res['message'] = implode("|",$val);
                return response()->json($this->res);            
            }
            $user = Auth::user()->id;

            $officeObj = [

                'user_id'     => $user,
                'full_name'   => $obj->full_name,
                'phone_num'   => $obj->phone_num,
                'gender'      => $obj->gender,
                'description' => $obj->description
            ];
            $saveData = $this->childRepository->officeUserCreate($officeObj);
            $this->res["message"]   = "Data Save";
            $this->res["data"]      = $saveData;
            return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }

    public function updateOfficeUser(Request $req, $id)
    { 
        try {
            $validator = \Validator::make($req->all(),[
                'phone_num'   => 'required|unique:offices_user',
            ]); 

            if ($validator->fails()) { 
    
                $val =  $validator->messages()->all(); 
                $this->res['message'] = implode("|",$val);
                return response()->json($this->res);            
            }
            $id = OfficeUser::find($id);
            if($id == null){
                $this->res["message"]   = "Record not found";
                return response()->json($this->res);
            }

            $officeUpdateObj = [

                'full_name'   => $req->full_name,
                'phone_num'   => $req->phone_num,
                'gender'      => $req->gender,
                'description' => $req->description
            ];

            $officeUserUpdate = $id->update($officeUpdateObj);
            $this->res["message"]   = "Data has been updated";
            $this->res["data"]   = $officeUpdateObj;
            return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }
    public function officeUserDelete(Request $req, $id)
    { 
        try {
            $id = OfficeUser::find($id);
            if($id == null){
                $this->res["message"]   = "Record not found";
                return response()->json($this->res);
            }
            $officeUserDelete = $id->delete();
            $this->res["message"]   = "Delete";
            return response()->json($this->res);
            //   }

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }
    public function getAllOfficeUser($id)
    {
        try {
            $officeUser = $this->childRepository->getAllOfficeUser($id);
            $this->res["message"]   = "";
            $this->res["data"]   = $officeUser;
            return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }
    public function getOfficeUserById($id)
    {
        try {
            $officeUser = $this->childRepository->getOfficeUser($id);
            $this->res["message"]   = "";
            $this->res["data"]   = $officeUser;
            return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }

    /**
     * ==========================
     *  Socail media Login Api
     * ==========================
     */

    public function redirectToProvider(String $provider){
        return \Socialite::driver($provider)->stateless()->redirect();
    }

    public function providerCallback(String $provider){

            $user = \Socialite::driver($provider)->stateless()->user();
            $this->_registerorLoginUser($user, $provider);
            return response()->json($this->res);

    } 
    protected function _registerOrLoginUser($data, $provider)
    {
        $user = User::where('email', '=', $data['email'])->first();

        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->provider_name = $provider;
            $user->img_path = $data->avatar;
            $user->save();

            $pCode = DB::table('promo_codes')->insert(["user_id" => $user->id, "p_code" => "LAYA".$user->id]);
        }
        $token                  = JWTAuth::fromUser($user);
        $this->res["message"]   = $provider;
        $this->res["jwt"]       = $token;
        $this->res["data"]      = $user;
        return response()->json($this->res);
    }

 // save mobile user via app id,fb id,device id
 public function saveMobileUser(Request $request)
 {   

     
     // validate request
     $validator = \Validator::make($request->all(), [
         "social_app_id" => 'required',
         "name"          => "required"
     ]);
     
     if ($validator->fails()) 
     {   
         $response["Success"]   = false;
         $response["Status"] = 400;
         $response["ErrorMessage"] = $validator->errors();
         
         return response(
             $response,
             200
         );
     }

     $obj_user = [
         'name'    =>$request->name,
         'email'         => isset($request->email)?$request->email:NULL,
         'provider_id'     => $request->provider_id,
         'provider_name'     => $request->provider_name,
         'social_app_id' => $request->social_app_id,
         'img_path' => $request->img_path,
         'phone' => null,
         'is_verified' => 0,
     ];

     // db request via service
     $user = User::where('social_app_id',$request->social_app_id)->first();
    
     if($user == null)
     {
         $save_user = User::create($obj_user);
         $token = JWTAuth::fromUser($save_user);
         $this->res['token'] =  $token;
         $pCode = DB::table('promo_codes')->insert(["user_id" => $save_user->id, "p_code" => "LAYA".$save_user->id]);
         $this->res["data"]  =  $save_user;
         return response()->json($this->res);
     }else{
            $uData = ['name' =>$user['name'],'email' =>$user['email'],'phone' => $user['phone'],'is_verified' => $user['is_verified'],'provider_id' =>$user['provider_id'],'provider_name' =>$user['provider_name'],
            'social_app_id' =>$user['social_app_id'],'img_path' =>$user['img_path'],'ref_point' =>$user['ref_point']];
            $token = JWTAuth::fromUser($user);
            $this->res['message']  = "User already exist";
            $this->res["data"]     =  $uData;
            $this->res['token']    =  $token;
            return response()->json($this->res);
     }


 }


    public function saveMobile(Request $req)
    {
        try {
            $auth   = Auth::user();
            $phone  = str_replace(' ', '', $req->phone);
            if($phone != $auth->phone){
                $data   = DB::table('users')->where('id',$auth->id)->update(['phone' => $phone]);
                $this->res['message'] = "OTP Send";
                return response()->json($this->res);
            }
            if($auth->phone == $req->phone && $auth->is_verified != 1){
                $data   = DB::table('users')->where('id',$auth->id)->update(['phone' => $phone]);
                $this->res['message'] = "OTP Send";
                return response()->json($this->res);
            }
            $this->res["success"]  = false;
            $this->res['message'] = "Phone Number already exist";
            return response()->json($this->res);
        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
       
    }

    public function sendOtpMobile(Request $req)
    {
       try {
        $auth   = Auth::user();
        $otp    = 5555;
        if($req->otp == $otp){
            $data   = DB::table('users')->where('id',$auth->id)->update(['is_verified' => 1]);
            $this->res['message'] = "Verified";
            return response()->json($this->res);
        }else{
             $this->res["success"]  = false;
            $this->res['message'] = "OTP not match";
            return response()->json($this->res); 
        }
       } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
       }
       
    }
    
    public function savePhoneNumber(Request $req)
    {
        try {
                $userPhone = User::where('phone',$req->phone)->first();

                if(!$userPhone){

                    $data   = new User;
                    $data->phone = str_replace(' ', '', $req->phone);
                    $data->is_verified = 0;
                    $data->save();
                    $saveData = ['phone'=>$data['phone'], 'is_verified'=>$data['is_verified']];
                    $token  = JWTAuth::fromUser($data);

                    $this->res['message'] = "OTP Send";
                    $this->res['data'] = $saveData;
                    $this->res['token'] = $token;
                    return response()->json($this->res);
                }
                if($userPhone->phone == $req->phone && $userPhone->is_verified != 1){

                    $data   = DB::table('users')->where('id',$userPhone->id)->update(['phone' => trim($req->phone)]);
                    
                    $dPhone = ['name' =>$userPhone['name'],'email' =>$userPhone['email'],'phone' => $userPhone['phone'],'is_verified' => $userPhone['is_verified'],'provider_id' =>$userPhone['provider_id'],'provider_name' =>$userPhone['provider_name'],
                    'social_app_id' =>$userPhone['social_app_id'],'img_path' =>$userPhone['img_path'],'ref_point' =>$userPhone['ref_point']];
                    
                    $token  = JWTAuth::fromUser($userPhone);
                    
                    $this->res['message'] = "OTP Send";
                    // $this->res['data'] = $dPhone;
                    $this->res['token'] = $token;
                    return response()->json($this->res);
                   
                }
                if($userPhone->phone == $req->phone && $userPhone->is_verified = 1){
                    $this->res["success"]  = false;
                    $this->res['message'] = "Phone Number already exist";
                    return response()->json($this->res);
                }

                $dPhone = ['name' =>$userPhone['name'],'email' =>$userPhone['email'],'phone' => $userPhone['phone'],'is_verified' => $userPhone['is_verified'],'provider_id' =>$userPhone['provider_id'],'provider_name' =>$userPhone['provider_name'],
                'social_app_id' =>$userPhone['social_app_id'],'img_path' =>$userPhone['img_path'],'ref_point' =>$userPhone['ref_point']];
                  
                    $token  = JWTAuth::fromUser($userPhone);

                    $this->res['message'] = "verified";
                    $this->res['data'] = $dPhone;
                    $this->res['token'] = $token;
                    return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
       
    }

    /**
     * =============================
     *   Notify Services Api's
     * =============================
     * 
     */

     public function notifyCreate(Request $req)
     {
        try {
            $auth = Auth::user()->id;
            $notifyObj = [
                'user_id'     => $auth,
                'service_id'  => $req->service_id,
                'notify_me'   => $req->notify_me,
                'on_click'    => 1
            ];
            $data =  $this->serviceTypeRepository->notifyMe($notifyObj);
            $this->res["message"]  = "Notify me". $auth;
            return response()->json($this->res);

        } catch (\Throwable $th) {

            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);

        }
     }

      /**
     * =============================
     *          Banner
     * =============================
     * 
     */
     
     public function createBanner(Request $req)
     {
        try {
            if ($req->hasFile('image')) {
                if ($req->file('image')->isValid()) {
                    $imageData = getImage($req->file('image'));
                }
            }
            $banner = new Banner;
            $banner->name = $req->name;
            $banner->doc_path = $imageData['doc_path'];
            $banner->save();

            $this->res["message"] = "banner Saved";
            $this->res["data"]    = $banner;
            return response()->json($this->res);

        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
     }

     public function getBanner()
     {
        try {

            $banner = Banner::all();

            $this->res["data"]  = $banner;
            return response()->json($this->res);
        } catch (\Throwable $th) {
            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
     }
}