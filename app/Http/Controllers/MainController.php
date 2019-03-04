<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    function index(){
        $data = [
            'title' => 'Наша компания',
            'description' => 'Наша компания - самая лучшая в своём роде'
        ];
        return view('index',$data);
    }
}
