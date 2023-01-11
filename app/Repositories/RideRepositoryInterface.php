<?php

namespace App\Repositories;

interface RideRepositoryInterface
{

    public function getById($id);
    
    public function findOrfail($id);

    public function getAll();

    public function create(array $id); 

    public function update($id, array $attributes);

    public function delete($id);

    public function edit($id);

    
}