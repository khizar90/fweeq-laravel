
@extends('layouts.masterReviews')

@include('layouts.nav')
@include('layouts.sidebar')

@section('content')
<section class="section1">
  <div class="container-fuild">
      <div class="row m-0">
          @yield('sidebar')

          <div class="col-md-6">

          </div>

          <div class="col-md-4">
              <div class="container">
                 <div class="icnm">
                  <div class="back mt-3">
                      <i class="bi bi-arrow-left-short"></i>
                  </div>
                  <div class="title text-center" >
                      Store name
                  </div>
                  </div>

                  <div class="total mt-4 text-center">
                     <span class="span1">(1,492)</span> <span class="span2"> total reviews</span>
                  </div>

                  <div class="rateimgg mt-2">
                      <img src="images/Stars.png" alt="">
                  </div>

                  <div class="trate text-center">
                      4.0
                  </div>

                  <!-- Button trigger modal -->
                  <div class="modalbtn mt-5" >
                      <button type="button" class="btn text-left" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                          Type your review here
                        </button>
                  </div>   
                  
                  <!-- Modal -->
                  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog modal-dialog modal-dialog-centered">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="staticBackdropLabel">Rate</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body bg-light">
                          <div class="strimage mx-auto d-block mt-3">
                              <img src="images/store.png" class="rounded " alt="...">
                          </div>
                          <div class="title text-center mt-2">
                              Store name
                          </div>
                          <div class="dis text-center mt-4">
                              How was your experience with this store?
                          </div>
                          <div class="container rateimg mt-2">
                              <div class="row">
                                <div class="col-lg-12">
                                  <div class="star-rating text-center">
                                    <span class="fa fa-star-o" data-rating="1"></span>
                                    <span class="fa fa-star-o" data-rating="2"></span>
                                    <span class="fa fa-star-o" data-rating="3"></span>
                                    <span class="fa fa-star-o" data-rating="4"></span>
                                    <span class="fa fa-star-o" data-rating="5"></span>
                                    <input type="hidden" name="whatever1" class="rating-value" value="2.56">
                                  </div>
                                </div>
                              </div>
                          </div>                  
                          <form>
                              <div class="form-outline mt-3">
                                  <textarea class="form-control" id="textAreaExample1" rows="4" placeholder="Comment"></textarea>
                              </div>
                              <div class="button mt-3">
                                <button class="btn  my-sm-0 ml-2" type="submit">Submit</button> 
                              </div>
                          </form>
                        </div>
                        
                      </div>
                    </div>
                  </div>


                  <div class="users mt-5">
                    <div class="cardd mb-3">
                        <div class="image">
                            <img src="images/backbg.png" class="card-img-top rounded-circle"  
                            />
                        </div>
                        <div class="person">
                            <div class="name">Ahmed E.
                                <span>4.0</span>
                                <img src="images/Stars.png" alt="">
                            </div>
                            <div class="dis mt-2">
                                Very useful and great pharmacy, They have the best support ever
                            </div>
                        </div>
                        <!-- <i class="fa fa-ellipsis-h "></i> -->
                       
                    </div>
                    <hr>
                    <div class="cardd mb-3">
                        <div class="image">
                            <img src="images/backbg.png" class="card-img-top rounded-circle"  
                            />
                        </div>
                        <div class="person">
                            <div class="name">Ahmed E.
                                <span>4.0</span>
                                <img src="images/Stars.png" alt="">
                            </div>
                            <div class="dis mt-2">
                                Very useful and great pharmacy, They have the best support ever
                            </div>
                        </div>
                        <!-- <i class="fa fa-ellipsis-h "></i> -->
                       
                    </div>
                    <hr>
                   
                </div>
                  
              </div>
          </div>
      </div>
  </div>

  
    
   

</section>
@endsection