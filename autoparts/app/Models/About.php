<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class About extends Model
{

    protected $table = "about";
    protected $primaryKey = 'about_id';
    protected $guarded=[];
    public $timestamps = false;

}
