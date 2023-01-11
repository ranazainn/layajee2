<?php

namespace App\Repositories;

use App\Customer;

interface CustomerRepositoryInterface
{

    public function getById($id);
    
    public function findOrfail($id);

    public function getAll();

    public function create($request, $id, $fromAdmin = false); 

    public function update($id, array $attributes);

    public function delete($id);

    public function edit($id);

    
}