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
        $page = array(
          "title" => "Dashboard",
          "info" => ""
        );
        return view('ui.dashboard.index', compact('user', 'page'));
    }

    public function notifications() {
      $user = request()->user();
      $page = array(
        "title" => "Notifications",
        "info" => "Last Actions"
      );
      return view('ui.notifications.index', compact('user', 'page'));
    }
}
