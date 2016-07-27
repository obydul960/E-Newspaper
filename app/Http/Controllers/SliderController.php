<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests;
use App\Model\SliderModel;
use Session;
use Input;
use DB;

class SliderController extends Controller
{
    // Slider image form by obydul date 25-7-16
    public function slider_form(){
        //show slider image by obydul date 25-7-16
        $slider_show = SliderModel::all();
        return view('slider.slider_form',compact('slider_show'));
    }

    // Slider image uploading by obydul date 25-7-16
    public function  slider_upload(Request $request){
        $validator = Validator::make($request->all(),[
            'image_title' => 'required',
            'picture'       => 'required | mimes:jpeg,jpg,png',
            'back_link'   => 'required'
        ]);
        if ($validator->fails())
        {
            return redirect::to("category-create-form")->withErrors($validator);
        }else{
            $image                      =Input::file('picture');
            $uploadFolder               ='Slider_image';
            $createFileName             = time() . '.' . $image->getClientOriginalExtension();
            $moveFile                   =$image->move($uploadFolder,$createFileName);
            $image_upload               = new SliderModel;
            $image_upload->image_title  = $request->get('image_title');
            $image_upload->image        = $createFileName;
            $image_upload->back_link    = $request->get('back_link');
            $image_upload->save();
            //Toast::success('oops');
           //toast()->success('messages','How are you');
            Session::flash('success', 'Paid Payment!');
            return redirect::to('slider-slider-form');

        }
    }

    public function slider_update(Request $request,$id){
        $slider_update = SliderModel::find($id);
        //update image start
        $image                      =Input::file('picture');
        $uploadFolder               ='Slider_image';
        $createFileName             = time() . '.' . $image->getClientOriginalExtension();
        $moveFile                   =$image->move($uploadFolder,$createFileName);
        $slider_update->image_title  = $request->get('image_title');
        $slider_update->image        = $createFileName;
        $slider_update->back_link    = $request->get('image_link');
        $slider_update->save();
        return redirect::to('slider-slider-form');
    }

    //Delete slider image by obydul date 25-7-16
    public function slider_delete($id){
        $slider_delete = SliderModel::find($id)->delete();
        return redirect::to('slider-slider-form');
    }


    //end class
}
