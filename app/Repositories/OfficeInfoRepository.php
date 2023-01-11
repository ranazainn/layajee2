<?php
namespace App\Repositories;

use App\Booking;


class OfficeInfoRepository implements OfficeInfoRepositoryInterface
{
    
    public function __construct()
    {   
        $this->model =new Booking();
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
    public function edit($id)
    {
        
    }

}