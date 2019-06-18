@extends('layouts.default3')
<br>
@section('content')
<div class="container" style="padding-top: 50px;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Pay with Paypal') }}</div>

        <div class="card-body">
          <form method="POST" action="">
            @csrf
            <div class="form-group row">
              <label for="total" class="col-md-4 col-form-label text-md-right">{{ __('Total') }}</label>
              <div class="col-md-6">
                <input type="text" class="form-control" readonly name="total" value="Ksh" id="total">
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Pay') }}
                </button>
              </div>
            </div>
          </form>
        </div>
        <div class="container">
          <a class="btn btn-primary" style="width:100px; height:40px; color:white;" href="paypal/3">PayPal</a>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
@endsection
