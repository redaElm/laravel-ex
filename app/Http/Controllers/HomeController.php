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
    public function index()
    {
        return view('myapp/index');
    }

    public function admin()
    {
        return view('myapp/admin');
    }

    public function default1()
    {
        return view('myapp/default1');
    }

    public function default2()
    {
        return view('myapp/default2');
    }

    public function default3()
    {
        return view('myapp/default3');
    }

    public function notactive()
    {
        return view('myapp/index');
    }




}
