<?php
 
 namespace App\Repositories;

 use App\DriverRoutes;
 use DB;

 class DriverRouteRepository implements DriverRouteRepositoryInterface {


    public function __construct()
    {

        $this->model = new DriverRoutes();
    }
    
    public function getById($id)
    {
       $routes = DB::table('driver_routes')->where('d_id', $id)->get();
       return $routes;
    }
    
    public function getAll()
    {
        return $this->model->all();
    }

    public function findOrfail($id)
    {
    }

    public function create(array $attributes)
    {
        return $this->model->create($attributes);
    }

    public function update($id, array $data)
    {
    }

    public function delete($id)
    {
    }

    public function driverMultiRoute(array $obj)
    {
        return $this->model->create($obj);
    }
 }

