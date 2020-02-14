@extends('frontend/layout')

@section('content')
<section class="breadcrumb-bg-4" style="background-image:url({{Voyager::image('banners/authbanner.jpg')}})">                
                    <div class="container">
                        <div class="site-breadcumb">                        
                            <h1 class="title-1">Reset your password </h1> 
                            <ol class="breadcrumb breadcrumb-menubar">
                                <li> <a href="#"> Home </a> Reset your password  </li>                             
                            </ol>
                        </div>  
                    </div>
</section>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-body">
                    <div class="align">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                <div class="email">
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf

                        <div class="form-group row" id="left1">
                                    <label for="email" id="mar" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" placeholder="E-mail" name="email" value="{{ old('email') }}" required autocomplete="email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                        </div>
                    

                        <div class="form-group row mb-0" id="left">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
                                </button>
                            </div>
                        </div>
                    </form>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
