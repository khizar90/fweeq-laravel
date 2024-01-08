@extends('layouts.masterIndex')

@section('content')
  <header>
    <nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#"><img class="logo" src="images/logo.png"></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="{{route('home')}}">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#howitswork">How its works</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#partner">I'm partner</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="#">Help</a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{route('blog')}}">Blog</a>
            </li>

          </ul>
          <form class="d-flex">
            <div class="navlog">
              <a class="nav-link " href="{{route('login')}}">Login</a>
            </div>
            <div class="div">
              <button class="btn" type="submit">Sign up</button>
            </div>

            <div class="navlog dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                En
              </a>
              <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                <li><a class="dropdown-item" href="#">Polski</a></li>
                <li><a class="dropdown-item" href="#">中文</a></li>
                <li><a class="dropdown-item">日本語</a></li>
                <li><a class="dropdown-item" href="#">Deutsch</a></li>
                <li><a class="dropdown-item" href="#">Français</a></li>
                <li><a class="dropdown-item" href="#">Español</a></li>
                <li><a class="dropdown-item" href="#">Русский</a></li>
                <li><a class="dropdown-item" href="#">Português</a></li>
              </ul>
            </div>
          </form>
        </div>
      </div>
    </nav>
  </header>


  <section class="section1 mb-3">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="title">
            Payroll and <br>compliance built <br>for the worldwide<br> workforce
          </div>
        <div class="text1">
          Onboard employees and contractors in minutes <br>and pay them in 150+ cities.
        </div>
        <div class="titleimg2">
          <img src="images/appstore.png">
        <img src="images/googleplay.png">
        </div>

        <div class="container-fuild">
          <div class="row">
            <div class="col-5 col-md-5">
              <div class="people">
                <div class="coustomer">
                  <img src="images/people.png">
                  <div class="text">
                   <div class="number">
                    2,291
                   </div>
                   <div class="textc">
                    Happy Coustomers
                   </div>
                  </div>
                </div>

              </div>
            </div>
            <div class="col-1 col-md-1 pr-0"> <div class="vl"></div></div>

            <div class="col-4 col-md-4 pl-0">
              <div class="people">
                <div class="coustomer">
                  <div class="text">
                   <div class="number">
                    4.8/5
                   </div>
                   <div class="textc">
                    <img src="images/Stars.png" alt="" style="width: 30%;">
                    Happy Rating
                   </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
        </div>



        </div>
        <div class="col-md-6"><img class="titleimg" src="images/titleimg.png"></div>
      </div>
    </div>
  </section>


  <section class="section2">
    <div class="title">
      Features for a better experience
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <img src="images/map.png" >
        <span class="text1" >
          Find on map
          <div class="distext">
            This software is very easy for you<br> to manage. You can use it as you wish.
          </div>
        </span>

        </div>
        <div class="col-md-4" >
          <img src="images/shop.png">
          <span class="text1">Shop details
            <div class="distext">
              This software is very easy for you<br> to manage. You can use it as you wish.
            </div>
          </span>
        </div>
        <div class="col-md-4">
          <img src="images/safe.png">
          <span  class="text1">Keep safe & private
            <div class="distext">
              This software is very easy for you <br>to manage. You can use it as you wish.
            </div>
          </span>
        </div>
      </div>
    </div>
  </section>


  <section class="section3" id="howitswork">
    <div class="title">
      How it works
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-3 p-0 ">
          <img src="images/create.png">
          <div class="step1">
            1. Create an account
          </div>
          <div class="text">
            Sign up with your email address and choose a strong password
          </div>
        </div>
        <div class="col-md-3 p-0">
          <img src="images/create.png">
          <div class="step2">
            2. Create a transfer
          </div>
          <div class="text">
            Sign up with your email address and choose a strong password
          </div>

        </div>
        <div class="col-md-3 p-0">
          <img src="images/create.png">
          <div class="step3">
            3.Enter the beneficiary's details
          </div>
          <div class="text">
            Sign up with your email address and choose a strong password
          </div>
        </div>
        <div class="col-md-3 p-0">
          <img src="images/create.png">
          <div class="step4">
            4.Pay for your transfer
          </div>
          <div class="text">
            Sign up with your email address and choose a strong password
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section4">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/scan.png" alt="">
        </div>
        <div class="col-md-6">
          <div class="title">
            Scan and pay<br>
            Easier then can be
          </div>
          <div class="text">
            Proin faucibus nibh et sagittis a. Lacinia purus ac<br> amet pellentesque aliquam enim.
          </div>
          <div class="sinup">
            <button class="btn" type="submit">Sign up</button>
          </div>
        </div>
      </div>
    </div>
  </section >


  <section class="section5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 section">
          <div class="title">
            Find shops near you
          </div>
          <div class="text">
            Create custom landing pages with Rareblocks that converts more<br> visitors than any website. With lots of unique blocks easily build a<br> page. There are many variations of passages of available.
          </div>
          <div class="sinup">
            <button class="btn" type="submit">Sign up</button>
          </div>
        </div>
        <div class="col-md-6">
          <img src="images/map1.png" alt="">
        </div>

      </div>
    </div>
  </section>



  <section class="section6" id="partner">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="images/Frame.png" alt="">
        </div>
        <div class="col-md-6 section">
          <div class="title">
            Start selling and get<br> paid with simple <br>steps
          </div>
          <div class="text">
            Create custom landing pages with Rareblocks that converts more<br> visitors than any website. With lots of unique blocks easily build a<br> page. There are many variations of passages of available.
          </div>
          <div class="sinup">
            <button class="btn" type="submit">Sign up as partner</button>
          </div>
        </div>
      </div>
    </div>
  </section>


  <section class="section7">
    <div class="container">
      <div class="row">
        <div class="col-md-6 section">
          <div class="title">
            Try the app
          </div>
          <div class="text">
            There are many variations of passages of Lorem Ipsum available, but the majority have suffered all injected humour or randomised words which don't look even slightly believable.
          </div>
          <div class="titleimg2">
            <img src="images/appstore.png">
          <img src="images/googleplay.png">
          </div>
        </div>
        <div class="col-md-6 section1">
          <img src="images/mask.png" alt="">
        </div>

      </div>
    </div>
  </section>


  <section class="section8">
    <div class="title">
      Our blessed client<br> said about us 😍
    </div>
    <div class="container">
    <div class="swiper mySwiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="sliderinner">
              <img src="images/Avatar.png" style="width:65px;  border-radius: 50%;">
              <span class="text1" >
                Andreas Kardell
                <div class="distext">
                  CTO at Proffsmagasinet.se
                </div>
              </span>
            </div>
            <div class="text2">
              Virto Commerce was the best fit for De Klok Dranken as it combined cost-effectiveness with the functionality, flexibility, and scalability.
            </div>
          </div>
          <div class="swiper-slide">
            <div class="sliderinner">
              <img src="images/Avatar.png" style="width:65px;  border-radius: 50%;">
              <span class="text1" >
                Andreas Kardell
                <div class="distext">
                  CTO at Proffsmagasinet.se
                </div>
              </span>
            </div>
            <div class="text2">
              Virto Commerce was the best fit for De Klok Dranken as it combined cost-effectiveness with the functionality, flexibility, and scalability.
            </div>
          </div>
          <div class="swiper-slide">
            <div class="sliderinner">
              <img src="images/Avatar.png" style="width:65px;  border-radius: 50%;">
              <span class="text1" >
                Andreas Kardell
                <div class="distext">
                  CTO at Proffsmagasinet.se
                </div>
              </span>
            </div>
            <div class="text2">
              Virto Commerce was the best fit for De Klok Dranken as it combined cost-effectiveness with the functionality, flexibility, and scalability.
            </div>
          </div> <div class="swiper-slide">
            <div class="sliderinner">
              <img src="images/Avatar.png" style="width:65px;  border-radius: 50%;">
              <span class="text1" >
                Andreas Kardell
                <div class="distext">
                  CTO at Proffsmagasinet.se
                </div>
              </span>
            </div>
            <div class="text2">
              Virto Commerce was the best fit for De Klok Dranken as it combined cost-effectiveness with the functionality, flexibility, and scalability.
            </div>
          </div> <div class="swiper-slide">
            <div class="sliderinner">
              <img src="images/Avatar.png" style="width:65px;  border-radius: 50%;">
              <span class="text1" >
                Andreas Kardell
                <div class="distext">
                  CTO at Proffsmagasinet.se
                </div>
              </span>
            </div>
            <div class="text2">
              Virto Commerce was the best fit for De Klok Dranken as it combined cost-effectiveness with the functionality, flexibility, and scalability.
            </div>
          </div>
          <div class="swiper-slide">
            <div class="sliderinner">
              <img src="images/Avatar.png" style="width:65px;  border-radius: 50%;">
              <span class="text1" >
                Andreas Kardell
                <div class="distext">
                  CTO at Proffsmagasinet.se
                </div>
              </span>
            </div>
            <div class="text2">
              Virto Commerce was the best fit for De Klok Dranken as it combined cost-effectiveness with the functionality, flexibility, and scalability.
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
 </div>
  </section>

  <section class="section9">
    <div class="title">Know how to start</div>
    <div class="container">
      <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingOne">
            <button class="accordion-button collapsed pl-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
              Where can I watch?
            </button>
          </h2>
          <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Nibh quisque suscipit fermentum netus nulla cras porttitor euismod nulla. Orci, dictumst nec aliquet id ullamcorper venenatis. </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingTwo">
            <button class="accordion-button collapsed pl-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
              Mauris id nibh eu fermentum mattis purus?
            </button>
          </h2>
          <div id="flush-collapseTwo" class="accordion-collapse collapse" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Nibh quisque suscipit fermentum netus nulla cras porttitor euismod nulla. Orci, dictumst nec aliquet id ullamcorper venenatis. </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingThree">
            <button class="accordion-button collapsed pl-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
              Eros imperdiet rhoncus?
            </button>
          </h2>
          <div id="flush-collapseThree" class="accordion-collapse collapse" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Nibh quisque suscipit fermentum netus nulla cras porttitor euismod nulla. Orci, dictumst nec aliquet id ullamcorper venenatis. </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingfour">
            <button class="accordion-button collapsed pl-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefour" aria-expanded="false" aria-controls="flush-collapseThree">
              Fames imperdiet quam fermentum?
            </button>
          </h2>
          <div id="flush-collapsefour" class="accordion-collapse collapse" aria-labelledby="flush-headingfour" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Nibh quisque suscipit fermentum netus nulla cras porttitor euismod nulla. Orci, dictumst nec aliquet id ullamcorper venenatis. </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingfive">
            <button class="accordion-button collapsed pl-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsefive" aria-expanded="false" aria-controls="flush-collapseThree">
              Varius vitae, convallis amet lacus sit aliquet nibh?
            </button>
          </h2>
          <div id="flush-collapsefive" class="accordion-collapse collapse" aria-labelledby="flush-headingfive" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Nibh quisque suscipit fermentum netus nulla cras porttitor euismod nulla. Orci, dictumst nec aliquet id ullamcorper venenatis. </div>
          </div>
        </div>
        <div class="accordion-item">
          <h2 class="accordion-header" id="flush-headingsix">
            <button class="accordion-button collapsed pl-0" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapsesix" aria-expanded="false" aria-controls="flush-collapseThree">
              Varius vitae, convallis amet lacus sit aliquet nibh?
            </button>
          </h2>
          <div id="flush-collapsesix" class="accordion-collapse collapse" aria-labelledby="flush-headingsix" data-bs-parent="#accordionFlushExample">
            <div class="accordion-body">Nibh quisque suscipit fermentum netus nulla cras porttitor euismod nulla. Orci, dictumst nec aliquet id ullamcorper venenatis. </div>
          </div>
        </div>

      </div>
    </div>
  </section>

  @include('layouts.footer')

<div id="myModal" class="modal fade">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="title">
              We Use Cookies
          </div>
          <div class="text1">
              We use Cookies to make our website functional. If you consent we will also use cookies to analyze the use our website and provide user relevant marketing content. For more information please read our <a href="">Cookie Policy</a> .
          </div>
          <div class="btnn">
            <button class="btn btn1" type="submit">Accept all</button>
            <button class="btn btn2" type="submit">Accept selected</button>

          </div>
      </div>

  </div>
</div>

@endsection


