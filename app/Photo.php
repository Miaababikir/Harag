<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    public function advertise() {
        return $this->belongsTo(Advertise::class);
    }
}
