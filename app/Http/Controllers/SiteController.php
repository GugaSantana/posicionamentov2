<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function index(){
        return view('site.index')->with('menu_page', 1);
    }

    public function about(){
        return view('site.about')->with('menu_page', 2);;
    }

    public function services(){
        return view('site.services')->with('menu_page', 3);;
    }
    
    public function contact(){
        return view('site.contact')->with('menu_page', 5);;
    }
}
