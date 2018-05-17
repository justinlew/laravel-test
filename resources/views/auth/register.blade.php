@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}" enctype="multipart/form-data">
                        @csrf

                        <!-- <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->


                        <!-- First name -->

                        <div class="form-group row"> 
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="fname" type="text" class="form-control{{ $errors->has('fname') ? ' is-invalid' : '' }}" name="fname" value="{{ old('fname') }}" required autofocus>

                                @if ($errors->has('fname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('fname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Last name -->

                        <div class="form-group row"> 
                            <label for="lname" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="lname" type="text" class="form-control{{ $errors->has('lname') ? ' is-invalid' : '' }}" name="lname" value="{{ old('lname') }}" required autofocus>

                                @if ($errors->has('lname'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('lname') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Gender -->

                        <div class="form-group row"> 
                            <label for="gender" class="col-md-4 col-form-label text-md-right">{{ __('Gender') }}</label>

                            <div class="col-md-6">
                                {{ Form::radio('gender', 'male') }} Male<br>
                                {{ Form::radio('gender', 'female') }} Female<br>
                                {{ Form::radio('gender', 'other') }} Other
                                @if ($errors->has('gender'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('gender') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        

                        <!-- Country code -->

                        <div class="form-group row"> 
                            <label for="country_code" class="col-md-4 col-form-label text-md-right">{{ __('Country Code') }}</label>

                            <div class="col-md-6">
                                <input id="country_code" type="text" class="form-control{{ $errors->has('country_code') ? ' is-invalid' : '' }}" name="country_code" value="{{ old('country_code') }}" required autofocus>

                                @if ($errors->has('country_code'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('country_code') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Phone number -->

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control{{ $errors->has('phone') ? ' is-invalid' : '' }}" name="phone" value="{{ old('phone') }}" required autofocus>

                                @if ($errors->has('phone'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Drivers license -->


                        <div class="form-group row"> 
                            <label for="drivers_license" class="col-md-4 col-form-label text-md-right">{{ __('Drivers License') }}</label>

                            <div class="col-md-6">
                                <input id="drivers_license" type="text" class="form-control{{ $errors->has('drivers_license') ? ' is-invalid' : '' }}" name="drivers_license" value="{{ old('drivers_license') }}" required autofocus>

                                @if ($errors->has('drivers_license'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('drivers_license') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row"> 
                            <label for="class_num" class="col-md-4 col-form-label text-md-right">{{ __('Class Number') }}</label>

                            <div class="col-md-6">
                                {{ Form::radio('class_num', '5') }} 5<br>
                                {{ Form::radio('class_num', '7') }} 7<br>
                                {{ Form::radio('class_num', 'other') }} Other
                                @if ($errors->has('class_num'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('class_num') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <!-- City -->

                        <div class="form-group row"> 
                            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>

                            <div class="col-md-6">
                                <input id="city" type="text" class="form-control{{ $errors->has('city') ? ' is-invalid' : '' }}" name="city" value="{{ old('city') }}" required autofocus>

                                @if ($errors->has('city'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('city') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Car model -->

                        <div class="form-group row"> 
                            <label for="car_model" class="col-md-4 col-form-label text-md-right">{{ __('Car Model') }}</label>

                            <div class="col-md-6">
                                <input id="car_model" type="text" class="form-control{{ $errors->has('car_model') ? ' is-invalid' : '' }}" name="car_model" value="{{ old('car_model') }}" required>

                                @if ($errors->has('car_model'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('car_model') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Trim -->

                        <div class="form-group row"> 
                            <label for="trim" class="col-md-4 col-form-label text-md-right">{{ __('Trim') }}</label>

                            <div class="col-md-6">
                                <input id="trim" type="text" class="form-control{{ $errors->has('trim') ? ' is-invalid' : '' }}" name="trim" value="{{ old('trim') }}" required>

                                @if ($errors->has('trim'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('trim') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- Make -->

                        <div class="form-group row"> 
                            <label for="make" class="col-md-4 col-form-label text-md-right">{{ __('Make') }}</label>

                            <div class="col-md-6">
                                <input id="make" type="text" class="form-control{{ $errors->has('make') ? ' is-invalid' : '' }}" name="make" value="{{ old('make') }}" required>

                                @if ($errors->has('make'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('make') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <!-- License plate number -->

                        <div class="form-group row"> 
                            <label for="plate_number" class="col-md-4 col-form-label text-md-right">{{ __('License Plate Number') }}</label>

                            <div class="col-md-6">
                                <input id="plate_number" type="text" class="form-control{{ $errors->has('plate_number') ? ' is-invalid' : '' }}" name="plate_number" value="{{ old('plate_number') }}" required>

                                @if ($errors->has('plate_number'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('plate_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
<!-- 
                        <div class="form-group row"> 
                            <label for="plate_number" class="col-md-4 col-form-label text-md-right">{{ __('License Plate Number') }}</label>

                            <div class="col-md-6">
                                <input id="plate_number" type="text" class="form-control{{ $errors->has('plate_number') ? ' is-invalid' : '' }}" name="plate_number" value="{{ old('plate_number') }}" required autofocus>

                                @if ($errors->has('plate_number'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('plate_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div> -->

                        <!-- Number of passengers -->

                        <div class="form-group row"> 
                            <label for="num_passengers" class="col-md-4 col-form-label text-md-right">{{ __('Number of passengers') }}</label>

                            <div class="col-md-6">
                                <input id="num_passengers" type="text" class="form-control{{ $errors->has('num_passengers') ? ' is-invalid' : '' }}" name="num_passengers" value="{{ old('num_passengers') }}" required>

                                @if ($errors->has('num_passengers'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('num_passengers') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- <div class="form-group row"> 
                            <label for="num_passengers" class="col-md-4 col-form-label text-md-right">{{ __('Number of passengers') }}</label>

                            <div class="col-md-6">
                                <input id="num_passengers" type="text" class="form-control{{ $errors->has('num_passengers') ? ' is-invalid' : '' }}" name="num_passengers" value="{{ old('num_passengers') }}" required autofocus>

                                @if ($errors->has('num_passengers'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('num_passengers') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>  -->




                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="car_image" class="col-md-4 col-form-label text-md-right"> {{ __('Car Image')}}</label>
                            <input type="file" name="car" id="car_image">
                        </div>

                        <div class="form-group row">
                            <label for="license_plate_image" class="col-md-4 col-form-label text-md-right"> {{ __('License Plate Image')}}</label>
                            <input type="file" name="license_plate_image" id="license_plate_image">
                        </div>


                        <div class="form-group row">
                            <label for="insurance_image" class="col-md-4 col-form-label text-md-right"> {{ __('Insurance Image')}}</label>
                            <input type="file" name="insurance" id="insurance_image">
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
