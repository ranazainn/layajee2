<?php 

namespace App\Repositories;

interface DriverRouteRepositoryInterface {

    public function getById($id);
    
    public function findOrfail($id);

    public function getAll();

    public function create(array $attributes); 

    public function update($id, array $attributes);

    public function delete($id);

    // public function edit($id);
    public function driverMultiRoute(array $obj);

}