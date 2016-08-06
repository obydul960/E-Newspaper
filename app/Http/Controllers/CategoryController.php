<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests;
use App\Model\CategoryModel;
use App\Model\SubCategoryModel;
use Session;
use DB;

class CategoryController extends Controller
{

    // Main menu store by obydul date 24-7-16
   public function store(Request $request){
       $validator = Validator::make($request->all(),[
               'main_category_name' => 'required|max:20'
           ]);
       if ($validator->fails())
       {
           Session::flash('error', 'Something went wrong!');
           return redirect::to("category-create-form")->withErrors($validator);
       }else{
           $main_category = new CategoryModel();
           $main_category->category_name = $request->get('main_category_name');
           $main_category->save();
           Session::flash('success', 'Successfully Data Insert.');
           return redirect::to('category-create-form');

       }
   }
    // Sub menu store by obydul date 24-7-16
    public function sub_cat_store(Request $request){
        $validator = Validator::make($request->all(),[
            'min_category_id'   =>'required',
            'sub_category_name' =>'required'
        ]);
        if($validator->fails()){
            Session::flash('error', 'Something went wrong!');
            return redirect::to("category-create-form")->withErrors($validator);
        }
        else{
            $sub_category= new SubCategoryModel();
            $sub_category->main_cat_id  = $request->get('min_category_id');
            $sub_category->sub_cat_name = $request->get('sub_category_name');
            $sub_category->save();
            Session::flash('success', 'Successfully Data Insert.');
            return redirect::to('category-create-form');
        }
    }

    // Main menu show by obydul date 24-7-16
    public  function Main_cat_show(){
        // Main category show by obydul date 26-7-16
        $main_category = DB::table('main_category')->orderBy('id', 'desc')->paginate(3);
        $main_category_show = DB::table('main_category')->get();
        //sub category show by obydul date 24-7-16
        $sub_category = DB::table('sub_category')
            ->join('main_category', 'sub_category.main_cat_id', '=', 'main_category.id')
            ->select('sub_category.id','sub_category.sub_cat_name', 'main_category.category_name')
            ->orderBy('id', 'desc')->paginate(3);

        return view('category.main_category',compact('main_category','sub_category','main_category_show'));
    }


    //sub category update by obydul date 24-7-16
    public function sub_cat_update(Request $request,$id){

        // main category update form main category table by obydul date 24-7-16
        $main_category = CategoryModel::find($id);
        $main_category->category_name = $request->get('main_category');
        $main_category->save();
        // sub category update form sub category table by obydul date 24-7-16
        $sub_category =SubCategoryModel::find($id);
        $sub_category->sub_cat_name = $request->get('sub_category');
        $sub_category->save();
        return redirect::to('category-create-form');
    }



    // Main menu delete by obydul date 24-7-16
   public function  delete($id){
       $main_category_delete = CategoryModel::find($id)->delete();
       return redirect::to('category-create-form');
   }

    public function sub_cat_delete($id){
       $sub_cat_delete= SubCategoryModel::find($id)->delete();
        return redirect::to('category-create-form');
    }
    //end class
}
