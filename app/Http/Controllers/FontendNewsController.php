<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Model\CategoryModel;
use App\Model\BackingNewsModel;
use App\Model\NewsModel;
use App\Model\SliderModel;
use App\Model\SubCategoryModel;
use App\Model\AddModel;
use DB;
use Auth;
use Increment;

class FontendNewsController extends Controller
{



    public function create(){

        return view('Fontend.news.news_home');

    }
    //foneted news form show by obydul date:4-8-16
    public function news_home(){

        $slider_image = SliderModel::where('status','=',1)->orderBy('id','desc')->take(3)->get();
        $selected_news = NewsModel::where('selected_news','=',1)->where('published','=',1)->orderBy('id','desc')->get();
        $selected_add = AddModel::where('status','=',1)->where('position','=',1)->orderBy('id','desc')->take(1)->get();
        $selected_add_two = AddModel::where('status','=',1)->where('position','=',2)->orderBy('id','desc')->take(1)->get();
        $viewHomePage=CategoryModel::where('view_status','=',1)->get();
        $hid_news = NewsModel::where('published','=',1)->where('hite_count','>=',1)->get();
       // dd($hid_news);

        $viewHomePage1=CategoryModel::where('view_status','=',1)->first();
        $viewHomePage2=CategoryModel::where('view_status','=',2)->first();
        $viewHomePage3=CategoryModel::where('view_status','=',3)->first();
        $viewHomePage4=CategoryModel::where('view_status','=',4)->first();
        $viewHomePage5=CategoryModel::where('view_status','=',5)->first();
        $viewHomePage6=CategoryModel::where('view_status','=',6)->first();
        $viewHomePage7=CategoryModel::where('view_status','=',7)->first();
        $viewHomePage8=CategoryModel::where('view_status','=',8)->first();
        $viewHomePage9=CategoryModel::where('view_status','=',9)->first();
        $viewHomePage10=CategoryModel::where('view_status','=',10)->first();

      //return $v=count($viewHomePage6);

        ///$national_news      = NewsModel::where('main_category','=',6)->orderBy('id','desc')->take(1)->get();

       // $national_news_2nd = NewsModel::where('main_category','=',6)->orderBy('id','desc')->get();

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
        return view('Fontend.news.news_home',compact('national_news','national_news_2nd',
        'job_query','home_view_category','home_view_category_image','viewHomePage','slider_image','selected_news','selected_add','selected_add_two','hid_news',
        'viewHomePage1','viewHomePage2','viewHomePage3','viewHomePage4','viewHomePage5','viewHomePage6','viewHomePage7','viewHomePage8','viewHomePage9','viewHomePage10'));

        }


    //News details by obydul date:8-8-16
    public function news_details($id){


        //$new = DB::table('news_table')->where('news_id',$id)->increment('hite_count');
       $new = DB::table('news_table')->where('news_id',$id)->first()->hite_count;
       // return $id;
        $final=$new+=1;
        $postd=DB::table('news_table')->where('news_id',$id)->update(['hite_count'=>$final]);
       // dd($final);


        $main_category = DB::table('news_table')
            ->join('main_category', 'news_table.main_category', '=', 'main_category.id')
            ->select('main_category.category_name')
            ->where('news_table.news_id','=',$id)
            ->first();
        $news_details = DB::table('news_table')
            ->join('image_table', 'news_table.news_id', '=', 'image_table.news_id')
            ->select('*')
            ->where('news_table.news_id','=',$id)
            ->first();
        $related_news = NewsModel::orderBy('id','desc')->get();
        $selected_add = AddModel::where('status','=',1)->where('position','=',1)->orderBy('id','desc')->take(1)->get();
        $selected_add_two = AddModel::where('status','=',1)->where('position','=',2)->orderBy('id','desc')->take(1)->get();
        return view('Fontend.news.news_details',compact('main_category','news_details','related_news','selected_add','selected_add_two'));

        }


    // Category waish news details by obydul date:8-8-16
    public function category_news_details($id){


        $category = DB::table('news_table')
            ->join('main_category', 'news_table.main_category', '=', 'main_category.id')
            ->select('*')
            ->where('news_table.main_category','=',$id)
            ->get();
       // dd($category);

        $viewSubcategory=SubCategoryModel::where('main_cat_id','=',$id)->where('status','=',1)->get();
        $rlative_id = NewsModel::orderBy('id','desc')->get();

        //dd($viewSubcategory);
        return view('Fontend.news.news_category',compact('category','viewSubcategory','rlative_id','id'));

       
        }

    //end class
}
