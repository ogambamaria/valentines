<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flavour;

class FormController extends Controller
{
  public function cakeFlavour(){
    $flavours = Flavour::all();
    return view('pages.order',compact('flavours'));
  }
}
