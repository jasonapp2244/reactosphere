<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestUserController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function gamePage()
    {
        return view('user.game');
    }
    public function tokenPage()
    {
        return view('user.token');
    }
    public function reactCalculatorPage()
    {
        return view('user.react_calculator');
    }

    public function userDashboard()
    {
        // dd('user dashboard hit');
    return view('home');
    }
}
