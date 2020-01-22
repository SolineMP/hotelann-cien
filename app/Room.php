<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function Book()
    {
        return $this->hasMany('App\Book');
    }
}
