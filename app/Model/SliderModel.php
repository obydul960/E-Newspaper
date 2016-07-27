<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class SliderModel extends Model
{
    protected $table = 'slider';
    protected $fillable = ['image_title','image','back_link','status'];
    public $timestamps = false;
}
