<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Demande extends Model
{
  protected $fillable = ['name', 'email', 'tel', 'title', 'type', 'date', 'place', 'photo', 'message', 'statut', 'job_id'];

  public function job()
  {
      return $this->belongsTo('App\Job');
  }
}
