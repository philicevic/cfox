<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Member;

class Clan extends Model
{
    protected $guarded = [];

    public function getRouteKeyName() {
        return 'subdomain';
    }

    public function member() {
        return $this->hasMany(Member::class);
    }

    public function user() {
      return $this->belongsToMany(User::class);
    }

    public function admin() {
      return $this->belongsTo(User::class, 'creator_id');
    }
}
