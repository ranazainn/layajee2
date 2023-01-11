<?php
namespace App\Repositories;

interface RideDetailsRepositoryInterface
{

    public function getById($id);

    public function getAll();
    public function getAllAssigned();
    public function getAllUnAssigned();

    public function findDriver($lat,$long);
    
    public function create(array $attributes); 

    public function update($id, array $attributes);

    public function delete($id);

    public function edit($id);

    
}