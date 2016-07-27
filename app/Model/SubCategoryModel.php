<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SubCategoryModel extends Model
{
    protected $table = 'sub_category';
    protected $fillable = ['main_cat_id','sub_cat_name','status'];
    public $timestamps = false;
}
