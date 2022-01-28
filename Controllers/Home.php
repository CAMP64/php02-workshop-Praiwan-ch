<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    }

    public function html01()
    {
        return view('html01');
    }

    public function html02()
    {
        return view('html02');
    }

    public function html03()
    {
        return view('html03');
    }

    public function html04()
    {
        return view('html04');
    }

    public function html05()
    {
        return view('html05');
    }

    public function form06()
    {
        return view('html workshop/form06');
    }

    public function form01()
    {
        return view('html workshop/form01');
    }

    public function form02()
    {
        return view('html workshop/form02');
    }

    public function form03()
    {
        return view('html workshop/form03');
    }

    public function form04()
    {
        return view('html workshop/form04');
    }
    
    public function form05()
    {
        return view('html workshop/form05');
    }

    public function css01()
    {
        return view('css workshop/css01');
    }

    public function css02()
    {
        return view('css workshop/css02');
    }

    public function css03()
    {
        return view('css workshop/css03');
    }

    public function php01()
    {
        return view('php workshop01/php01');
    }

    public function php02()
    {
        return view('php workshop01/php02');
    }

    public function php03()
    {
        return view('php workshop01/php03');
    }

    public function php04()
    {
        return view('php workshop01/php04');
    }
}

