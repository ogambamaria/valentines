<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderPaypal extends Model
{
 const PAYMENT_COMPLETED = 1;
 const PAYMENT_PENDING = 0;

 /**
  * @var string
  */
 protected $table = 'orderpaypals';

 /**
  * @var array
  */
 protected $dates = ['deleted_at'];

 /**
  * @var array
  */
 protected $fillable = ['transaction_id', 'amount', 'payment_status'];
}
