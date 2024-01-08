@extends('layouts.masterTransaction')

@include('layouts.nav')

@include('layouts.sidebar')

@section('content')
<section class="section1">
  <div class="container-fuild">
      <div class="row m-0">
          @yield('sidebar')


          <div class="col-md-10 mt-5">
              <h3 class="mt-5">Transactions</h3>
              <table class="table table-striped table-borderless mt-4 " >
                  <thead>
                    <tr>
                      <th scope="col"></th>
                      <th scope="col">Product</th>
                      <th scope="col">Sender</th>
                      <th scope="col">Date</th>
                      <th scope="col">Status</th>
                      <th scope="col">Amount</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>
                          <div class="image">
                              <img src="images/timages.png" alt="" >
                          </div>
                      </td>
                      <td class="aliign-center">
                          Education platform business name
                      </td> 
                      <td class="sender" style="align-items: center;">Mark Smith</td>  
                      <td class="date">21 Sep 2018</td>
                      <td>
                          <div class="status complt">
                              <span href="#">Completed</span>
                          </div>
                      </td>
                      <td class="amount complt">+1500 DH</td>
                    </tr>

                    <tr>
                      <td>
                          <div class="image">
                              <img src="images/timg2.png" alt="" >
                          </div>
                      </td>
                      <td class="aliign-center">
                          Education platform business name
                      </td> 
                      <td class="sender" style="align-items: center;">Mark Smith</td>  
                      <td class="date">21 Sep 2018</td>
                      <td>
                          <div class="status cancel">
                              <span href="#">Cancelled</span>
                          </div>
                      </td>
                      <td class="amount cancel">+1500 DH</td>
                    </tr>

                    <tr>
                      <td>
                          <div class="image">
                              <img src="images/tiamge2.png" alt="" >
                          </div>
                      </td>
                      <td class="aliign-center">
                          Education platform business name
                      </td> 
                      <td class="sender" style="align-items: center;">Mark Smith</td>  
                      <td class="date">21 Sep 2018</td>
                      <td>
                          <div class="status panding">
                              <span href="#">Pending</span>
                          </div>
                      </td>
                      <td class="amount panding">+1500 DH</td>
                    </tr>

                    
                  </tbody>
                </table>
          </div>
      </div>
  </div>
  
</section>
@endsection