<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function listActive() {
        $users = User::all();
        $page = array(
          "title" => "Users",
          "info" => ""
        );
        return view('ui.users.index', compact('page', 'users'));
    }
}
