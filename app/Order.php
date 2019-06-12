<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
  protected $fillable = [
      'name','email','flavour','size','icing','addon','addonImage','shape','design','inscription','status'
  ];
}
