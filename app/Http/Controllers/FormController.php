<?php

namespace App\Http\Controllers;

use App\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function create(Request $request){
        Form::create($request->all());
        return view('site.landingpage.index2');        
    }
}
