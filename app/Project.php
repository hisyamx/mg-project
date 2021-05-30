<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{
    protected $table = "projects";
    protected $dates = [
        'start',
        'finish'
    ];

    public function division()
    {
        return $this->hasOne(Division::class, 'id', 'division_id');
    }

    public function pj_user()
    {
        return $this->hasOne(User::class, 'id', 'pj_user_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'project');
    }

    public function users()
    {
        return $this->belongsToMany(User::class, 'user_project_pivots', 'project_id', 'user_id');
    }
}
