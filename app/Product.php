<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = [
    'user_id', 'user_name', 'designation', 'product_image',
    'user_details', 'skype', 'twitter', 'linkedin',
    't_link', 'sorting_cat', 'order_cat'
  ];
}
