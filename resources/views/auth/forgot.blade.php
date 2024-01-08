
@extends('layouts.masterAuth')
@include('layouts.masterAuthSlider')

@section('title', 'forgot')



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
        
        <div class="tab-content">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <form>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="loginName">Email Adress</label>
                <input type="email" id="loginName" class="form-control" />
              </div>
        
              <!-- Password input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="loginPassword">Password</label>
                <input type="password" id="loginPassword" class="form-control" />
              </div>
        
              <!-- 2 column grid layout -->
              <div class="row mb-4 justify-content-end forgot">
                  <div class="col-md-12 d-flex justify-content-end">
                    <!-- Simple link -->
                    <a href="#!" >Forgot password?</a>
                  </div>
                </div>
        
              <!-- Submit button -->
              <div class="button">
              <button type="submit" class="btn  btn-block mb-4">Login</button>

              </div>                                  
              <!-- Register buttons -->
              <div class="text-center donot" >
                <p class="text">Do not have account?<a href="#!">&nbsp SIGN UP</a></p>
              </div>
              <!-- <p class="text">Do not have account?<a href="#!">&nbsp SIGN UP</a></p> -->
            </form>  
          </div>
          
          
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

            <form>
              <!-- Email input -->
              <div class="form-outline mb-4">
                <label class="form-label" for="loginName">Phone Number</label>

                <input type="email" id="loginName" class="form-control" />
              </div>
        
              
        
              <!-- 2 column grid layout -->
              <div class="row mb-4 justify-content-end forgot">
                <div class="col-md-12 d-flex justify-content-end">
                  <!-- Simple link -->
                  <a href="#!" >Forgot password?</a>
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


