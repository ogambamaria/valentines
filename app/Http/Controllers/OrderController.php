<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Flavour;
use App\Size;
use App\Icing;
use App\Order;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $flavours = Flavour::all();
        $sizes = Size::all();
        $icings = Icing::all();

        return view('pages.order',compact(['users','flavours','sizes','icings']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $order = new Order;
      $order->email = $request->email;
      $order->flavour = $request->flavour;
      $order->size = $request->size;
      $order->icing = $request->icing;
      $order->addon = $request->addon;
      $order->inscription = $request->inscription;
      $order->date = $request->date;

      $order->save();

      return redirect('payment');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function addition(){
      /*
      $fprice = Flavour::select('flavourPrice');
      $total = $fprice;
      return view('pages.order',[$total]); */
    }
}
