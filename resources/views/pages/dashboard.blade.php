@extends('layouts.masterDashboard')

@include('layouts.nav')
@include('layouts.sidebar')


@section('content')
<section class="section1">
  <div class="container-fuild">
      <div class="row m-0">

        @yield('sidebar')
         
          <div class="col-md-6 p-0 mt-1" style="background-image: url('images/maps.png'); background-size: 100%;background-repeat: no-repeat;">
              
          </div>

          <div class="col-md-4">

              <div class="title mt-3">
                  H1 title should be written here
              </div>
              <div class="dis">
                  Description text should be written here
              </div>


              <div class="tabs mt-3">

                <ul class="nav nav-tabs" id="myTab" role="tablist">
                  <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">All</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Pharmacy</button>
                  </li>
                  <li class="nav-item" role="presentation">
                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Education</button>
                  </li>
                 
                </ul>


                <div class="tab-content" id="myTabContent">

                  <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">

                    
                    <div class="cart  mt-3">
                
                      <div class="image">
                        <img src="images/backbg.png" alt="" class="rounded-3" >
                      </div>
                      <div class="author ">
                        <div class="name">
                          Store name
                        </div>
                        <div class="rateing mt-1">
                          <img src="images/Stars.png" alt=""> 123 reviews
                        </div>
                        <div class="dis">
                          West street, 112/9 (9km)
                        </div>
                      </div>
                      <div class="catg justify-content-center">
                        <div class="icon" style="margin-top: 1px;">

                        <img src="images/firstaid.png" alt="" width="15px">

                        </div>
                        <div class="text  ml-1" style="margin-top: 4px;">Pharmacy</div>
                      </div>
                    </div>


                    <div class="cart  mt-3">
                
                      <div class="image">
                        <img src="images/backbg.png" alt="" class="rounded-3" >
                      </div>
                      <div class="author ">
                        <div class="name">
                          Store name
                        </div>
                        <div class="rateing mt-1">
                          <img src="images/Stars.png" alt=""> 123 reviews
                        </div>
                        <div class="dis">
                          West street, 112/9 (9km)
                        </div>
                      </div>
                      <div class="catg justify-content-center">
                        <div class="icon" style="margin-top: 1px;">

                        <img src="images/firstaid.png" alt="" width="15px">

                        </div>
                        <div class="text  ml-1" style="margin-top: 4px;">Pharmacy</div>
                      </div>
                    </div>



                    <div class="cart  mt-3">
                
                      <div class="image">
                        <img src="images/backbg.png" alt="" class="rounded-3" >
                      </div>
                      <div class="author ">
                        <div class="name">
                          Store name
                        </div>
                        <div class="rateing mt-1">
                          <img src="images/Stars.png" alt=""> 123 reviews
                        </div>
                        <div class="dis">
                          West street, 112/9 (9km)
                        </div>
                      </div>
                      <div class="catg justify-content-center">
                        <div class="icon" style="margin-top: 1px;">

                        <img src="images/firstaid.png" alt="" width="15px">

                        </div>
                        <div class="text  ml-1" style="margin-top: 4px;">Pharmacy</div>
                      </div>
                    </div>

                   

                    

                  </div>


                  <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">

                    <div class="cart  mt-3">
                
                      <div class="image">
                        <img src="images/backbg.png" alt="" class="rounded-3" >
                      </div>
                      <div class="author ">
                        <div class="name">
                          Store name
                        </div>
                        <div class="rateing mt-1">
                          <img src="images/Stars.png" alt=""> 123 reviews
                        </div>
                        <div class="dis">
                          West street, 112/9 (9km)
                        </div>
                      </div>
                      <div class="catg justify-content-center">
                        <div class="icon" style="margin-top: 1px;">

                        <img src="images/firstaid.png" alt="" width="15px">

                        </div>
                        <div class="text  ml-1" style="margin-top: 4px;">Pharmacy</div>
                      </div>
                    </div>
                    <div class="cart  mt-3">
                
                      <div class="image">
                        <img src="images/backbg.png" alt="" class="rounded-3" >
                      </div>
                      <div class="author ">
                        <div class="name">
                          Store name
                        </div>
                        <div class="rateing mt-1">
                          <img src="images/Stars.png" alt=""> 123 reviews
                        </div>
                        <div class="dis">
                          West street, 112/9 (9km)
                        </div>
                      </div>
                      <div class="catg justify-content-center">
                        <div class="icon" style="margin-top: 1px;">

                        <img src="images/firstaid.png" alt="" width="15px">

                        </div>
                        <div class="text  ml-1" style="margin-top: 4px;">Pharmacy</div>
                      </div>
                    </div>
                    <div class="cart  mt-3">
                
                      <div class="image">
                        <img src="images/backbg.png" alt="" class="rounded-3" >
                      </div>
                      <div class="author ">
                        <div class="name">
                          Store name
                        </div>
                        <div class="rateing mt-1">
                          <img src="images/Stars.png" alt=""> 123 reviews
                        </div>
                        <div class="dis">
                          West street, 112/9 (9km)
                        </div>
                      </div>
                      <div class="catg justify-content-center">
                        <div class="icon" style="margin-top: 1px;">

                        <img src="images/firstaid.png" alt="" width="15px">

                        </div>
                        <div class="text  ml-1" style="margin-top: 4px;">Pharmacy</div>
                      </div>
                    </div>


                  </div>
                  
                  <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="cart  mt-3">
                
                      <div class="image">
                        <img src="images/backbg.png" alt="" class="rounded-3" >
                      </div>
                      <div class="author ">
                        <div class="name">
                          Store name
                        </div>
                        <div class="rateing mt-1">
                          <img src="images/Stars.png" alt=""> 123 reviews
                        </div>
                        <div class="dis">
                          West street, 112/9 (9km)
                        </div>
                      </div>
                      <div class="catg justify-content-center">
                        <div class="icon" style="margin-top: 1px;">

                        <img src="images/firstaid.png" alt="" width="15px">

                        </div>
                        <div class="text  ml-1" style="margin-top: 4px;">Pharmacy</div>
                      </div>
                    </div>
                    <div class="cart  mt-3">
                
                      <div class="image">
                        <img src="images/backbg.png" alt="" class="rounded-3" >
                      </div>
                      <div class="author ">
                        <div class="name">
                          Store name
                        </div>
                        <div class="rateing mt-1">
                          <img src="images/Stars.png" alt=""> 123 reviews
                        </div>
                        <div class="dis">
                          West street, 112/9 (9km)
                        </div>
                      </div>
                      <div class="catg justify-content-center">
                        <div class="icon" style="margin-top: 1px;">

                        <img src="images/firstaid.png" alt="" width="15px">

                        </div>
                        <div class="text  ml-1" style="margin-top: 4px;">Pharmacy</div>
                      </div>
                    </div>
                    <div class="cart  mt-3">
                
                      <div class="image">
                        <img src="images/backbg.png" alt="" class="rounded-3" >
                      </div>
                      <div class="author ">
                        <div class="name">
                          Store name
                        </div>
                        <div class="rateing mt-1">
                          <img src="images/Stars.png" alt=""> 123 reviews
                        </div>
                        <div class="dis">
                          West street, 112/9 (9km)
                        </div>
                      </div>
                      <div class="catg justify-content-center">
                        <div class="icon" style="margin-top: 1px;">

                        <img src="images/firstaid.png" alt="" width="15px">

                        </div>
                        <div class="text  ml-1" style="margin-top: 4px;">Pharmacy</div>
                      </div>
                    </div>
                  </div>

                 
                </div>
              </div>
          </div>
      </div>
  </div>
</section>
@endsection
