<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Contact extends Model
{

    protected $table = "contact";
    protected $primaryKey = 'contact_id';
    protected $guarded=[];
    public $timestamps = false;

}
