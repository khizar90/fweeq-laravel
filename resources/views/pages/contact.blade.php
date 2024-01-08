@extends('layouts.mastercontact')

@section('content')

@include('layouts.nav1')
@include('layouts.footer')

<header>
  <div class="container">
      <div class="row">
          <div class="col-md-6">
              <div class="title">
                  Get in <span>Touch</span>
                  
              </div>
              <div class="text">
                  Enim tempor eget pharetra facilisis sed maecenas adipiscing. Eu leo molestie vel, ornare non id blandit netus.
              </div>
              <form method="post" action="{{route('contact')}}">
                  @csrf
                  @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                @endif 
                    <div class="mb-3 mt-4" >
                      <input type="text" class="form-control" name="name" id="exampleInputPassword1" placeholder="Name *">
                      <span class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                      </span>
                    </div>
                  <div class="mb-3">
                    <input  type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                    <span class="text-danger">
                        @error('email')
                        {{$message}}
                        @enderror
                      </span>
                  </div>
                  <div class="mb-3">
                    <input  type="tel" name="phone" class="form-control" id="exampleInputPassword1" placeholder="Phone number *">
                    <span class="text-danger">
                        @error('phone')
                        {{$message}}
                        @enderror
                      </span>
                  </div>
                  <div class="mb-3 accordioncs">
                      <div class="accordion accordion-flush" id="accordionFlushExample">
                          <div class="accordion-item">
                            <h2 class="accordion-header" id="flush-headingOne">
                              <button class="accordion-button collapsed p-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                                  How did you find us?
                              </button>
                            </h2>
                            <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                              <div class="accordion-body">Nibh quisque suscipit fermentum netus nulla cras porttitor euismod nulla. Orci, dictumst nec aliquet id ullamcorper venenatis. </div>
                            </div>
                          </div>
                      </div>
                    </div>
                    <div class="button">
                  <button type="submit" class="btn" >SEND</button>

                    </div>
                </form>
                <div class="social">
                 <div class="container ">
                  <div class="row">
                      <div class="col-md-4">
                          <i class="bi bi-telephone-outbound"></i>
                          <div class="socialinfo">
                              <div class="phonetext">
                                  <div class="tel">
                                      PHONE
                                  </div>
                                  <div class="dis">
                                      03 5432 1234
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <i class="bi bi-telephone-outbound"></i>
                          <div class="socialinfo">
                              <div class="phonetext">
                                  <div class="tel">
                                      FAX
                                  </div>
                                  <div class="dis">
                                      03 5432 1234
                                  </div>
                              </div>
                          </div>
                      </div>
                      <div class="col-md-4">
                          <i class="bi bi-envelope-paper"></i>
                          <div class="socialinfo">
                              <div class="phonetext">
                                  <div class="tel">
                                      EMAIL
                                  </div>
                                  <div class="dis">
                                      info@marcc.com.au
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
                 </div>
                </div>
          </div>
          <div class="col-md-6 d-md-block d-none cimage">

              <img src="images/cmap.png">
          </div>
      </div>
  </div>
</header>
@endsection