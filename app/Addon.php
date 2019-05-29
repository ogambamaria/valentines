<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Addon extends Model
{
  protected $fillable = [
      'aid', 'addons', 'addonPrice',
  ];
}
