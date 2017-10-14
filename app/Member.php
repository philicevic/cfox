<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    public function periods() {
        return $this->hasMany('App\Period');
    }
}
