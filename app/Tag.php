<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function advertises() {
        return $this->belongsToMany(Advertise::class);
    }
}
