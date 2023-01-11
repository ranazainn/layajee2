<?php
namespace App\Repositories;


use App\RideDetails;
use App\Repositories\Driver_st_end_Repository;
use App\Repositories\DriverRouteRepository;


use Illuminate\Support\Facades\DB;
use PDO;

class RideDetailsRepository implements RideDetailsRepositoryInterface
{
    
    private $driver_st_end_Repo;

    public function __construct()
    {  
       $this->driver_st_end_Repo = new Driver_st_end_Repository;
        $this->model =new RideDetails();
    }
    public function getById($id)
    {

       return $this->model->findOrfail($id);
        
    }
    public function getAll()
    {
        return $this->model->all();

    }

    public function getAllAssigned()
    {


    }

    public function findDriver($lat1,$lon1){

    $data  = $this->driver_st_end_Repo->getAll();
    $all_driver_starting=$data->toArray();

    $drivers_array=[];
   
    for($i=0; $i<count($all_driver_starting);$i++) {
   
        $lat2=$all_driver_starting[$i]['st_lat'];
        $lon2=$all_driver_starting[$i]['st_long'];
        $driver_id=$all_driver_starting[$i]['user_id'];
        $st_time  = $all_driver_starting[$i]['start_time'];
        $off_time = $all_driver_starting[$i]['off_time'];

        $theta = $lon1 - $lon2;
        $dist = sin(deg2rad($lat1)) * sin(deg2rad($lat2)) +  cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * cos(deg2rad($theta));
        $dist = acos($dist);
        $dist = rad2deg($dist);
        $miles = $dist * 60 * 1.1515;
           
       $distance_in_km =round($miles * 1.609344 );

       $distance_in_km <= 5 ? $drivers_array[] = (object) array('user_id' => $driver_id, 'distance' => $distance_in_km ,'st_time' => $st_time,'off_time' => $off_time  ) : $drivers_array[]=null; 
     
    }
      
    return $drivers_array;

    }

    public function getAllUnAssigned()
    {
      
      $unAssgined=DB::table('ride_details')
      ->whereNUll('d_id')->get();

      return $unAssgined;
    }

    public function findOrfail($id)
    {
        return $this->model->find($id);
    }
    public function create(array $attribute)
    {
        return $this->model->create($attribute);
        
    }
    public function update($id, $data)
    {      

         $this->model->where('id',$id)->update([
           'd_id'=>$data,
        ]);
    }
    public function delete($id)
    {

    }
    public function edit($id)
    {
        
    }

}