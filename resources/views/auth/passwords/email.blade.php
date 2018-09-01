@extends('layouts.app')

@section('content')
<div class="container">

     <div class="contact-bottom">
        <h3 class="col-md-12">
          اعادة كلمة المرور
        </h3>
        
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row">
                           
                            <div class="col-md-12">
                                <input  style="width:40%;" id="email" type="email" placeholder="البريد الالكترونى"  class="{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-12 ">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('ارسل رابط اعاده بناء كلمه المرور') }}
                                </button>
                            </div>
                        </div>
                    </form>
              
    </div>
</div>
@endsection
