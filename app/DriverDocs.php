<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DriverDocs extends Model
{
    public $timestamps = true;
    public $table='driver_docs';

    protected $fillable = ['driver_id','vehicle_id','doc_type_id','doc_name','doc_ext','doc_number','doc_exp','doc_path','created_at','updated_at'];
    public function docType()
    {
        return $this->hasMany(\App\Doctype::class, 'id', 'doc_type_id');
    }

}

