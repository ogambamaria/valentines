<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use SmoDav\Mpesa\Laravel\Facades\STK;

class MpesaController extends Controller
{
  $response = STK::request(10)
    ->from(254722000000)
    ->usingReference('Some Reference', 'Test Payment')
    ->setCommand(CUSTOMER_BUYGOODS_ONLINE)
    ->push();

  $response = STK::push(10, 254722000000, 'Some Reference', 'Test Payment', null, CUSTOMER_BUYGOODS_ONLINE);
}
