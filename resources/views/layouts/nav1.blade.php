
@section('nav')
<header>
    <nav class="navbar navbar-light  fixed-top" style="background-color: #fff">
      <div class="container">
      <a class="navbar-brand" href="#"><img class="logo" src="images/logo.png"></a>
      <form class="justify-content-end" >
        <a class="btn btn2" href="{{route('login')}}" role="button">Login</a>
        <a class="btn " href="{{route('register')}}" role="button">Sign up</a>

    </form>
      </div>

      </nav>
</header>
@endsection