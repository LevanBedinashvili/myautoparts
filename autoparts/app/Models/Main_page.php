<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Main_page extends Model
{

    protected $table = "main_page";
    protected $primaryKey = 'id';
    protected $guarded=[];
    public $timestamps = false;

}
