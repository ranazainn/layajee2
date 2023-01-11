<?php

namespace App\Repositories;

use App\Person;
use App\OfficeUser;
use Illuminate\Support\Facades\Auth;

class ChildRepository implements ChildRepositoryInterface
{

    public function __construct()
    {

        $this->model = new Person();
        $this->OfficeUser = new OfficeUser();
    }

    // public function gelAllChild()
    // {
    //     // return $this->model->getModel()::with('booking','driver')->get();
    // }

    public function getAllChild($id)
    {
        $userchild = $this->model->getModel()::select('childs.*')
        ->where('user_id', '=', $id )->get();
        return $userchild;
      
    }
    public function getChild($id)
    {
        return $this->model->getModel()::with('booking','driver.vehicleDetails.vehicle.vehicleModel')->find($id);
    }
    public function create($obj)
    {
        return $this->model->create($obj);
    }
    public function getOfficeUsers()
    {
        return $this->OfficeUser->all();
      
    }
    public function officeUserCreate($obj)
    {
        return $this->OfficeUser->create($obj);
    }
    public function getAllOfficeUser($id)
    {
        $userOffice = $this->OfficeUser->getModel()::select('offices_user.*')
        ->where('user_id', '=', $id )->get();
        return $userOffice;
      
    }
    public function getOfficeUser($id)
    {
        return $this->OfficeUser->getModel()::with('booking','driver.details.vehicle.vehicleModel')->find($id);
    }

    public function deletePersonBooking($id)
    {
        $user = $this->model->find($id);
        $user->booking()->delete();
        $user->booking_day()->delete();
        $user->delete();
    }

    public function updatePersonData(array $obj, $id)
    {
        $personId =  $this->model->find($id);
        $person   =  $this->model::getModel()->where('id', $personId->id)->update($obj);
       return $person;
    }
}