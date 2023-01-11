<?php
namespace App\Repositories;

use App\OrderMaster;

class OrderMasterRepository implements OrderMasterRepositoryInterface{

    public function find($id)
    {
        OrderMaster::find($id);

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