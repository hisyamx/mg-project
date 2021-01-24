<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    protected $table = 'karyawans';
    // Initialize
    protected $fillable = [
        'user', 'kelola_akun', 'kelola_division', 'kelola_project', 'kelola_karyawan', 'kelola_magang',
    ];
    public function payment_reports()
    {
        return $this->hasMany('App\PaymentReport');
    }
}
