<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AddController extends Controller
{
  public function create(){
      return view('add.add_added');
  }
}
