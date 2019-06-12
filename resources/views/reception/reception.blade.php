@extends('layouts.defaultAdmin')
@section('content')
@if(\Session::has('error'))
<div class="alert alert-danger">
{{\Session::get('error')}}
</div>
@endif

<table class="table">
  <thead>
    <tr>
      <th scope="col">Order ID</th>
      <th scope="col">Email</th>
      <th scope="col">Status</th>
      <th scope="col">Details</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($orders as $order)
    <tr>
      <td value="$order->id">{{$order->id}}</td>
      <td value="$order->id">{{$order->email}}</td>
      <td value="$order->id">{{$order->status}}</td>
      <td>{{__Details}}</td>
    </tr>
    @endforeach
  </tbody>
</table>

@stop
