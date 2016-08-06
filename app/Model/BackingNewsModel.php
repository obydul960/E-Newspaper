<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class BackingNewsModel extends Model
{
    protected $table = 'breaking_news';
    protected $fillable = ['news_id','news_title','icon','back_link','status'];
}
