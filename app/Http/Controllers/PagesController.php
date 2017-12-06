<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
      return view('pages.index');
    }

    public function show_business(){
      return view('pages.show_business');
    }

    public function new_business(){
      return view('pages.new_business');
    }
}
