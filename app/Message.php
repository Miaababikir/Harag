<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Message extends Model
{
    protected $appends = ['sender', 'receiver'];

    public function getSenderAttribute()
    {
        return $this->getUser($this->sender_id);
    }

    public function getReceiverAttribute()
    {
        return $this->getUser($this->receiver_id);
    }

    private function getUser($id) {
        return User::findOrFail($id);
    }
}
