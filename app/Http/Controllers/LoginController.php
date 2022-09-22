<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth')->except('home');
    }

    public function home()
    {
        return view('pages.frontoffice.accueil');
    }

    public function article()
    {
        return view('pages.frontoffice.articles');
    }
}
