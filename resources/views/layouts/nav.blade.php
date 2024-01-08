

@section('dnav')

<header>  
      
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
        <!-- <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button> -->
        <!-- <div class="collapse navbar-collapse pl-3" id="navbarTogglerDemo01"> -->
          <a class="navbar-brand" href="#"> <img
            src="images/logo.png"
            alt="MDB Logo"
            loading="lazy"
            />
          </a>
          <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
            <li>
               <img src="images/search.png" alt="" style="width: 15px; margin-top: 10px;">
            </li>
            <li>
                <input
                autocomplete="off"
                type="search"
                class="form-control rounded"
                placeholder="Search now"
                size="50"
              >
            </li>
            <li>
              <button class="btn   my-sm-0 ml-2" type="submit">Enter</button>

            </li>
          </ul>



          <div class="form-inline my-2 my-lg-0">
            <div class="bell bg-light rounded-circle mr-3">
              <img src="images/bell.png" class="rounded-circle" alt="Avatar" />
            </div>

            <div class="avatr">
              <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle" alt="Avatar" />
            </div>

            <div class="holder mr-3">
              <div class="dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 {{auth()->user()->first_name}} {{auth()->user()->second_name}}
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <a class="dropdown-item" href="#">Action</a>
                  <a class="dropdown-item" href="#">Another action</a>
                  <a class="dropdown-item" href="{{route('logout')}}">logout</a>
                </div>
              </div>
            </div>
          </div>


        <!-- </div> -->
      </nav>

   
</header>
@endsection

