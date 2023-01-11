<?php

namespace App\Http\Controllers;

use App\Repositories\ChildRepository;
use App\Repositories\RideRepository;

use Illuminate\Http\Request;

use App\User;

class ChildController extends Controller
{
    protected $childRepository;

    protected $rideRepository;

    public function __construct(){
    
         $this->childRepository=new ChildRepository; 
         $this->rideRepository=new RideRepository; 
    }

    public function schoolChildInfo()
    {
        $data=$this->rideRepository->findOrfail(8);
        return view('school-childInfo');
    }

    public function save(Request $request)
    {  
       
        // $validatedData=$request->validate([
        //     'gender'=>'required',
        //     'pickup_time'=>'required',
        //     'drop_off_time'=>'required',
        //     'child_name'=>'required',
        //     'special_child'=>'required',
        //     'pick_up_location'=>'required',
        //     'drop_off_location'=>'required',
        // ]);

        // $data['gender']=$validatedData['gender'];
        // $data['p_id']=array($request->p_id);
        // $data['pickup_time']=$validatedData['drop_off_time'];
        // $data['drop_off_time']=$validatedData['gender'];
        // $data['child_name']=$validatedData['child_name'];
        // $data['special_child']=$validatedData['special_child'];
        // $data['pick_up_location']=$validatedData['pick_up_location'];
        // $data['drop_off_location']=$validatedData['drop_off_location'];

        // $data['gender']=$request['gender'];
        // $data['p_id']=$request['p_id'];
        // $data['pickup_time']=$request['pickup_time'];
        // $data['drop_off_time']=$request['drop_off_time'];
        // $data['child_name']=$request['child_name'];
        // $data['special_child']=$request['special_child'];
        // $data['pick_up_location']=$request['pick_up_location'];
        // $data['drop_off_location']=$request['drop_off_location'];
       
        
        try {

            $user=$this->rideRepository->create($request->toArray()); 
           
            $request['ride_id'] =$user->id;

            $this->childRepository->create($request->toArray());


            return responseBuilder()->success(__('Child created Successfully'));
        }
        catch (\Exception $e)
        {
            return response(['err'=>$e->getMessage()]);
        }
       
    }
}