<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class AddModel extends Model
{
    protected $table = 'add_table';
    protected $fillable = ['add_title','add_image','status','position','back_link'];
}
