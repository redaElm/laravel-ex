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

    //*****************************

    public function default1()
    {
        return view('default1/index');
    }

    public function default1Profile()
    {
        return view('default1/profile/edit');
    }

    public function default1Table()
    {
        return view('default1/table');
    }

    //****************************

    public function default2()
    {
        return view('default2');
    }

    public function default2Profile()
    {
        return view('default2/profile/edit');
    }

    public function default2Table()
    {
        return view('default2/table');
    }

    //********************

    public function default3()
    {
        return view('default3/index');
    }

    public function default3Profile()
    {
        return view('default3/profile/edit');
    }

    public function default3Table()
    {
        return view('default3/table');
    }

    //**************************

    public function notactive()
    {
        return view('notactive/index');
    }

    public function notactiveprofile()
    {
         return view('notactive/profile/index');
    }


}
