@extends('layouts.masterStore')

@include('layouts.nav')
@include('layouts.sidebar')


@section('content')
<section class="section1">
  <div class="container-fuild">
      <div class="row m-0">
          
        @yield('sidebar')

          <div class="col-md-6">
            1
          </div>

          <div class="col-md-4">
              <div class="container">
                  <div class="back mt-3">
                      <i class="bi bi-arrow-left-short"></i>
                  </div>

                  <div class="storedetail mt-3">
                      <div class="strimage mx-auto d-block">
                          <img src="images/store.png" class="rounded " alt="...">
                      </div>
                      <div class="title text-center mt-3">
                          Store name
                      </div>
                      <div class="rateimg mx-auto d-block">
                          <img src="images/Stars.png" class="rounded " alt="...">
                          <span>123</span>
                      </div>

                      <div class="dis text-center">
                          West street, 112/9 (9km)
                      </div>

                      <div class="catg mx-auto d-block mt-4">
                          <div class="img">
                              <img src="images/firstaid.png" alt="">
                          
                              <span class="">Pharmacy</span>
                          </div>
                      </div>
                  </div>

                  <hr class="new1">
                  <div class="container">
                      <div class="time">
                          <table class="table table-borderless ">
                              <tbody>
                                <tr>
                                  <td>Working hours</td>
                                  <td>Mon</th>
                                  <td>11:00 - 19:00</td>
                                </tr>
                                <tr>
                                  <th>Opened now</th>
                                  <td>Tue</td>
                                  <td>11:00 - 19:00</td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>Mon</td>
                                  <td>11:00 - 19:00</td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>Wed</td>
                                  <td>11:00 - 19:00</td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>Thr</td>
                                  <td>11:00 - 19:00</td>
                                </tr>
                                <tr>
                                  <td></td>
                                  <td>Fri</td>
                                  <td>11:00 - 19:00</td>
                                </tr>

                                <tr>
                                  <td></th>
                                  <td>Sat-Sun</td>
                                  <td>Closed</td>
                                </tr>

                                
                              </tbody>
                            </table>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  
</section>
@endsection