<?php
namespace App\Repositories;

interface ServiceTypeRepositoryInterface
{

    public function getById($id);

    public function getAll();

    public function notifyMe(array $obj);
    public function getNotifyMe();
    public function update(array $obj, $id);

    public function delete($id);

    public function edit($id);

    
}