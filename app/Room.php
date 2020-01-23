<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function book()
    {
        return $this->hasMany('App\Book');
    }

    protected $fillable = [
        'name', 'number', 'type', 'price',
    ];
}
