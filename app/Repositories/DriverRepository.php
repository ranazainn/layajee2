<?php
namespace App\Repositories;

use App\Driver;
use App\User;
use App\VehicleModel;
use App\Vehicle;
use App\Doctype;
use App\DriverDocs;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class DriverRepository implements DriverRepositoryInterface
{
    
    public function __construct()
    {   
        $this->vehicle          = new Vehicle();
        $this->user             = new User();
        $this->vehicle_model    = new VehicleModel();
        $this->driver           = new Driver();
        $this->driver_docs      = new DriverDocs();
        $this->doctype          = new Doctype();
    }

    public function getById($id)
    {
        
    }
    public function getAll()
    {

    }

    public function getAllDriver()
    {
       $all_drivers =DB::table("users")
        ->where('role','=',2)
        ->select('users.*')->get();

        return $all_drivers;


    }

    public function getAllVehicle()
    {
       return $this->vehicle->all();
    }

    public function getAllVehicleModel()
    {
       return $this->vehicle_model->all();
    }
    
    public function getDocTypeModel()
    {
       return $this->doctype->all();
    }
    public function create(array $attributes)
    {

    }

    public function createDriver(array $attributes)
    {
        return $this->driver->create($attributes);
    }

    public function createDriverDocs(array $attributes)
    {
        return $this->driver_docs->create($attributes);
    }
    public function getDriverDocsAuthUser() //registration_book
    {
        $userID= Auth::user()->id;
        $getDriver = $this->user->getModel()::select('users.*')->with('vehicleDetails','vehicleDocs.docType')
        ->where('id', $userID)
        ->get();
        return $getDriver;
    }
    public function update($id, array $data)
    {

    }
    public function delete($id)
    {

    }
    public function edit($id)
    {
        
    }

    public function getRegistrationBook()
    {
        $userId = Auth::user()->id;
        $RegistrationBook = $this->driver_docs->getModel()::with('docType')
        ->where('doc_type_id',2)
        ->where('driver_id',$userId)->get();
        return $RegistrationBook;
    }

    public function getLicense()
    {
        $userId = Auth::user()->id;
        $licenseData = $this->driver_docs ->getModel()::with('docType')
        ->where('doc_type_id',1)
        ->where('driver_id',$userId)->get();
        return $licenseData;
    }

    public function getAuthVehicleInfo()
    {
        $userId = Auth::user()->id;
        $infoVehhicle = $this->driver->getModel()::with('vehicle','vehicleModel', 'vehicleModel.vehicleType')
        ->where('user_id',$userId)->get();
        return $infoVehhicle;
    }


}