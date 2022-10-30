<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use DB;

class Product extends Model
{

    protected $table = "products";
    protected $primaryKey = 'products_id';
    protected $guarded=[];
    public $timestamps = false;


    public function mycategory()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function subcategory()
    {
        return $this->belongsTo(Sub_category::class, 'sub_cat_id');
    }
}
