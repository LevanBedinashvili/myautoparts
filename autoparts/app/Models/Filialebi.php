<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Filialebi extends Model
{

    protected $table = "filialebi";
    protected $primaryKey = 'filialebi_id';
    protected $guarded=[];
    public $timestamps = false;
}
