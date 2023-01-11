<?php

namespace App\Repositories;

use App\Driver_st_end;
use Illuminate\Support\Facades\Auth;


class Driver_st_end_Repository implements Driver_st_end_RepositoryInterface
{

    public function __construct()
    {

        $this->model = new Driver_st_end();
    }
    public function getById($id)
    {
        
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
    public function saveDriverRoute(array $obj)
    {
        return $this->model->create($obj);
    }
    public function getDriverRoute()
    {
        $userId = Auth::user()->id;
        $getRoute =  $this->model->getModel()::with('stops')
        ->where('user_id', $userId)
        ->get();
        return $getRoute;
    }

    public function getDriverRouteById($id)
    {
        $userId = Auth::user()->id;
        $getRoute =  $this->model->getModel()::with('stops')
        ->where('user_id', $userId)
        ->where('id',$id)
        ->get();
        return $getRoute;
    }
}

