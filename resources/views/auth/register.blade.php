@extends('layouts.masterAuth')
@include('layouts.masterAuthSlider')

@section('title', 'register')
@section('content')
<div class="container-fuild">
  <div class="row m-0">
    
    @yield('slider')

    <div class="col-md-7" >
        <div class="form">
          <div class="title text-center">
            Let’s Get Started
          </div>
          <div class="dis text-center">
            Signing up or login to see our top picks for you.
          </div>
          <form class="mt-5"  method="POST" action="{{ route('register') }}">
            @csrf
            <!-- Email input -->
            <div class="form-outline mb-4">
              <label class="form-label">Email Adress</label>
              <input type="email" name="email" id="loginName" class="form-control" required />
              <span class="text-danger">
                @error('email')
                {{$message}}
                @enderror
              </span>
            </div>

            <div class="form-outline mb-4">
                <label class="form-label" >Phone</label>
                <input type="tel" name="phone" id="loginName" class="form-control" required/>
                <span class="text-danger">
                  @error('phone')
                  {{$message}}
                  @enderror
                </span>
            </div>
      
            <!-- Password input -->
            <div class="form-outline mb-4">
              <label class="form-label" >Password</label>
              <input type="password" name="password" id="loginPassword" class="form-control" required />
              <span class="text-danger">
                @error('password')
                {{$message}}
                @enderror
                
              </span>
            </div>
            <div class="form-outline mb-4">
                <label class="form-label" >Confirm Password</label>
                <input type="password" name="password_confirmation" id="loginName" class="form-control" required/>
                <span class="text-danger">
                  @error('password_confirmation')
                  {{$message}}
                  @enderror
                </span>
            </div>
            <!-- 2 column grid layout -->
            <div class="form-check d-flex  mb-5">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" required/>
                <label class="form-check-label pt-1">
                   <span class="text"> I accept&nbsp</span><a href="#!" class="text-body"><u>terms </u></a><span class="text">and</span><a href="#!" class="text-body"><u>&nbspconditons </u></a>
                </label>
            </div>
      
            <!-- Submit button -->
            <div class="button">
            <button type="submit" class="btn  btn-block mb-5">SIGN UP</button>

            </div>                                  
            <!-- Register buttons -->
             
              <div class="text-center link mt-5 mb-0 donotreg">
              <p class="text">Already have an account? &nbsp<a href="{{route('login')}}" >Login</a></p>

            
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

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <!-- Name -->
            <div>
                <x-label for="name" :value="__('Name')" />

                <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
            </div>

            <!-- Email Address -->
            <div class="mt-4">
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full"
                                type="password"
                                name="password"
                                required autocomplete="new-password" />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                type="password"
                                name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">
                    {{ __('Already registered?') }}
                </a>

                <x-button class="ml-4">
                    {{ __('Register') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
