<?php

namespace App\Http\Controllers\AdminPanel\Backoffice;

use App\Booking;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Repositories\ChildRepository;
use App\Repositories\BookingRepository;
use App\Repositories\OfficeInfoRepository;
use App\Repositories\DriverRepository;
use App\Repositories\RideDetailsRepository;
use App\Repositories\Driver_st_end_Repository;
use App\Repositories\DriverRouteRepository;
use App\User;
use DB;
use App\Child;
use App\Driver;
use App\DriverComplain;
use App\Driver_st_end;
use App\OfficeInfo;
use App\Person;
use App\PersonBookingDay;
use Illuminate\Support\Facades\Auth;
use DataTables;

class HomeController extends Controller
{

    private $childRepo;
    private $bookingRepo;
    private $OfficeInfoRepo;
    private $driverRepo;
    private $rideDetailsRepo;
    private $driverRouteRepo;
    private $driver_st_end_Repo;

    public function __construct()
    {


        $this->driverRouteRepo = new  DriverRouteRepository;
        // $this->childRepo = new ChildRepository;
        $this->bookingRepo = new BookingRepository;
        $this->OfficeInfoRepo = new OfficeInfoRepository;
        $this->driverRepo = new DriverRepository;
        $this->rideDetailsRepo = new RideDetailsRepository;
        $this->driver_st_end_Repo = new Driver_st_end_Repository;
    }

    public function index()
    {

        // $childinfo = $this->childRepo->gelAllChild();

        if (Auth()->user()->role == 1) {
            $data = DB::table('users')->where('role', 1)->get();
            $user = User::where('role', '3')->count();
            $driver = User::where('role', '2')->count();
            $unassign = Booking::where('driver_id', null)->count();
            $assign = Booking::where('driver_id', '!=', null)->count();
            $getdriver = Driver::all();
            $reserve = 0;
            $unreserve = 0;
            foreach ($getdriver as $item) {
                if ($item->vehicle_seats == $item->occupied_seats) {
                    $reserve += 1;
                } else {
                    $unreserve += 1;
                }
            }
            return view('AdminViews/home', compact('data', 'user', 'driver', 'unassign', 'assign','reserve','unreserve'));
        } else {
            return  redirect('/');
        }
    }

    public function assignDriverChild(Request $request, $id)
    {

        $d = Child::find($id);
        $d->user_driver_id = $request->user_driver_id;

        $d->save();
    }
    public function getOfficeInfoList()
    {

        $officeinfo = $this->childRepo->getOfficeUsers();

        return view('AdminViews/officeInfoList')->with('officeinfo', $officeinfo);
    }

    public function getAssignDriver($id)
    {

        $rides = $this->rideDetailsRepo->getById($id);
        // dd($rides);
        $driver_routes = $this->driverRouteRepo->getById($id);

        $driver_routes_array = [];

        for ($i = 0; $i < count($driver_routes); $i++) {

            $driver_routes_array = $this->rideDetailsRepo->findDriver($driver_routes[$i]->loc_lat, $driver_routes[$i]->loc_long);
        }

        $person_details = $rides->toArray();

        $pickup_time = $person_details['pickup_time'];

        $p_lat = $person_details['p_lat'];
        $p_long = $person_details['p_long'];
        $drivers_data = $this->rideDetailsRepo->findDriver($p_lat, $p_long);

        $driver_merge = array_merge($driver_routes_array, $drivers_data);

        $drivers_unique_ids = array_unique((array_column($driver_merge, 'user_id')));

        $driver_array = [];

        $all_driver = $this->driverRepo->getAllDriver();

        for ($i = 0; $i < count($all_driver); $i++) {

            // $date1 = strtotime($drivers_data[$i]->st_time);
            // $st_time =  date('H:i', $date1);

            // $date2 = strtotime($drivers_data[$i]->off_time);
            // $off_time =  date('H:i', $date2);

            if (isset($drivers_unique_ids[$i]) != null && isset($all_driver[$i]->id) != null && $drivers_unique_ids[$i] == $all_driver[$i]->id) {

                if ($pickup_time >= $st_time  && $pickup_time <= $off_time) {

                    $driver_array[] =  (object) array('name' => $all_driver[$i]->name, 'id' => $all_driver[$i]->id);
                }
            }
        }

        return view('AdminViews/assign_driver')->with(['driver' => $driver_array, 'rides' => $person_details]);
    }

    public function AssignDriver(Request $request)
    {

        $this->rideDetailsRepo->update($request->ride_details_id, $request->d_id);
        return redirect('admin.home');
    }

    public function getUserList()
    {
        $user_info = DB::table('users')->select('users.*')->where('user_type', 3)->get();

        return view('AdminViews/userList')->with('user_info', $user_info);
    }

    // Customer functions: 
    public function customerList()
    {
        return view('AdminViews/customer');
    }
    public function customerget()
    {
            $data = DB::table('users')->where('role',3);
            
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = "<a href='customer_view/$row->id' class='btn btn-warning'>View</a>";
                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
    }
    public function customerview($id)
    {
        $customer = User::where(['role' => 3])->first();
        $person = Person::where('user_id', $id)->get();

        return view('AdminViews/customer_view', compact('customer', 'person'));
    }
    public function childview($id)
    {
        $person = Person::where('id', $id)->first();
        $booking = Booking::where('person_id', $id)->first();
        $days = PersonBookingDay::where('person_id', $id)->get();
        $driver = User::where(['role' => 2])->get();
        return view('AdminViews/child_view', compact('person', 'booking', 'days', 'driver'));
    }
    public function update(Request $request, $id)
    {
        $booking = Booking::find($id);
        $booking->driver_id = $request->driver;
        $booking->update();
        return redirect()->back();
    }

    // provider functions:
    public function providerList()
    {
        return view('AdminViews/provider');
    }
    public function providerget()
    {
            $data = User::where(['role' => 2])->get();
            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
       
                            $btn = "<a href='provider_view/$row->id' class='btn btn-warning'>View</a>";

                            return $btn;
                    })
                    ->rawColumns(['action'])
                    ->make(true);
    }

    public function providerview($id)
    {
        $driver = User::where('role',2)->first();
        $complain =DriverComplain::where('driver_id',$id)->orderBy('created_at','DESC')->get();
        return view('AdminViews/provider_view', compact('driver','complain'));
    }


    public function notification()
    {

        return view('AdminViews.notification');
    }

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
            $this->res["message"]  = "Notify me" . $auth;
            return response()->json($this->res);
        } catch (\Throwable $th) {

            $this->res["success"]  = false;
            $this->res["message"]  = $th->getMessage();
            return response()->json($this->res);
        }
    }
}
