<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Ratom_chven extends Model
{

    protected $table = "ratom_chven";
    protected $primaryKey = 'ratom_chven_id';
    protected $guarded=[];
    public $timestamps = false;

}
