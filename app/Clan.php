<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Clan extends Model
{
    public function getRouteKeyName() {
        return 'subdomain';
    }
}
