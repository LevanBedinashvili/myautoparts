<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Video_gallery extends Model
{

    protected $table = "video_gallery";
    protected $primaryKey = 'video_gallery_id';
    protected $guarded=[];
    public $timestamps = false;

}
