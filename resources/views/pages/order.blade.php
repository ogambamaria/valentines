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

            <div class="form-group row">
              <label for="cakeFlavour" class="col-md-4 col-form-label text-md-right">{{ __('Cake Flavour') }}</label>
              <div class="col-md-6">
                <select class="form-control-sm" id="cakeFlavour" name="cakeFlavour" required autofocus>
                  @foreach ($flavours as $flavour):
                    <option value="">{{$flavour->flavour}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="cakeSize" class="col-md-4 col-form-label text-md-right">{{ __('Cake Size') }}</label>
              <div class="col-md-6">
                <select class="form-control-sm" id="cakeSize" name="cakeSize" required autofocus>
                  @foreach ($sizes as $size):
                    <option value="">{{$size->size}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="icing" class="col-md-4 col-form-label text-md-right">{{ __('Type of Icing') }}</label>
              <div class="col-md-6">
                <select class="form-control-sm" id="icing" name="icing" required autofocus>
                  @foreach ($icings as $icing):
                    <option value="">{{$icing->icing}}</option>
                  @endforeach
                </select>
              </div>
            </div>

            <div class="form-group row">
              <label for="addons" class="col-md-4 col-form-label text-md-right">{{ __('Cake Addons') }}</label>
              <div class="col-md-6">
                <select class="form-control-sm" id="addons" name="addons" autofocus>
                  @foreach ($addons as $addon):
                    <option value="">{{$addon->addon}}</option>
                  @endforeach
                </select>
                <small id="addonsHelpBlock" class="form-text text-muted">
                  Edible Tasty Prints (Cake Addons) are sheets of frosting that can be imprinted with any image using edible inks.
                  Optional.
                </small>
              </div>
            </div>

            <div class="form-group row">
              <label for="addonImage" class="col-md-4 col-form-label text-md-right">{{ __('Design Image for Cake Addon') }}</label>
              <div class="col-md-6">
                <input type="file" class="form-control-file" id="addonImage">
                <small id="addonsHelpBlock" class="form-text text-muted">
                  Image that will be used for the cake addon or edible print.
                </small>
              </div>
            </div>

            <div class="form-group row">
              <label for="cakeShape" class="col-md-4 col-form-label text-md-right">{{ __('Cake Shape') }}</label>
              <div class="col-md-6">
                <select class="form-control-sm" id="cakeFlavour" name="cakeFlavour" autofocus>
                  <option>Round</option>
                  <option>Rectangle</option>
                  <option>Square</option>
                </select>
                <small id="addonsHelpBlock" class="form-text text-muted">
                  This is optional. The standard cake shape is a square. Select this if you do not have a specific design.
                </small>
              </div>
            </div>

            <div class="form-group row">
              <label for="design" class="col-md-4 col-form-label text-md-right">{{ __('Optional Design for the Cake') }}</label>
              <div class="col-md-6">
                <input type="file" class="form-control-file" id="design">
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
              <label for="total" class="col-md-4 col-form-label text-md-right">{{ __('Total Price: ') }}</label>
              <div class="col-md-6">
                <input type="text" readonly id="total" class="form-control-plaintext" value="Ksh 2300">
              </div>
            </div>

            <div class="form-group row mb-0">
              <div class="col-md-8 offset-md-4">
                <button type="submit" class="btn btn-primary">
                  {{ __('Login') }}
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
