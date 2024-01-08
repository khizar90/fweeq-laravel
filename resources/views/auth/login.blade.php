@extends('layouts.masterAuth')
@include('layouts.masterAuthSlider')

@section('title', 'login')
@section('content')
<div class="container-fuild">
  <div class="row m-0">
    
    @yield('slider')

    <div class="col-md-7">
      <div class="form">
        <div class="title text-center">
          Let’s Get Started
        </div>
        <div class="dis text-center">
          Signing up or login to see our top picks for you.
        </div>


        <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist" style="margin-top: 20px;">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Email</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Phone Number</button>
          </li>
         
         
        </ul>
        
          @if (session('status'))
          <div class="alert alert-success">
              {{ session('status') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
              </button>
          </div>
          @endif

          
          @if ($errors->any())
          <div class="alert alert-danger mt-4">
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



        <div class="tab-content">


          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <form method="POST" action="{{ route('login') }}">
              @csrf
              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="loginName">Email Adress</label>
                <input type="email" id="loginName"  class="form-control" name="email" :value="old('email')" required autofocus />
                
              </div>
        
              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="loginPassword">Password</label>
                <input type="password" id="loginPassword" class="form-control" name="password" required autocomplete="current-password" />
                
              </div>
              
                              
        
              <!-- 2 column grid layout -->
              <div class="row mb-4 justify-content-end forgot">
                  <div class="col-md-12 d-flex justify-content-end">
                    <!-- Simple link -->
                    <a href="{{route('password.request')}}" >Forgot password?</a>
                  </div>
                </div>
        
              <!-- Submit button -->
              <div class="button">
              <button type="submit" class="btn  btn-block mb-4">Login</button>

              </div>                                  
              <!-- Register buttons -->
              <div class="text-center donot" >
                <p class="text">Do not have account?<a href="{{route('register')}}">&nbsp SIGN UP</a></p>
              </div>
              <!-- <p class="text">Do not have account?<a href="#!">&nbsp SIGN UP</a></p> -->
            </form> 
          </div>
            
             
          
          
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

    
    
            <form method="post" action="{{route('loginPhone')}}">

              <!-- Email input -->
              @csrf
              <div class="form-outline mb-4">
                <label class="form-label" for="loginName">Phone Number</label>

                <input type="tel" name="phone" class="form-control" />
              </div>
        
              
        
              <!-- 2 column grid layout -->
              <div class="row mb-4 justify-content-end forgot">
                <div class="col-md-12 d-flex justify-content-end">
                  <!-- Simple link -->
                  <a href="{{route('password.request')}}" >Forgot password?</a>
                </div>
              </div>
        
              <!-- Submit button -->
              <div class="button">
                  <button type="submit" class="btn  btn-block mb-4">Login</button>

              </div> 
              
        
              <!-- Register buttons -->
              <div class="text-center link  donot" >
                <div class="donottext">
              <p class="">Do not have account?<a href="#!">&nbsp SIGN UP</a></p>

                </div>
              </div>
            </form>


          </div>


         
        </div>
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

      <!-- Session Status -->
      <x-auth-session-status class="mb-4" :status="session('status')" />

      <!-- Validation Errors -->
      <x-auth-validation-errors class="mb-4" :errors="$errors" />

      <form method="POST" action="{{ route('login') }}">
          @csrf

          <!-- Email Address -->
          <div>
              <x-label for="email" :value="__('Email')" />

              <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
          </div>

          <!-- Password -->
          <div class="mt-4">
              <x-label for="password" :value="__('Password')" />

              <x-input id="password" class="block mt-1 w-full"
                              type="password"
                              name="password"
                              required autocomplete="current-password" />
          </div>

          <!-- Remember Me -->
          <div class="block mt-4">
              <label for="remember_me" class="inline-flex items-center">
                  <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50" name="remember">
                  <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
              </label>
          </div>

          <div class="flex items-center justify-end mt-4">
              @if (Route::has('password.request'))
                  <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                      {{ __('Forgot your password?') }}
                  </a>
              @endif

              <x-button class="ml-3">
                  {{ __('Log in') }}
              </x-button>
          </div>
      </form>
  </x-auth-card>
</x-guest-layout> --}}
