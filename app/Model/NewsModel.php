<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class NewsModel extends Model
{
    protected $table = 'news_table';
    protected $fillable = ['news_id','main_category','sub_category','news_title','short_details','full_details','status','position'];
   // public $timestamps = false;
}
