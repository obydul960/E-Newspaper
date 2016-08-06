<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class CategoryModel extends Model
{
    protected $table = 'main_category';
    protected $fillable = ['id','category_name','status'];
    public $timestamps = false;
}
