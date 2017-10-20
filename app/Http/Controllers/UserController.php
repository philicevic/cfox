<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function __construct() {
        $this->middleware('app.admin');
    }

    public function listActive() {
        $users = User::all();
        $page = array(
          "title" => "Users",
          "info" => ""
        );
        return view('ui.users.index', compact('page', 'users'));
    }
}
