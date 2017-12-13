<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clan;

class ClanInterfaceController extends Controller
{
    public function __construct() {
        $this->middleware('clan.auth');
    }

    public function index(Clan $clan) {
        // If no clan found redirect to cfox
        if (!$clan) {
          return redirect(Config::get('app.url'));
        }

        // otherwise return view

        $members = $clan->member;
        $user = $clan->user;
        $page = array(
            "title" => $clan->name,
            "info" => "Dashboard"
        );

        return  view('ui.clan.dashboard.index', compact('clan', 'members', 'user', 'page'));
    }
}
