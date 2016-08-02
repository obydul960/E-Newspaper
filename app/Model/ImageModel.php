<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ImageModel extends Model
{
    protected $table = 'image_table';
    protected $fillable = ['news_id','image'];
    public $timestamps = false;
}
