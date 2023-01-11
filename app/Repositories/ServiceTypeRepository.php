<?php
namespace App\Repositories;

use App\ServiceType;
use App\NotifyService;
use Illuminate\Support\Facades\Auth;

class ServiceTypeRepository implements ServiceTypeRepositoryInterface
{


    public function __construct()
    {
        $this->notify_model = new NotifyService();
    }

    public function getById($id)
    {
       return  $u_id=ServiceType::find($id);
    }
    public function getNotifyMe()
    {
        $auth = Auth::user()->id;
        $notify = $this->notify_model->getModel()::where('user_id',$auth)->first();
        return $notify;
    }
    public function notifyMe(array $obj) 

    {
        return $this->notify_model->create($obj);
    }

    public function update(array $obj, $id)
    {
        $auth = Auth::user()->id;
        $user_id = $this->notify_model->update($obj, $auth);
        return $user_id;
    }
    public function delete($id)
    {

    }
    public function edit($id)
    {
        
    }



    public function getAll()
    {
        
    }

   


}