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

        return  view('ui.clan', compact('clan', 'members', 'user'));
    }

    // part of main-domain

    public function create() {
        $user = request()->user();
        return view('ui.clan.create', compact('user'));
    }

    public function store() {

        // Make array with information about the new clan
        $clan = Clan::create([
          'name' => request('name'),                        // clan name
          'subdomain' => request('subdomain'),              // clan subdomain for system
          'website' => request('website')                   // clan website
        ]);

        // Connect User with Clan in pivot-table
        User::find(request()->user()->id)->clans()->save($clan);

        // redirect to new clan-interface
        return redirect('http://'.request('subdomain').'.'.request()->getHttpHost());

    }
}
