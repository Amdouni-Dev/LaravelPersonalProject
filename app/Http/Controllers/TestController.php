<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //

    public function test(){
        echo 'Good test';
    }
    public function test2(){
      return view('TestView.test');
    }
}
