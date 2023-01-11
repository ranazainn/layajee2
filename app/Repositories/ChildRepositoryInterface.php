<?php

namespace App\Repositories;

interface ChildRepositoryInterface
{
    public function getAllChild($id);
    public function getChild($id);
    public function create($obj); 
    // public function gelAllChild();
    public function updatePersonData(array $obj, $id);
    // Office
    public function officeUserCreate($obj);
    public function getAllOfficeUser($id);
    public function getOfficeUser($id);
    public function getOfficeUsers(); //All
    public function deletePersonBooking($id);
}