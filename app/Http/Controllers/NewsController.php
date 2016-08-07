<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Model\CategoryModel;
use App\Model\SubCategoryModel;
use App\Model\NewsModel;
use App\Model\ImageModel;
use App\Model\BackingNewsModel;
use App\Http\Requests;
use Session;
use Input;
use DB;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
    // news form show by obydul date:1-8-16
    public  function create(){
        // category show by obydul date:1-8-16
        $min_category_show =CategoryModel::all();
        return view('Backend.news.news_form',compact('min_category_show'));
    }

    // sub category show category wish form show by obydul date:1-8-16
    public function sub_category(Request $request){
            $subCategory_show = SubCategoryModel::where('main_cat_id',$request->get('sub_category'))->get();
            foreach($subCategory_show as $value){
                if($value!= NULL ){
                    echo "<option value=".$value->id.">". $value->sub_cat_name ."</option>";
                }
                else{
                    echo  "<option value=".$value->id.">". 'Data Not Found' ."</option>";
                }

            }


    }

    // news new store  by obydul date:1-8-16
    public function news_store(Request $request){
        $validator = Validator::make($request->all(),[
            'news_title'       => 'required',
            'sel_min_category' => 'required',
            'sel_sub_category' => 'required',
            'news_image'       => 'required | mimes:jpeg,jpg,png',
            'news_content'     => 'required'
        ]);
        if ($validator->fails())
        {
            Session::flash('error', 'Something went wrong!');
            return redirect::to("news-create")->withErrors($validator);
        }else{
            $news_id=uniqid();
            $short_contain= $request->get('news_content');
            $short_details = substr($short_contain, 0, 250);
            $news_content = new NewsModel();
            $news_content->news_id       = $news_id;
            $news_content->main_category = $request->get('sel_min_category');
            $news_content->sub_category  = $request->get('sel_sub_category');
            $news_content->news_title    = $request->get('news_title');
            $news_content->short_details = $short_details;
            $news_content->full_details  = $request->get('news_content');
            $news_content->save();

            if(Input::file())
            {
                $image = Input::file('news_image');
                $filename  = time() . '.' . $image->getClientOriginalExtension();
                $path = public_path('image_folder/' . $filename);
                Image::make($image->getRealPath())->resize(200, 200)->save($path);
                $imge_upload = new ImageModel();
                $imge_upload->news_id = $news_id;
                $imge_upload->image   = $filename;
                $imge_upload->save();
            }
            Session::flash('success', 'Successfully Data Insert.');
            return redirect::to('news-create');

        }
    }
    //show the news data by obydul date:2-8-16
    public function news_show(){
        $show_news = DB::table('news_table')
            ->join('image_table', 'news_table.news_id', '=', 'image_table.news_id')
            ->select('news_table.id','news_table.news_title','news_table.short_details','image_table.image')
            ->orderBy('id', 'desc')->get();
        return view('Backend.news.news_show',compact('show_news'));
    }

    // news edit form show by obydul date:2-8-16
    public function edit_news($id){
        $category_show =CategoryModel::all();
        $show_news_data = DB::table('news_table')
            ->leftjoin('main_category', 'news_table.main_category', '=', 'main_category.id')
            ->leftjoin('sub_category', 'news_table.sub_category', '=', 'sub_category.id')
            ->leftjoin('image_table', 'news_table.news_id', '=', 'image_table.news_id')
            ->select('news_table.id','news_table.news_title',
                'news_table.short_details','news_table.full_details','main_category.category_name','sub_category.sub_cat_name','image_table.image')
            ->where('news_table.id','=',$id)
            ->first($id);
        return view('Backend.news.edit_news',compact('category_show','show_news_data'));
    }

    // news update by obydul date:2-8-16
    public function news_update(Request $request,$id){
        $news_update                 = NewsModel::find($id);
        $news_image_update           = ImageModel::find($id);
        $short_contain= $request->get('news_content');
        $short_details = substr($short_contain, 0, 250);
        $news_id=uniqid();
        $news_update->news_id        = $news_id;
        $news_update->main_category	 = $request->get('sel_min_category');
        $news_update->sub_category   = $request->get('sel_sub_category');
        $news_update->news_title     = $request->get('news_title');
        $news_update->short_details  = $short_details;
        $news_update->full_details   = $request->get('news_content');
        $news_update->save();
        Session::flash('success', 'Successfully Data Update.');
        return redirect::to('news-create');

    }


 // backing New form show by obydul date:3-8-16
    public function  backing_news_form(){
        $backing_new=DB::table('breaking_news')->orderBy('id', 'desc')->get();
        //dd($backing_new);
        //$backing_new=BackingNewsModel::all()->orderBy('id', 'desc');
        return view('Backend.news.backing_news',compact('backing_new'));
    }
    // Backing News store by obydul date:3-8-16
    public function backing_news_store(Request $request){
        $validator = Validator::make($request->all(),[
            'news_title'       => 'required',
            'back_link' => 'required'
        ]);
        if ($validator->fails())
        {
            Session::flash('error', 'Something went wrong!');
            return redirect::to("backing-news")->withErrors($validator);
        }
        else{
            $news = new BackingNewsModel();
            if (Input::hasFile('news_icon')) {
                $extension3 = Input::file('news_icon')->getClientOriginalExtension();
                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                    $date = time();
                    $fname = $date . '.' . $extension3;
                    $image = Input::file('news_icon');
                    $path = public_path('image_folder/');
                    $image->move($path,$fname);
                    $news_id = uniqid();
                    $news->news_icon = $fname;
                    $news->news_id    =$news_id;
                    $news->news_title =$request->get('news_title');
                    $news->back_link  =$request->get('back_link');
                    $news->save();
                }
            }
            else{
                $news_title       = uniqid();
                $news->news_id    = $news_title;
                $news->news_title = $request->get('news_title');
                $news->back_link  = $request->get('back_link');
                $news->save();
            }
            Session::flash('success', 'Successfully Data Insert.');
            return redirect::to('backing-news');
        }
    }

    //Backing News update by obydul date:3-8-16
    public function backing_news_update(Request $request,$id){
        $backing_news = BackingNewsModel::find($id);

        if (Input::hasFile('news_icon')) {
            $extension3 = Input::file('news_icon')->getClientOriginalExtension();
            if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                $date = time();
                $fname = $date . '.' . $extension3;
                $image = Input::file('news_icon');
                $path = public_path('image_folder/');
                $image->move($path,$fname);
                $backing_news->news_icon = $fname;
                $news_id                 = uniqid();
                $backing_news->news_id    =$news_id;
                $backing_news->news_title =$request->get('news_title');
                $backing_news->back_link  =$request->get('back_link');
                $backing_news->save();
            }
        }
        else{
            $news_id                 = uniqid();
            $backing_news->news_id    =$news_id;
            $backing_news->news_title =$request->get('news_title');
            $backing_news->back_link  =$request->get('back_link');
            $backing_news->save();
        }
        Session::flash('success', 'Successfully Data Update...');
        return redirect::to('backing-news');

    }
    //news delete obydul date:2-8-16
    public  function  news_delete($id){
        $news_delete=NewsModel::find($id)->delete();
        return redirect::to('news-show');
    }

    //backing news delete by obydul date:3-8-16
    public function backing_news_delete($id){
        $backing_news_delete=BackingNewsModel::find($id)->delete();
        return redirect::to('backing-news');

    }
//end class
}
