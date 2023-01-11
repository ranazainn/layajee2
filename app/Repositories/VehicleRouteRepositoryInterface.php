<?php

namespace App\Repositories\Interfaces;

interface VehicleRouteRepositoryInterface
{

    public function find($id);
    public function all();
    public function create();
    public function update($id, array $data);
    public function delete($id);
    public function edit($id);

}