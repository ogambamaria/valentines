@extends('layouts.default3')
<br>
@section('content')
<div class="container" style="padding-top: 50px;">
  <div class="row justify-content-center">
    <div class="col-md-8">
      <div class="card">
        <div class="card-header">{{ __('Order') }}</div>

        <div class="card-body">
          <form method="POST" action="">
            @csrf

            <div class="form-group row" v-for="(item, i) in items">
              <label for="cakeFlavour" class="col-md-4 col-form-label text-md-right">{{ __('Cake Flavour') }}</label>
              <div class="col-md-6">
                <select class="form-control-sm" id="flavour" name="flavour" required autofocus>
                  <option value="">{{ __('Select') }}</option>
                  @foreach ($flavours as $flavour):
                    <option value="{{$flavour->fid}}">{{$flavour->flavour}} - {{__('Ksh ')}} {{number_format($flavour->flavourPrice, 0)}}</option>
                  @endforeach
                  <input type="hidden" id="flavour" name="flavour" value="{{$flavour->flavourPrice}}">
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="cakeSize" class="col-md-4 col-form-label text-md-right">{{ __('Cake Size') }}</label>
              <div class="col-md-6">
                <select class="form-control-sm" id="size" name="size" required autofocus>
                  <option value="">{{ __('Select') }}</option>
                  @foreach ($sizes as $size):
                    <option value="">{{$size->size}} - {{__('Ksh ')}} {{number_format($size->sizePrice, 0)}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="icing" class="col-md-4 col-form-label text-md-right">{{ __('Type of Icing') }}</label>
              <div class="col-md-6">
                <select class="form-control-sm" id="icing" name="icing" required autofocus>
                  <option value="">{{ __('Select') }}</option>
                  @foreach ($icings as $icing):
                    <option value="">{{$icing->icing}} - {{__('Ksh ')}} {{number_format($icing->icingPrice, 0)}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="addonImage" class="col-md-4 col-form-label text-md-right">{{ __('Design Image for Cake Addon') }}</label>
              <div class="col-md-6">
                <input type="file" class="form-control-file" id="addonImage">
                <small id="addonsHelpBlock" class="form-text text-muted">
                  Image that will be used for the cake addon or edible print. Edible Tasty Prints (Cake Addons) are sheets of frosting that can be imprinted with any image using edible inks.
                  Optional.
                </small>
              </div>
            </div>

            <div class="form-group row">
              <label for="design" class="col-md-4 col-form-label text-md-right">{{ __('Optional Design for the Cake') }}</label>
              <div class="col-md-6">
                <input type="file" class="form-control-file" id="design" onclick="calculateTotal()">
                <small id="designHelpBlock" class="form-text text-muted">
                  Optional cake design. Cannot be used with cake addons. Select this if you have a specific design.
                </small>
              </div>
            </div>

            <div class="form-group row">
              <label for="inscription" class="col-md-4 col-form-label text-md-right">{{ __('Inscription plus Colour') }}</label>
              <div class="col-md-6">
                <input type="text" id="inscription" class="form-control" placeholder="eg Happy Birthday - written in red">
                <small id="addonsHelpBlock" class="form-text text-muted">
                  The inscription to be put on the cake, and the colour of the inscription.
                </small>
              </div>
            </div>

            <div class="form-group row">
              <div id="totalPrice" class="col-md-6">
                <p class="total"><span class="total" name="total" id="total"></span> </p>
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Payment') }}
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<br>
@endsection
