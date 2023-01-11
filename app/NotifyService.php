<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class NotifyService extends Model
{
    public $timestamps = false;
    public $table = 'notify_services';
    protected $fillable = [
        'id','user_id','service_id','notify_me','on_click'
    ]; 
}
