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

    public function topseller(){
        return view('site.topseller')->with('menu_page', 4);
    }

    public function topseller2(){
        return view('site.topseller2')->with('menu_page', 4);
    }

    public function sendMail(Request $request){
        $name = $request['name'];
        $email = $request['email'];
        $subject = 'Fale Conosco Site - '.$request['subject'];
        $message = $request['message'];

        $body = "Nome: $name\nEmail: $email\n\nMensagem: $message"; 
        
        \Mail::raw($body, function($message) use($subject){
            $message->from('noreply@posicionamento.com.br');
            $message->to(['posicionamento@uol.com.br'])
            ->subject($subject);
        });
        
        return 1;
    }
    
}
