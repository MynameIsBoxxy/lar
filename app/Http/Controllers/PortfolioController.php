<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    function index(){
        $data = [
            'title' => 'Портфолио',
            'description' => 'Наши лучшие работы'
        ];
             
        $data['breadcrumbs'] = \Request::get('breadcrumbs');
             
        return view('portfolio', $data);
    }
}
