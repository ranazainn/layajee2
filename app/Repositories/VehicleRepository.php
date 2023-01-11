<?php
namespace App\Repositories;

use App\Vehicle;

class VehicleRepository implements VehicleRepositoryInterface{

    public function find($id)
    {
        $vehicle=Vehicle::find($id);

    }
    public function all()
    {
        $allVehicle=Vehicle::all();
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