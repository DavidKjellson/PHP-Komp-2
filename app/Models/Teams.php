<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teams extends Model
{
  protected $fill = [
    'team_name', 'activity_id', 'team_activity'
  ];

  public function activity()
  {
    return $this->belongsTo('App\Activity');
  }
}
