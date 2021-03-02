<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use voku\helper\ASCII;

class HomeController extends Controller
{
    public function __construct()
    {

    }

    public function index() {
        return view('home.index');
    }

    public function viewRegisterPage() {
        return view('home.register');
    }

    public function viewLoginPage()
    {
        return view('layouts.components.login');
    }
}
