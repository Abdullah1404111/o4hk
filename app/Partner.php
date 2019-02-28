<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
  protected $fillable = [
    'partner_id',
    'partner_name',
    'partner_img',
    'created_at',
    'updated_at'
  ];

  public function  things()
  {
    return $this->hasMany('Thing');
  }

  
}
