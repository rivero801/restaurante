<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class direccionesController extends Controller
{
    public function inicio(){
        return view('index');
    }

    public function menu(){
        return view('menu');
    }

    public function contact(){
        return view('contact');
    }

    public function reservation(){
        return view('reservation');
    }

    public function reseñas(){
        return view('testimonial');
    }
}
