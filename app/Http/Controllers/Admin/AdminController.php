<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        return view('layouts/dashboard.dashboard');
    }
    public function iconsidebar()
    {
        return view('layouts/dashboard/icon-sidebar');
    }
    public function buttons(){
        return view('layouts/dashboard/basic-ui/buttons');
    }
    public function cards(){
        return view('layouts/dashboard/basic-ui/cards');
    }
    public function tables(){
        return view('layouts/dashboard/basic-ui/tables');
    }
    public function tabs(){
        return view('layouts/dashboard/basic-ui/tabs');
    }
    public function typography(){
        return view('layouts/dashboard/basic-ui/typography');
    }
    public function datatables(){
        return view('layouts/dashboard/components/datatables');
    }
    public function graphs(){
        return view('layouts/dashboard/components/graphs');
    }
    public function notifications(){
        return view('layouts/dashboard/components/notifications');
    }
    public function advanced(){
        return view('layouts/dashboard/forms/advanced');
    }
    public function editors(){
        return view('layouts/dashboard/forms/editors');
    }
    public function general(){
        return view('layouts/dashboard/forms/general');
    }
    public function layouts(){
        return view('layouts/dashboard/forms/layouts');
    }
    public function validation(){
        return view('layouts/dashboard/forms/validation');
    }
    public function users(){
        return view('layouts/dashboard/users');
    }
    public function profile(){
        return view('layouts/dashboard/users/profile');
    }
    public function todos(){
        return view('layouts/dashboard/todos');
    }
    public function settings(){
        return view('layouts/dashboard/settings');
    }


}
