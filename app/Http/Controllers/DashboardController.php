<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    public function index()
    {
        return redirect()->route('login')->with('error', 'You must be logged in to access the dashboard.');
    }
}
