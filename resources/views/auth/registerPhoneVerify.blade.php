

@extends('layouts.masterAuth')
@include('layouts.masterAuthSlider')

@section('title', 'Register Phone Verify')



@section('content')

<div class="container-fuild">
  <div class="row m-0">
    
    @yield('slider')

    <div class="col-md-7" >
      <div class="form">
        <div class="title text-center">
          We have sent you code
        </div>
        <div class="dis text-center">
          Confirm your phone number
        </div>
        {{-- @if(session()->has('code'))
            <div class="alert alert-success">
              {{ session('code') }}
              <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            
          @endif --}}
        <form class="mt-5" method="post" action="{{route('verifyCode')}}">
          @csrf
          <!-- Email input -->
          @if (session('error'))
              <div class="alert alert-danger">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
          <div class="form-outline mb-4">
            <label class="form-label" >Code</label>
            <input type="phone" id="" name="code" class="form-control" />
            <span class="text-danger">
              @error('code')
              {{$message}}
              @enderror
              </span>
          </div>

          
    
          <!-- Submit button -->
          <div class="button">
          <button type="submit" class="btn  btn-block mb-5">SIGN UP</button>

          </div>                                  
          <!-- Register buttons -->
           
            <div class="text-center link mt-5 mb-0 donot" >
            <p class="text-muted">Already have an account? &nbsp<a href="{{route('login')}}">Login</a></p>

          
          </div>
          
        </form>  
      </div>
    </div>
  </div>
</div>
@endsection

