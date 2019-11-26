<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Beneficiary extends Model
{
  protected $fillable = [
      'organization_name', 'category', 'location','population_benefitting',
  ];

  public function user(){
    return $this->belongsTo('App\User');
  }

}
