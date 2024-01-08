<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fweeq</title>
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

  <style>
    @font-face {
    font-family: lexend-bold;
    src: url(static/Lexend-Bold.ttf);
  }
  @font-face {
    font-family: lexend-regular;
    src: url(static/Lexend-Regular.ttf);
  }
  @font-face {
    font-family: lexend-medium;
    src: url(../static/Lexend-Medium.ttf);
  }
  @font-face {
    font-family: lexend-light;
    src: url(static/Lexend-Light.ttf);
  }
  @font-face {
    font-family: lexend-semibold;
    src: url(../static/Lexend-SemiBold.ttf);
  }
    .swiper {
      margin-top: 50px;
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      padding-top: 50px;
      padding-left: 40px;
      padding-bottom: 50px;
      font-size: 18px;
      background: #fff;

      border-radius: 15px;

    }
    .swiper-slide .sliderinner{
      display: flex;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
    .swiper-slide .text1 .distext{
      margin-top: 10px;
      font-family: lexend-regular;

      font-size: 12px;
      color: #737373;
    }
    .swiper-slide .text1{
      font-family: lexend-regular;
      font-size: 16px;
      padding-left: 20px;
    }
    .swiper-slide  .text2{
      font-size: 12px;
      margin-top: 20px;
      font-family: lexend-light;
      padding-right: 10px;
    }
    .swiper-pagination {
      margin-top: 30px;
    position: relative;
    text-align: center;
    transition: .3s opacity;
    transform: translate3d(0,0,0);
    z-index: 10;
}
:root {
    --swiper-theme-color: #fff;
}
.swiper-pagination-bullet {
    width: var(--swiper-pagination-bullet-width,var(--swiper-pagination-bullet-size,8px));
    height: var(--swiper-pagination-bullet-height,var(--swiper-pagination-bullet-size,8px));
    display: inline-block;
    border-radius: 50%;
    background: #fff;

}



.modal-dialog {

    position:fixed;
    top:auto;
    right: 100px;
    left: 100px;
    bottom:0;

 }
 .modal-content{
     padding: 20px;
     background-color: #fff;
     width: 500px;
     height: auto;
     border-radius: 15px;
     border: none;
     display: block;

 }
 .modal-content .title{
     font-weight: bold;
     font-size: 20px;
 }
 .modal-content .text1{
     font-size: 10px;
     margin-top: 10px;
 }
  </style>
</head>

<body>

    
    @yield('content')
    @yield('footer')



    <script>
        $(document).ready(function(){
            $("#myModal").modal('show');
        });
    </script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!-- Initialize Swiper -->
    <script>
      var swiper = new Swiper(".mySwiper", {
        slidesPerView: 1,
        spaceBetween: 10,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        breakpoints: {
          640: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
        },
      });
    </script>
</body>
</html>
