<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        // dd(request()->user());
        $user = request()->user();
        $pagetitle = "Dashboard";
        return view('ui.dashboard.index', compact('user', 'pagetitle'));
    }
}
