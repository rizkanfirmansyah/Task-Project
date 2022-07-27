<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('contents.home.index');
    }

    public function about()
    {
        return view('contents.home.about');
    }

    public function contact()
    {
        return view('contents.home.contact');
    }

    public function service()
    {
        return view('contents.home.service');
    }

    public function register()
    {
        return view('contents.home.register');
    }

    public function information()
    {
        return view('contents.home.information');
    }

    public function profile()
    {
        return view('contents.home.profile');
    }
}
