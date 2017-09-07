<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clan;
use App\User;

class ClanController extends Controller
{

    public function __construct(Clan $clan)
    {
    }

    public function index(Clan $clan) {
        $this->middleware('clan.auth');
        // If no clan found redirect to cfox
        if (!$clan) {
          return redirect(Config::get('app.url'));
        }

        // otherwise return view

        $members = $clan->member;
        $user = $clan->user;

        return  view('ui.clan', compact('clan', 'members', 'user'));
    }

    public function create() {
        $user = request()->user();
        return view('ui.clan.create', compact('user'));
    }

    public function store() {
        $clan = new Clan();

        $clan->name = request("name");
        $clan->subdomain = request("subdomain");
        $clan->website = request("website");

        $clan->save();

        User::find(request()->user()->id)->clans()->save($clan);

        return redirect('http://'.request('subdomain').'.'.request()->getHttpHost());

    }
}
