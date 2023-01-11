<?php

namespace App\Http\Controllers;

use App\Repositories\OfficeInfoRepository;
use App\Repositories\RideRepository;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficeInfoController extends Controller
{

    private $officeInfoRepo;

    protected $rideRepository;

    public function __construct()
    {

        $this->officeInfoRepo = new OfficeInfoRepository();

        $this->rideRepository = new RideRepository();
    }

    public function index()
    {

        return view('office');
    }


    public function createOffice(Request $request)
    {

        $user_name=Auth::user();

        // $validatedData = $request->validate([
        //     'pickup_time' => 'required',
        //     'drop_off_time' => 'required',      
        //     'pickup_location'=>'required',
        //     'drop_off_location' => 'required'
        // ]);      
        //    $this->officeInfoRepo->create($validatedData);

        $data['gender']=$request['gender'];
        $data['usr_id']=$request['usr_id'];
        $data['pickup_time']=$request['pickup_time'];
        $data['drop_off_time']=$request['drop_off_time'];
        $data['pick_up_location']=$request['pick_up_location'];
        $data['drop_off_location']=$request['drop_off_location'];
        $data['p_lat']=$request['p_lat'];
        $data['p_long']=$request['p_long'];
        $data['d_lat']=$request['d_lat'];
        $data['d_long']=$request['d_long'];
        $data['vehicle_type']=$request['vehicle_type'];
        $data['child_name']=$user_name->name;


        try {

            $user = $this->rideRepository->create($data);

            $request['ride_id'] = $user->id;

            $this->officeInfoRepo->create($data);

            return responseBuilder()->success(__('Child created Successfully'));

        } catch (\Exception $e) {

            return response(['err' => $e->getMessage()]);
        }
    }
}
