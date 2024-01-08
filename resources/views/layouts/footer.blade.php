
@section('footer')
  <footer class="text-center text-lg-start bg-light text-muted">
    <!-- Section: Social media -->
    <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom container">
      <!-- Left -->
      <div class="me-5 d-none d-lg-block brand">
        <span><img class="logo" src="{{asset('images/logo.png')}}"></span>
      </div>
      <!-- Left -->

      <!-- Right -->
      <div class="icon">
        <a href="" class="me-4 text-reset">
          <i class="bi bi-youtube"></i>
        </a>
        <a href="" class="me-4 text-reset">
          <i class="bi bi-tiktok"></i>
        </a>
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
      <!-- Right -->
    </section>
    <!-- Section: Social media -->

    <!-- Section: Links  -->
    <section class="">
      <div class="container text-center text-md-start mt-5">
        <!-- Grid row -->
        <div class="row mt-3">
          <!-- Grid column -->
          <div class="col-md-4">
            <!-- Content -->
            <div class="titleimg2">
              <img src="{{asset('images/appstore.png')}}">
            <img src="{{asset('images/googleplay.png')}}">
            </div>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-4">
            <!-- Links -->
            <div class="copy">
              © Copyright 2022, All Rights Reserved
            </div>
          </div>
          <!-- Grid column -->
          <!-- Grid column -->
          <div class="col-md-4">
            <!-- Links -->
          <div class="tag">
            <a href="{{route('contact')}}">Contact</a>
          <a href="{{route('faq')}}">FAQ</a>
          <a href="{{route('term')}}">Term & Conditions</a>
          </div>

          </div>
          <!-- Grid column -->

        </div>
        <!-- Grid row -->
      </div>
    </section>
    <!-- Section: Links  -->
  </footer>
@endsection