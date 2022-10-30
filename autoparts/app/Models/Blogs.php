<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Blogs extends Model
{

    protected $table = "news";
    protected $primaryKey = 'news_id';
    protected $guarded=[];
    public $timestamps = false;

}
