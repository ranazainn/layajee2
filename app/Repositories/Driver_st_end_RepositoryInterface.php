<?php

namespace App\Repositories;

interface Driver_st_end_RepositoryInterface
{

    public function getById($id);
    
    public function findOrfail($id);

    public function getAll();

    public function create(array $attributes); 

    public function update($id, array $attributes);

    public function delete($id);

    // public function edit($id);

    public function saveDriverRoute(array $obj);
    public function getDriverRoute();
    public function getDriverRouteById($id);
}