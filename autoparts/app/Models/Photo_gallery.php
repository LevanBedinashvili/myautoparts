<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Photo_gallery extends Model
{

    protected $table = "photo_gallery";
    protected $primaryKey = 'photo_gallery_id';
    protected $guarded=[];
    public $timestamps = false;

}
