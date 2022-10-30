<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sub_category extends Model
{
    protected $table = "sub_categories";
    protected $primaryKey = 'id';
    protected $guarded=[];
    public $timestamps = false;

    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }
}
