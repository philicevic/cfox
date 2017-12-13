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

        // dd(request()->user());
        // If no clan found redirect to cfox
        if (!$clan) {
          return redirect(Config::get('app.url'));
        }

        // otherwise return view

        $members = $clan->member;
        $user = $clan->user;
        $page = array(
            "title" => "Dashboard",
            "info" => $clan->name
        );

        return  view('ui.clan-interface.index', compact('clan', 'members', 'user', 'page'));
    }

    // part of main-domain

    public function create() {
        $page = array(
            "title" => "New Clan",
            "info" => "create your clan"
        );

        $user = request()->user();
        return view('ui.dashboard.clans.create', compact('user', 'page'));
    }

    public function store() {

        $this->validate(request(), [
            'name' => 'required',
            'subdomain' => 'required|unique:clans,subdomain'
        ]);

        // Make array with information about the new clan
        $clan = Clan::create([
          'name' => request('name'),                        // clan name
          'subdomain' => request('subdomain'),              // clan subdomain for system
          'website' => request('website'),                  // clan website
          'creator_id' => request()->user()->id                  // clan creator
        ]);

        // Connect User with Clan in pivot-table
        User::find(request()->user()->id)->clans()->save($clan);

        // redirect to new clan-interface
        return redirect('http://'.request('subdomain').'.'.request()->getHttpHost());

    }
}
