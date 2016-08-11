<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\CategoryModel;
use App\Model\BackingNewsModel;
use App\Model\NewsModel;
use DB;

class FontendNewsController extends Controller
{

  public function __construct()
  {
      $this->middleware('auth');
  }

    public function create(){
        return view('layouts.fontend_master');
    }
    //foneted news form show by obydul date:4-8-16
    public function view(){

        $viewHomePage=CategoryModel::where('view_status','=',1)->get();
        $main_category_up   = CategoryModel::where('status','=',1)->get();
        $main_category_down = CategoryModel::where('status','=',2)->get();
        $backing_news       = BackingNewsModel::all();
        $national_news      = NewsModel::where('main_category','=',6)->orderBy('id','desc')->take(1)->get();

        $national_news_2nd = NewsModel::where('main_category','=',6)->orderBy('id','desc')->get();

      //  $national_news_2nd = DB::table('news_table')
      //           ->join('image_table', 'news_table.news_id', '=', 'image_table.news_id')
      //           ->select('news_table.id','news_table.news_title', 'image_table.image')
      //           ->orderBy('id', 'desc')->get();


        $job_query      = NewsModel::where('main_category','=',10)->orderBy('id','desc')->get();

        $home_view_category = DB::table('news_table')
            ->join('main_category', 'news_table.main_category', '=', 'main_category.id')
            ->select('main_category.id','news_table.news_title','news_table.short_details','main_category.category_name')
            ->orderBy('id', 'asc')
            ->take(4)
            ->groupBy('main_category')
            ->get();
       // dd($home_view_category);
        $home_view_category_image = DB::table('news_table')
            ->where('news_table.main_category','=',6)
            ->join('image_table', 'news_table.news_id', '=', 'image_table.news_id')
            ->select('news_table.id','news_table.news_title','news_table.short_details','image_table.image')
            ->orderBy('id', 'desc')->get();
    // dd($home_view_category_image);
        return view('Fontend.news.news_home',compact('main_category_up','main_category_down','backing_news','national_news','national_news_2nd',
        'job_query','home_view_category','home_view_category_image','viewHomePage'));
    }

    //end class
}
