<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    //
    public function index(){

      $transport = DB::table('transports')->where('id', '1')->first();
      return view('pages.index',compact('transport'));


    }

    public function show_business(){
      return view('pages.show_business');
    }

    public function new_business(){
      return view('pages.new_business');
    }
}
