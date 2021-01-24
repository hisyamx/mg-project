<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function payment_reports()
    {
        return $this->hasMany('App\PaymentReport');
    }
}
