<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Access extends Model
{
    protected $table = 'access';
    // Initialize
    protected $fillable = [
        'user', 'kelola_akun', 'kelola_division', 'kelola_project', 'kelola_karyawan', 'kelola_magang',
    ];
}
