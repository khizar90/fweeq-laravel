@section('slider')
<div class="col-md-5">
    <div class="container">
      <div class="brand">
        <img src="{{asset('images/logo2.png')}}" alt="treds">
      </div>
   
      <div class="swiper mySwiper">
          <div class="swiper-wrapper">
             <div class="swiper-slide p-0">
              <div class="sliderinner">
                <img src="{{asset('images/slider2.png')}}" style="width: 70%; margin: auto;">
              </div>
              <div class="text">
                <div class="wel">
                  Welcome to
                </div>
                <div class="title">
                  <img src="{{asset('images/FWEEQ.png')}}" alt="" style="">
                </div>
                <div class="dis">
                  Best platform for transfering money.Join For Free.
                </div>
              </div>
            </div>
            <div class="swiper-slide p-0">
              <div class="sliderinner">
                <div class="image">
                <img src="{{asset('images/scan.png')}}" style="width: 50%; margin: auto;">
                </div>
              </div>
              <div class="text">
                <div class="wel">
                  Welcome to
                </div>
                <div class="title">
                  <img src="{{asset('images/FWEEQ.png')}}" alt="" style="width: 30%;">
                </div>
                <div class="dis">
                  Best platform for transfering money.Join For Free.
                </div>
              </div>
            </div>
            <div class="swiper-slide p-0">
              <div class="sliderinner">
                <img src="{{asset('images/scan2.png')}}" style="width: 50%; margin: auto;">
              </div>
              <div class="text">
                <div class="wel">
                  Welcome to
                </div>
                <div class="title">
                  <img src="{{asset('images/FWEEQ.png')}}" alt="" style="">
                </div>
                <div class="dis">
                  Best platform for transfering money.Join For Free.
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
   </div>
  </div>
@endsection