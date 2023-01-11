<?php

namespace App\Repositories;



interface DriverRepositoryInterface
{

    public function getById($id);

    public function getAll();
    
    public function getAllDriver();

    public function create(array $attributes);

    public function createDriver(array $attributes);

    public function getDocTypeModel();
    
    public function getAllVehicleModel();
    
    public function getAllVehicle() ;

    public function update($id, array $attributes);

    public function delete($id);

    public function edit($id);
    public function getLicense();
    public function getAuthVehicleInfo();
    public function getDriverDocsAuthUser();
    public function getRegistrationBook();
    
}