<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Repositories\CustomerRepository;
use App\Customer;
use Tymon\JWTAuth\Facades\JWTAuth;
use App\Http\Controllers\Auth;

class CustomerController extends Controller{

    private $customerRepo;

    public function __construct(){
    
         $this->customerRepo=new CustomerRepository;        
    }

   

    // public function createIndexOffice(Request $request){
          
    //     $validatedData = $request->validate([
    //         'name' => 'required|string|max:50',
    //         'email' => 'required|email|unique:customers',      
    //         'phone'=>'required|max:50',
    //         'password' => 'required|min:8'
    //     ]);

        
    //    $this->customerRepo->create($validatedData);
    //     return redirect('/office');      
    // }

    public function indexOffice2()
    {
        return view('indexoffice2');
    }
   

    public function save(Request $request)
    {
        try {
            $user= $this->customerRepo->createchilinfo($request->toArray());
            return responseBuilder()->success(__('Child created Successfully'));
        }
        catch (\Exception $e)
        {
            return response(['err'=>$e->getMessage()]);
        }
       
    }
    public function schoolParentInfo()
    {
        $user=\Auth::User();
        return view('school-parentInfo')->with('user',$user);
    }
    
    // public function saveParent(RegisterRequest $request)
    // {
    //     $login=$request->input('email');
    //     $name=$request->input("name");
    //     $data=array();
    //     $fieldtype=filter_var($login,FILTER_VALIDATE_EMAIL) ? 'email':'phone';
    //     if($fieldtype=='phone'){       
    //     $data['name']=$name;
    //     $data['phone']=$login;
    //     }
    //     elseif($fieldtype=='email'){       
    //         $data['name']=$name;
    //         $data['email']=$login;
    //     }
    //     try {
    //         $user= $this->customerRepo->create($data,0);          
    //     }
    //     catch (\Exception $e){
        
    //         return response(['err'=>$e->getMessage()]);
    //     }
    //     return redirect('/schoolchildinfo');
    // }
    
}