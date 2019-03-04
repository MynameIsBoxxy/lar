<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function index(){
        $data = [
            'title' => 'Блог',
            'description' => 'Блог'
        ];
             
        $data['breadcrumbs'] = \Request::get('breadcrumbs');
             
        return view('blog', $data);
    }
}
