<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{
  protected $table = "projects";
  protected $dateFormat = 'dd/mm/yyyy';
}
