<?php
namespace App\Repositories;

use App\Customer;
use App\ChildInfo;
use App\Traits\EMails;
class CustomerRepository implements CustomerRepositoryInterface{
    use EMails;
    private $model;
    private $modelchildinfo;

    public function __construct()
    {   
        $this->model =new Customer;
        $this->modelchildinfo=new ChildInfo;
    }
    public function getById($id)
    {
        return $this->model->findOrFail($id);
    }

    public function findOrfail($id)
    {
        return $this->model->findOrfail($id);
    }

    public function getAll()
    {
        return $this->model->all();
    }

    public function create($request, $id, $fromAdmin = false)
    {
        $data = $request;
        $data['verify_with'] = 'email';
        $data['verification_code'] = rand(1000, 9999);
       
        $user=$this->model->create($data);
         if (!$fromAdmin) {
            if ($data['verify_with'] == 'email') {
                $data['email_verified'] = 0;
                $data['receiver_email'] = $data['email'];
                $data['receiver_name'] =  $data['name'];
                $data['sender_name'] = 'Layajee';
                $data['sender_email'] = "layajee@gmail.com";
                $this->sendMail($data, 'emails.email_verification', 'Email verification code', $data['receiver_email'], $data['sender_email']);
            } 
        }
    }
    public function createchilinfo(array $attributes)
    {
        return $this->modelchildinfo->fill($attributes)->save();
    }

    public function update($id, array $attributes)
    {

    }
    public function delete($id)
    {

    }
    public function edit($id)
    {

    }
    
  
}