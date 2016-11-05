<?php

namespace App\Http\Controllers\error;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class ErrorController extends Controller
{

    public function e404(){
        return view('errors.404');
    }
    public function e500(){
        return view('errors.500');
    }
    public function e503(){
        return view('errors.503');
    }
    public function checkout(){
        return redirect('/');
    }

}
