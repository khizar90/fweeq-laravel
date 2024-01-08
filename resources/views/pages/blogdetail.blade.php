@extends('layouts.masterBdetail')

@section('content')

@include('layouts.nav1')

<section class="section1 mt-5">
  <div class="container mb-5">
      <img src="images/bloghead.png" alt="" class="img-fluid rounded-3">
  </div>
</section>

<section class="section2">
  <div class="container">
      <div class="row">
          <div class="col-md-7">
              <div class="title mb-5">
              The State of Automation: Benefits & Strategies
              </div>
              <div class="dis mb-5">
                  As a millennial, I still remember the feeling of walking through the farming stalls early in the morning, chatting with chubby milkmen, and haggling over the price of chicken. used to come to the old part of town, set up their makeshift kiosks, spread the tablecloths, and lay out their produce in elaborate heaps for display. Now, instead of a market, there is a shopping mall.
              </div>
              <div class="qoute text-center mb-5">
                  <span>“ </span>Before the advent of grocery stores and malls, farmers used to have a small pool of loyal customers where relationships were close and healthy.<span> ”</span>
              </div>

              <div class="image mb-5">
                  <img src="images/blogd1.png" alt="" class="img-fluid rounded-3" >
              </div>

              <div class="author mb-5 bg-light p-4">
                  <div class="d-flex flex-row align-items-center detail">
                      <div>
                        <img
                          src="images/Avatar.png"
                          class="img-fluid rounded-circle" alt="Shopping item" style="width: 65px;">
                      </div>
                      <div class="ms-3">
                        <p class="name">Anna Smith</p> 
                        <p class="small mb-0">Technical author and eCommerce advocate</p>                          
                      </div>
                    </div>

                    <div class="audis mt-3 mb-4">
                      Anna is a journalist with more than 5 years of experience, who now is focusing his story-telling abilities on the world of ecommerce and the quick revolution happening around it.
                    </div>


                    <div class="texticon">
                      <div class="time">
                          Sep 30   •   8 min
                      </div>
                      <div class="icon float-md-right">
                            <a href="" class="me-4 text-reset">
                              <i class="bi bi-twitter"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                              <i class="bi bi-facebook"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                              <i class="bi bi-instagram"></i>
                            </a>
                            <a href="" class="me-4 text-reset">
                              <i class="bi bi-github"></i>
                            </a>
                      </div>
                    </div>
              </div>
          </div>
      </div>
  </div>
</section>

<section class="section3">
  <div class="container">
      <div class="row mt-5">
          <div class="col-md-6">
              <div class="check">
                  Check also...
              </div>
              <div class="title mb-4">
                  Get in <span>Touch</span>
                  
              </div>
              <div class="text mb-4">
                  Enim tempor eget pharetra facilisis sed maecenas adipiscing. Eu leo molestie vel, ornare non id blandit netus.
              </div>
              <form>
                  
                  <div class="mb-3" >
                      <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Name *">
                    </div>
                  <div class="mb-3">
                    <input  type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
                  </div>
                  <div class="mb-3">
                    <input  type="tel" class="form-control" id="exampleInputPassword1" placeholder="Phone number *">
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
                </form>
          </div>
      </div>
    </div>
</section>
@include('layouts.footer')
@endsection