<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
  /*  public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */

    public function admin()
    {
        return view('admin/users/index');
    }

    public function default1()
    {
        return view('default1');
    }

    public function default2()
    {
        return view('default2');
    }

    public function default3()
    {
        return view('default3');
    }

    public function notactive()
    {
        return view('notactive/index');
    }

    public function notactiveprofile()
    {
         return view('notactive/profile/index');
    }


}
