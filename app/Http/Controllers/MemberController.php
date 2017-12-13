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
        $memberlist = $clan->member;
        $page = array(
            "title" => $clan->name,
            "info" => "Member"
        );
        return view('ui.clan.member.list', compact('memberlist', 'page', 'clan'));
    }

    public function show(Clan $clan, $nickname) {
      $member = Member::where('nickname', $nickname)->where('clan_id', $clan->id)->get()->first();
      // dd($member);
      $page = array(
        "title" => $member->nickname,
        "info" => ""
      );
      return view("ui.clan.member.show", compact('page', "clan", "member"));
    }
}
