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
use Auth;
use Intervention\Image\Facades\Image;

class NewsController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
    // news form show by obydul date:1-8-16
    public  function create(){
        if(Auth::check()){
        // category show by obydul date:1-8-16
        $min_category_show =CategoryModel::all();
        return view('Backend.news.news_form',compact('min_category_show'));
        }
        else{
            return view('errors.404');
        }
    }

    // sub category show category wish form show by obydul date:1-8-16
/*    public function sub_category(Request $request){

            $subCategory_show = SubCategoryModel::where('main_cat_id',$request->get('sub_category'))->get();
            foreach($subCategory_show as $value){
                if($value!= NULL ){
                    echo "<option value=".$value->id.">". $value->sub_cat_name ."</option>";
                }
                else{
                    echo  "<option value=".'0'.">". 'Data Not Found' ."</option>";
                }

            }




    }*/

    // news new store  by obydul date:1-8-16
    public function news_store(Request $request){
        if(Auth::check()){
        $validator = Validator::make($request->all(),[
            'news_title'       => 'required',
            'sel_min_category' => 'required',
            'news_image'       => 'required | mimes:jpeg,jpg,png',
            'news_content'     => 'required',
            'news_editor'           => 'required',
            'news_status'           => 'required'
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
            if($request->get('sel_sub_category') == ''){

            }
            else{
                $news_content->sub_category  = $request->get('sel_sub_category');
            }
            $news_content->news_title    = $request->get('news_title');
            $news_content->selected_news = $request->get('news_selected');
            $news_content->short_details = $short_details;
            $news_content->full_details  = $request->get('news_content');
            $news_content->editor        = $request->get('news_editor');
            $news_content->published     = $request->get('news_status');
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
        else{
            return view('errors.404');
        }
    }
    //show the news data by obydul date:2-8-16
    public function news_show(){
        if(Auth::check()){
        $show_news = DB::table('news_table')
            ->join('image_table', 'news_table.news_id', '=', 'image_table.news_id')
            ->select('news_table.id','news_table.published','news_table.news_title','news_table.short_details','image_table.image')
            ->orderBy('id', 'desc')->get();
        return view('Backend.news.news_show',compact('show_news'));
        }
        else{
            return view('errors.404');
        }
    }

    // news edit form show by obydul date:2-8-16
    public function edit_news($id){
        if(Auth::check()){
        $category_show =CategoryModel::all();
        $show_news_data = DB::table('news_table')
            ->leftjoin('main_category', 'news_table.main_category', '=', 'main_category.id')
            ->leftjoin('sub_category', 'news_table.sub_category', '=', 'sub_category.id')
            ->leftjoin('image_table', 'news_table.news_id', '=', 'image_table.news_id')
            ->select('news_table.id','news_table.news_title','news_table.editor','news_table.published',
                'news_table.short_details','news_table.full_details','main_category.category_name','sub_category.sub_cat_name','image_table.image')
            ->where('news_table.id','=',$id)
            ->first($id);
        return view('Backend.news.edit_news',compact('category_show','show_news_data'));
        }
        else{
            return view('errors.404');
        }
    }

    // news update by obydul date:2-8-16
    public function news_update(Request $request,$id){
        if(Auth::check()){
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
        $news_update->editor         = $request->get('news_editor');
        $news_update->published      = $request->get('news_status');
        $news_update->save();
        Session::flash('success', 'Successfully Data Update.');
        return redirect::to('news-create');
        }
        else{
            return view('errors.404');
        }

    }


    // news published and unpublished by obydul date:10-8-16
    public function  new_publish(Request $request,$id){
        if(Auth::check()){
        $data         =  NewsModel::find($id);
        $data->published = $request->get('published_news');
        $data->save();
        Session::flash('success', 'Successfully  Insert.');
        return redirect::to('news-show');
        }
        else{
            return view('errors.404');
        }
    }


    //news delete obydul date:2-8-16
    public  function  news_delete($id){
        if(Auth::check()){
        $news_delete=NewsModel::find($id)->delete();
        return redirect::to('news-show');
        }
        else{
            return view('errors.404');
        }
    }


 // backing New form show by obydul date:3-8-16
    public function  backing_news_form(){
        if(Auth::check()){
        $backing_new=DB::table('breaking_news')->orderBy('id', 'desc')->get();
        return view('Backend.news.backing_news',compact('backing_new'));
        }
        else{
            return view('errors.404');
        }
    }
    // Backing News store by obydul date:3-8-16
    public function backing_news_store(Request $request){
        if(Auth::check()){
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
            if (Input::hasFile('news_icon')) {
                $extension3 = Input::file('news_icon')->getClientOriginalExtension();
                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                    $date = uniqid() . 'pid';
                    $fname = $date . '.' . $extension3;
                    $final1=$fname;
                    $image = Input::file('news_icon');
                    $path = public_path('image_folder/'.$final1);
                    Image::make($image->getRealPath())->save($path);
                }
            }
            else{
                $final1='';
            }
            $backingNews = new BackingNewsModel();
            $news_id       = uniqid();
            $backingNews->news_id  = $news_id ;
            $backingNews->news_title    = $request->get('news_title');
            $backingNews->news_icon =$final1;
            $backingNews->back_link = $request->get('back_link');
            $backingNews->save();

            Session::flash('success', 'Successfully Data Insert.');
            return redirect::to('backing-news');

        }
        }
        else{
            return view('errors.404');
        }
    }

    //Backing News update by obydul date:3-8-16
    public function backing_news_update(Request $request,$id){
        if(Auth::check()){
            if (Input::hasFile('news_icon')) {
                $extension3 = Input::file('news_icon')->getClientOriginalExtension();
                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                    $date = uniqid() . 'pid';
                    $fname = $date . '.' . $extension3;
                    $final1=$fname;
                    $image = Input::file('news_icon');
                    $path = public_path('image_folder/'.$final1);
                    Image::make($image->getRealPath())->save($path);
                    $adds_data = BackingNewsModel::where('id', '=', $id)->update(['news_icon' => $final1]);
                }

            }
            $adds_data = BackingNewsModel::where('id', '=', $id)->update(['news_title' =>$request->get('news_title'),
                'back_link' =>$request->get('back_link')]);
            Session::flash('success', 'Successfully updated.');
            return redirect::to('backing-news');
         }
        else{
            return view('errors.404');
        }
    }


    //backing news delete by obydul date:3-8-16
    public function backing_news_delete($id){
        if(Auth::check()){
        $backing_news_delete=BackingNewsModel::find($id)->delete();
        return redirect::to('backing-news');
        }
        else{
            return view('errors.404');
        }

    }
    // backing news controll by obydul date:8-8-16
    public function  backing_news_show(Request $request,$id){
        if(Auth::check()){
        $data =  BackingNewsModel::find($id);
        $data->status = $request->get('backing_news');
        $data->save();
        Session::flash('success', 'Successfully  Insert.');
        return redirect::to('backing-news');
        }
        else{
            return view('errors.404');
        }
    }

//end class
}
