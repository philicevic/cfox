<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;

class Clan extends Model
{
    public function getRouteKeyName() {
        return 'subdomain';
    }

    public function member() {
        return $this->hasMany(Member::class);
    }
}
