<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //This method will show the dashboard page for users
    public function index() {
        return view('user.dashboard');
    }
}
