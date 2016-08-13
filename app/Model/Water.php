<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Water extends Model
{
    protected $table = 'rw_pictures';
    protected $fillable = ['id','filename'];
   // public $timestamps = false;
}
