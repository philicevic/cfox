<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function index() {
        $user = request()->user();
        return view('ui.dashboard.index', compact('user'));
    }
}