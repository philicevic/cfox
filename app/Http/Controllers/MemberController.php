<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Clan;

class MemberController extends Controller
{
    public function __construct() {
        // $this->middleware('clan.auth');
    }

    public function index() {
        $clan = Clan::where('subdomain', request()->route()->parameters()['clan'])->get()->first();
        $memberlist = Member::where('clan_id', $clan->id)->get();
        return view('ui.clan-interface.member.index', compact('memberlist'));
    }
}
