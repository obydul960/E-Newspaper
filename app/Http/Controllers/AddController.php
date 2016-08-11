<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests;
use App\Model\AddModel;
use Session;
use Input;
use DB;
use Intervention\Image\Facades\Image;

class AddController extends Controller
{
    public function create(){
        $show_add = AddModel::paginate(4);
       return view('Backend.add.add_added',compact('show_add'));
    }
      // add store database by obydul date:7-8-16
    public function add_store(Request $request){
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
            $add_content = new AddModel();

        //dd($add_content);
            $image = Input::file('add_image');
            $filename  = time() . '.' . $image->getClientOriginalExtension();
            $path = public_path('image_folder/' . $filename);
            Image::make($image->getRealPath())->resize(200, 200)->save($path);

            $add_content->add_title = $request->get('add_title');
            $add_content->add_image  = $filename ;
            $add_content->position    = $request->get('add_position');
            $add_content->back_link = $request->get('back_link');
            $add_content->save();

            Session::flash('success', 'Successfully Data Insert.');
            return redirect::to('add-create-form');
        }

    }
    public function add_update(Request $request,$id){
        $adds_data = AddModel::find($id);

        if (Input::hasFile('image_add')) {
            $extension3 = Input::file('image_add')->getClientOriginalExtension();
            if ($extension3 == 'png' || $extension3 == 'jpg' || $extension3 == 'jpeg' || $extension3 == 'bmp' ||
                $extension3 == 'PNG' || $extension3 == 'jpg' || $extension3 == 'JPEG' || $extension3 == 'BMP') {
                $date = time();
                $fname = $date . '.' . $extension3;
                $image = Input::file('image_add');
                $path = public_path('image_folder/');
                $image->move($path,$fname);

                $adds_data->add_title  =$request->get('add_title');
                $adds_data->add_image  =$fname;
                $adds_data->position   =$request->get('add_position');
                $adds_data->back_link  =$request->get('back_link');
                $adds_data->save();
            }
        }
        else{
            $adds_data->add_title  =$request->get('add_title');
            $adds_data->position   =$request->get('add_position');
            $adds_data->back_link  =$request->get('back_link');
            $adds_data->save();
        }
        Session::flash('success', 'Successfully updated.');
        return redirect::to('add-create-form');

    }
    // ads status by obydul dae:11-8-16
    public function  AdsStatus(Request $request,$id){
        $data         =  AddModel::find($id);
        $data->status = $request->get('ads_status');
        $data->save();
        Session::flash('success', 'Successfully  Inserted.');
        return redirect::to('add-create-form');
    }
//adds delete by obydul date:10-8-16
    public function adds_delete($id){
        $sub_cat_delete= AddModel::find($id)->delete();
        return redirect::to('add-create-form');
    }

    //end class
}
