<?php
namespace App\Repositories;


use App\RideDetails;
use App\Ride;

class RideRepository implements RideRepositoryInterface
{
    
    public function __construct()
    {  
       
        $this->model =new Ride();
    }
    public function getById($id)
    {
       
        
    }
    public function getAll()
    {

    }
    public function findOrfail($id)
    {
        return $this->model->find($id);
    }
    public function create(array $attribute)
    {
        return $this->model->create($attribute);
        
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