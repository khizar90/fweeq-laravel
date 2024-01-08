
@extends('layouts.masterAuth')
@include('layouts.masterAuthSlider')

@section('title', 'check email')

@section('content')
<div class="container-fuild">
  <div class="row m-0">
    @yield('slider')
    <div class="col-md-7" >
      <div class="form" >
          <div class="inboximg mb-4">
              <img src="{{asset('images/envelope.png')}}" alt="" style="">

          </div>
          <div class="title text-center">
              Check your email
          </div>
          <div class="dis text-center">
              We have sent you an email check and get recovery link from there
          </div>
      </div>
    </div> <div class="col-md-7" >
      <div class="form">
        <div class="title text-center">
          Let’s Get Started
        </div>
        <div class="dis text-center">
          Signing up or login to see our top picks for you.
        </div>
        <form class="mt-5">
          <!-- Email input -->
          <div class="form-outline mb-4">
            <label class="form-label" >Email Adress</label>
            <input type="email" id="loginName" class="form-control" />
          </div>

          <div class="form-outline mb-4">
              <label class="form-label" >Phone</label>
              <input type="phone" id="loginName" class="form-control" />
            </div>
    
          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" >Password</label>
            <input type="password" id="loginPassword" class="form-control" />
          </div>
          <div class="form-outline mb-4">
              <label class="form-label" >Confirm Password</label>
              <input type="password" id="loginName" class="form-control" />
            </div>
          <!-- 2 column grid layout -->
          <div class="form-check d-flex  mb-5">
              <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3cg" />
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
            <p class="text">Already have an account? &nbsp<a href="#!" >Login</a></p>

          
          </div>
          
        </form>  
      </div>
    </div>

  </div>
</div>
@endsection


