
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
        <form class="mt-5">
          
        

    
          <!-- Password input -->
          <div class="form-outline mb-4">
            <label class="form-label" >New password</label>
            <input type="password" id="loginPassword" class="form-control" />
          </div>
          <div class="form-outline mb-4">
              <label class="form-label" >Set new password</label>
              <input type="password" id="loginName" class="form-control" />
            </div>
          <!-- 2 column grid layout -->
  
    
          <!-- Submit button -->
          <div class="button">
          <button type="submit" class="btn  btn-block mb-5">Reset password</button>

          </div>                                  

          
          </div>
          
        </form>  
      </div>
    </div>

  </div>
</div>
@endsection

