<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */

    protected $casts = [
        'email_verified_at' => 'datetime',
        'start' => 'datetime',
        'finish' => 'datetime'
    ];

    public function division()
    {
        return $this->belongsTo(Division::class, 'division_id');
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'user_project_pivots');
    }

    public function scopeKaryawan($query)
    {
        return $query->where('role', 2);
    }

    public function scopeMagang($query)
    {
        return $query->where('role', 3);
    }

    public function getRole()
    {
        return $this->role == 2 ? 'Karyawan' : 'Magang';
    }

    public function getDivision()
    {
        return $this->division->name;
    }

    public function isAdmin()
    {
        return $this->role == 1;
    }

    public function isNotAdmin()
    {
        return $this->role != 1;
    }
}
