<?php


namespace App\Http\Repositories\BaseRepository;


class Repository
{
    protected $model;

    protected $relations = [];

    protected $fromWeb = false;

    protected $user;

    protected $paginate = 10;



    public function dataTable()
    {

    }

    public function getQuery()
    {
        return $this->getModel()->query();
    }

    public function getModel()
    {
        return $this->model;
    }

    public function setRelations($relations)
    {
        $this->relations = $relations;
    }

    public function getRelations()
    {
        return $this->relations;
    }

    public function setFromWeb($bool)
    {
        $this->fromWeb = $bool;
    }

    public function getFromWeb()
    {
        return $this->fromWeb;
    }

    public function setUser()
    {
       
  
        if ($this->getFromWeb()) {
            $this->user = auth()->user();
        } else {

            $this->user = \request('jwt.user', new \stdClass());

        }
    }

    public function getUser()
    {
        $this->setUser();
        return $this->user;
    }

    public function setPaginate($int)
    {
        $this->paginate = $int;
    }

    public function getPaginate()
    {
        return $this->paginate;
    }

   

}