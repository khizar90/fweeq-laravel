

@section('sidebar')
<div class="col-md-2">
    <div class="sidebar" >
      <div class="sidecontent mt-5">
        <div class="sideitem mb-3 active">
            <a href="{{route('dashboard')}}">
              <i class="bi bi-grid"></i>
              <span>Dashboard</span>
            </a>
        </div>
        <div class="sideitem mb-3">
            <a href="{{route('transaction')}}">
              <i class="bi bi-arrow-left-right"></i>
              <span>Transactions</span>
            </a>
        </div>
        <div class="sideitem">
          <a href="{{route('setting')}}">
            <i class="bi bi-gear"></i>
            <span>Settings</span>
          </a>
        </div>
    </div>
    <div class="footer">
         <div class="title text-center">
            Share my ID via
         </div>
         <div class="images text-center" >
          <img src="images/WhatsApp.png" alt="" width="30px">
          <img src="images/Twitter.png" alt="" width="30px">
          <img src="images/Messenger.png" alt="" width="30px">

         </div>
    </div>
    </div>
</div>
@endsection