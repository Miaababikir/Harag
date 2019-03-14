<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Advertise extends Model
{
    //

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function category() {
        return $this->belongsTo(Category::class);
    }

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    public function photos() {
        return $this->hasMany(Photo::class);
    }

    public function recommendations() {
        return $this->hasMany(Recommendation::class);
    }

}
