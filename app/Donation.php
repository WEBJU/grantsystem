<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Donation extends Model
{
  protected $fillable=['organization_name','address','country','payment_mode','donation_type','description'];

  public function user(){
    return $this->belongsTo('App\User');
  }

  public function payments(){
    return $this->HasMany('App\Payment');
  }

}
