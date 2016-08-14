<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;
use App\Http\Requests;
use App\Model\AddModel;
use Session;
use Input;
use DB;



class AddController extends Controller
{
    public function create(){
        if(Auth::check()){
        $show_add = AddModel::orderBy('id','desc')->get();
       return view('Backend.add.add_added',compact('show_add'));
        }
        else{
            return view('errors.404');
        }
    }
      // add store database by obydul date:7-8-16
    public function add_store(Request $request){
        if(Auth::check()){

            $validator = Validator::make($request->all(),[
                'add_title'    =>'required',
                'add_position' =>'required',
                'back_link'    =>'required'
            ]);
            if($validator->fails()){
                Session::flash('error', 'Something went wrong!');
                return redirect::to("add-create-form")->withErrors($validator);
            }
            else{

                if (Input::hasFile('add_image')) {
                    $extension3 = Input::file('add_image')->getClientOriginalExtension();
                    if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                        $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                        $date = uniqid() . 'pid';
                        $fname = $date . '.' . $extension3;
                        $final1=$fname;
                        $image = Input::file('add_image');
                        $path = public_path('image_folder/'.$final1);
                        Image::make($image->getRealPath())->save($path);

                    }

                }
                $add_content = new AddModel();
                $add_content->add_title = $request->get('add_title');
                $add_content->add_image  = $final1 ;
                $add_content->position    = $request->get('add_position');
                $add_content->back_link = $request->get('back_link');
                $add_content->save();

                Session::flash('success', 'Successfully Data Insert.');
                return redirect::to('add-create-form');

            }
        }
        else{
            return view('errors.404');
        }


    }
    public function add_update(Request $request,$id){
        if(Auth::check()){

            if (Input::hasFile('image_add')) {
                $extension3 = Input::file('image_add')->getClientOriginalExtension();
                if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                    $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                    $date = uniqid() . 'pid';
                    $fname = $date . '.' . $extension3;
                    $final1=$fname;
                    $image = Input::file('image_add');
                    $path = public_path('image_folder/'.$final1);
                    Image::make($image->getRealPath())->save($path);
                    $adds_data = AddModel::where('id', '=', $id)->update(['add_image' => $final1]);
                }

            }
            $adds_data = AddModel::where('id', '=', $id)->update(['add_title' =>$request->get('add_title'),
                'position' =>$request->get('add_position') ,'back_link' => $request->get('back_link')]);
            Session::flash('success', 'Successfully updated.');
            return redirect::to('add-create-form');



        }
        else{
            return view('errors.404');
        }

    }
    // ads status by obydul dae:11-8-16
    public function  AdsStatus(Request $request,$id){
        if(Auth::check()){
        $data         =  AddModel::find($id);
        $data->status = $request->get('ads_status');
        $data->save();
        Session::flash('success', 'Successfully  Inserted.');
        return redirect::to('add-create-form');
        }
        else{}
    }
//adds delete by obydul date:10-8-16
    public function adds_delete($id){
        if(Auth::check()){
        $sub_cat_delete= AddModel::find($id)->delete();
        return redirect::to('add-create-form');
        }
        else{
            return view('errors.404');
        }
    }


    //end class
}
