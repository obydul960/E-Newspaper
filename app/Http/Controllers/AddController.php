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
       return view('Backend.add.add_added');
    }
      // add store database by obydul date:7-8-16
    public function add_store(Request $request){
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
