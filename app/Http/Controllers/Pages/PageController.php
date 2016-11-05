<?php

namespace App\Http\Controllers\Pages;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PageController extends Controller
{
    public function welcomehome()
    {
        return view('welcome');
    }

}
