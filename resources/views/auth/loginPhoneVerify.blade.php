

@extends('layouts.masterAuth')
@include('layouts.masterAuthSlider')

@section('title', 'Login Phone Verify')



  @section('content')
  <div class="container-fuild" >
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
              <button class="nav-link" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Email</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Phone Number</button>
            </li>     
          </ul>
  
          <div class="tab-content">
            @if (session('status'))
            <div class="alert alert-danger">
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
            
            <div class="tab-pane fade" id="home" role="tabpanel" aria-labelledby="home-tab">
              
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

               
            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
              @if (session('error'))
              <div class="alert alert-danger">
                {{ session('error') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              @endif
              <form method="post" action="{{route('loginPhoneVerify')}}">
                @csrf
                <!-- Email input -->
                <div class="form-outline mb-4">
                  
                  <label class="form-label" for="loginName">Code</label>

                 
                  <input type="text" name="code" id="" class="form-control" required/>
                  <span class="text-danger">
                    @error('code')
                    {{$message}}
                    @enderror
                    </span>
                </div>
          
          
                <!-- Submit button -->
                <div class="button">
                    <button type="submit" class="btn  btn-block mb-4">Login</button>

                    </div> 
                
          
                <!-- Register buttons -->
                <div class="text-center link donot">
                  <p class="text-muted">Do not have account?<a href="#!">&nbsp SIGN UP</a></p>
                </div>
              </form>


            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
  @endsection


    
