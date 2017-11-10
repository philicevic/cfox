<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use App\Clan;

class MemberController extends Controller
{
    public function __construct() {
        // ..
    }

    public function index(Clan $clan) {
        $memberlist = Member::where('clan_id', $clan->id)->get();
        $page = array(
            "title" => $clan->name,
            "info" => "Member"
        );
        return view('ui.clan.member.list', compact('memberlist', 'page', 'clan'));
    }
}
