
@extends('layouts.masterAuth')
@include('layouts.masterAuthSlider')

@section('title', 'New password')



@section('content')

<div class="container-fuild">
  <div class="row m-0">
    
    @yield('slider')

    <div class="col-md-7" >
      <div class="form">
        <div class="title text-center">
          Set new password
        </div>
        <div class="dis text-center">
          Set new password
        </div>


        <form class="mt-5" method="POST" action="{{ route('password.update') }}">

            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">
            <span class="text-danger">
                @error('token')
                {{$message}}
                @enderror
              </span>

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="form-control" type="email" name="email" :value="old('email', $request->email)" required autofocus />
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                      </span>
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('New password')" />

                <x-input id="password" class="form-control" type="password" name="password" required />
                <span class="text-danger">
                    @error('password')
                    {{$message}}
                    @enderror
                  </span>
            </div>

            <!-- Confirm Password -->
            <div class="mt-4 mb-5">
                <x-label for="password_confirmation" :value="__('Set new password')" />

                <x-input id="password_confirmation" class="form-control"
                                    type="password"
                                    name="password_confirmation" required />
                                    <span class="text-danger">
                                        @error('password_confirmation')
                                        {{$message}}
                                        @enderror
                                      </span>
            </div>

            <div class="button">
                <button type="submit" class="btn  btn-block mb-5">Reset password</button>

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

        <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <!-- Password Reset Token -->
            <input type="hidden" name="token" value="{{ $request->route('token') }}">

            <!-- Email Address -->
            <div>
                <x-label for="email" :value="__('Email')" />

                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email', $request->email)" required autofocus />
            </div>

            <!-- Password -->
            <div class="mt-4">
                <x-label for="password" :value="__('Password')" />

                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required />
            </div>

            <!-- Confirm Password -->
            <div class="mt-4">
                <x-label for="password_confirmation" :value="__('Confirm Password')" />

                <x-input id="password_confirmation" class="block mt-1 w-full"
                                    type="password"
                                    name="password_confirmation" required />
            </div>

            <div class="flex items-center justify-end mt-4">
                <x-button>
                    {{ __('Reset Password') }}
                </x-button>
            </div>
        </form>
    </x-auth-card>
</x-guest-layout> --}}
