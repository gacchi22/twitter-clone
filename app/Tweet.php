<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tweet extends Model
{
    protected $guarded = [
        'id'
    ];

    public function users(){
        $this->belongsTo('App\User');
    }
}
