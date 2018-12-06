<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
  protected $fillable = ['titre', 'description1', 'photo1', 'description2', 'photo2', 'description3', 'photo3'];

  public function demandes()
  {
      return $this->hasMany('App\Demande');
  }
}
