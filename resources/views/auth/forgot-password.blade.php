
@extends('layouts.masterAuth')
@include('layouts.masterAuthSlider')

@section('title', 'forgot')



@section('content')

<div class="container-fuild">
  <div class="row m-0">
    
    @yield('slider')

    <div class="col-md-7" >
        <div class="form">
          <div class="title text-center mb-4">
            Forgot password?
          </div>
          <div class="dis text-center">
            Give us your email for recovering
          </div>
          @if (session('status'))
            <div class="alert alert-danger">
                {{ session('status') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            
            @if ($errors->any())
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

          <form class="mt-5"  method="POST" action="{{ route('password.email') }}">
            <!-- Email input -->
            @csrf
            <div class="form-outline mb-4">
              <label class="form-label" >Email Adress</label>
              <input type="email" id="loginName" name="email" class="form-control" />
            </div>

      
            <!-- Submit button -->
            <div class="button">
            <button type="submit" class="btn  btn-block mb-5">Reset password</button>

            </div>                                  
            <!-- Register buttons -->
             
              <div class="text-center link mt-5 mb-0 back2" >
              <a href="{{route('login')}}">Back to login</a>

            
            </div>
            
          </form>  
        </div>
      </div>

  </div>
</div>
@endsection



{{-- <x-guest-layout>
    <x-auth-card>
        <x-slot name="logo">
            <a href="/">
                <x-application-logo class="w-20 h-20 fill-current text-gray-500" />
            </a>
        </x-slot>

        <div class="mb-4 text-sm text-gray-600">
            {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
        </div>

        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('password.email') }}">
            @csrf

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Email Password Reset Link') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
