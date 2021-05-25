<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Model
{
    protected $table = "divisions";

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'head_user_id');
    }

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
