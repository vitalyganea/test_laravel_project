<?php

namespace App\Http\Controllers;

class TestController extends Controller{

    function test(){

        return view('test', ['user' => 'SOME TEXT']);


    }

}
