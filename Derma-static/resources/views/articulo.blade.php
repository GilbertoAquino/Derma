<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{url('favicon.ico')}}">
    <title>
    Dermatología - {{$sub->Titulo}}
    </title>
    @include("templates/styles")
</head>
<body>

@include("templates/header")
        
<div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      
    </div>
    <div class="carousel-inner">
        
            <div class="carousel-item  active ">
                
            <img id="crs_img" class="img-responsive img-circle w-100" src="{{url('media/derma.png')}}" alt="">
                
            <div class="carousel-caption text-dark text-center">
              <div class="">
                <img style="background:rgba(255,255,255,0.5)" src="{{url('media/logo-60h.png')}}"  class="w-25" alt="">
              </div>
              <h2 class="text-white">{{$sub->Titulo}}</h2>     
            </div>
    </div>    
</div>
<article class="">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-12 text-center my-5">
                        <div class="article-link">
                            {!!$sub->Articulo!!}
                        </div>
                    </div>
                </div>
            </div>
        </article>

@include('templates/footer')    
@include('templates/floatbuttons')

    <div class="container-fluid bg-black">
        <div class="row">
            <div class="col-12 text-center">
                <p class="text-light footer-txt">Todos los derechos reservados | Desarrollada por NotHere Studios</p>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/lightslider.js') }}"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script>
      $(document).ready(function() {
        $("#{{$modal ?? ''}}").modal("show");
        $('html, body').animate({
        scrollTop: $("#{{$modal ?? ''}}1").offset().top
        }, 500);
      });
    </script>
</body>
</html>