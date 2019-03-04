<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){
        $data = [
            'title' => 'Контакты',
            'description' => 'Контакты'
        ];
             
        $data['breadcrumbs'] = \Request::get('breadcrumbs');
             
        return view('contact', $data);
    }
}
