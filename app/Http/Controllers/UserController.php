<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\User;
use App\Mail\VerificationNotification;

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

    public function listNonActivated() {
        $users = User::where('verified', 0)->get();
        $page = array(
            "title" => "Pending Users",
            "info" => ""
        );
        return view('ui.users.activate', compact('page', 'users'));
    }

    public function activate() {
        $user = User::find(request('userid'));

        $user->verified = 1;

        $user->save();

        Mail::to($user)->send(new VerificationNotification($user));
    }
}
