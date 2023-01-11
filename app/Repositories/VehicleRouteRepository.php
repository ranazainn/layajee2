<?php
namespace App\Repositories;

use App\VehicleRoute;

class VehicleRouteRepository implements VehicleRouteRepositoryInterface{

    public function find($id)
    {
     
        $vehicleRoute=VehicleRoute::find($id);
      
    }
    public function all()
    {

    }
    public function create()
    {

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

}