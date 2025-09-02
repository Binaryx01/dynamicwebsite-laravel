<?php

namespace App\Http\Controllers;

use App\Models\NavItems;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function index(){

        $navitems =NavItems::all();
        return view("frontendpages.index",compact("navitems"));
    }


    public function laravel(){

        return view('frontendpages.laravel');


    }

       public function python(){

        return view('frontendpages.python');


    }



}
