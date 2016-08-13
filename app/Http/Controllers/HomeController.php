<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
use DB;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
        $news_show = DB::table('news_table')
            ->join('image_table', 'news_table.news_id', '=', 'image_table.news_id')
            ->select('news_table.id','news_table.news_title','news_table.editor','news_table.published','image_table.image')
           ->take(5)
            ->orderBy('id', 'desc')->get();
        $backingNews = DB::table('breaking_news')
            ->take(5)
            ->orderBy('id', 'desc')->get();
        $newCount =DB::table('news_table')->count();
        $backingnewCount =DB::table('breaking_news')->count();

        return view('Backend.backend_home',compact('news_show','backingNews','newCount','backingnewCount'));
        }
        else{}
    }
}
