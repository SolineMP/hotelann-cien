<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function room()
    {
        return $this->belongsTo('App\Room');
    }

    protected $fillable = [
        'room_id', 'user_id', 'reservation', 'registration',
    ];
}

