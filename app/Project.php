<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{
    protected $table = "projects";

    public function division()
    {
        return $this->hasOne(Division::class, 'id', 'division_id');
    }

    public function pj_user()
    {
        return $this->hasOne(User::class, 'id', 'pj_user_id');
    }
}
