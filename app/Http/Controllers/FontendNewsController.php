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
    //foneted news form show by obydul date:4-8-16
    public function view(){
        $main_category_up   = CategoryModel::where('status','=',1)->get();
        $main_category_down = CategoryModel::where('status','=',2)->get();
        $viewHomePage=CategoryModel::where('view_status','=',1)->get();
      //  dd($viewHomePage);
        $backing_news       = BackingNewsModel::all();
        $national_news      = NewsModel::where('main_category','=',6)->orderBy('id','desc')->take(1)->get();
        $national_news_2nd = DB::table('news_table')
            ->join('image_table', 'news_table.news_id', '=', 'image_table.news_id')
            ->select('news_table.id','news_table.news_title', 'image_table.image')
            ->orderBy('id', 'desc')->get();
        $job_query      = NewsModel::where('main_category','=',10)->orderBy('id','desc')->get();

        $home_view_category = DB::table('news_table')
            ->join('main_category', 'news_table.main_category', '=', 'main_category.id')
            ->select('news_table.id','news_table.news_title','news_table.short_details','main_category.category_name')
            ->orderBy('id', 'asc')
            ->take(4)
            ->groupBy('main_category')
            ->get();
       // dd($home_view_category);
        $home_view_category_image = DB::table('news_table')
            ->join('main_category', 'news_table.main_category', '=', 'main_category.id')
            ->join('image_table', 'news_table.news_id', '=', 'image_table.news_id')
            ->select('news_table.id','news_table.news_title','news_table.short_details','main_category.category_name' ,'image_table.image')
            ->orderBy('id', 'desc')->take(1)->get();

        return view('frontend_news.fontend_layout',compact('main_category_up','main_category_down','backing_news','national_news',
        'national_news_2nd','job_query','home_view_category','home_view_category_image','viewHomePage'));
    }

    // Fontant Details news show by obydul date: 6-8-16
    public function fontend_details($id){
        $main_category = DB::table('main_category')->where('id',$id)->first();
        $news_details  = DB::table('news_table')
            ->where('news_table.main_category',$id)
            ->join('image_table', 'news_table.news_id', '=', 'image_table.news_id')
            ->select('news_table.id','news_table.news_title','news_table.short_details','news_table.full_details','image_table.image')
            ->first();
        return view('frontend_news.fontend_details',compact('main_category','news_details'));
    }

    public function category_details($id){
        $category = DB::table('main_category')->where('id',$id)->first();
        $category_news_details  = DB::table('news_table')
            ->where('news_table.main_category',$id)
            ->join('image_table', 'news_table.news_id', '=', 'image_table.news_id')
            ->select('news_table.id','news_table.news_title','news_table.short_details','news_table.full_details','image_table.image')
            ->orderBy('id', 'desc')
            ->take(2)
            ->get();
        $sub_category = DB::table('sub_category')->where('main_cat_id',$id)->get();

        $sub_category_news_details  = DB::table('news_table')
            ->leftJoin('sub_category', 'news_table.sub_category', '=', 'sub_category.id')
            ->leftJoin('image_table', 'news_table.news_id', '=', 'image_table.news_id')
            ->select('*')
            //->select('sub_category.sub_cat_name','sub_category.id','news_table.id','news_table.main_category','news_table.sub_category','news_table.news_title','news_table.short_details','news_table.full_details','image_table.image')
            ->where('news_table.main_category',$id)
            //->orderBy('id', 'desc')
           // ->take(4)
            ->get();
       // dd($sub_category_news_details);
        $sub_category_news  = DB::table('news_table')
            ->leftJoin('sub_category', 'news_table.sub_category', '=', 'sub_category.id')
            ->leftJoin('image_table', 'news_table.news_id', '=', 'image_table.news_id')
            ->select('sub_category.sub_cat_name','news_table.id','news_table.sub_category','news_table.news_title','news_table.short_details','news_table.full_details','image_table.image')
            ->where('news_table.main_category',$id)
            ->get();
       // dd($sub_category_news_details);
       return view('frontend_news.category_details',compact('category','category_news_details','sub_category','sub_category_news_details'));
    }

    //end class
}
