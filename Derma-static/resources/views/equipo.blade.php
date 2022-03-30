<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{url('favicon.ico')}}">
    <title>
    Dermatología - Padecimientos
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
                    <h2 class="text-white">Padecimientos</h2>     
                </div>
            </div>
        </div>
    </div>
<div class="container-fluid text-white ser-2-izq">
    <div class="row">
      <div class="col-12 text-center mt-5">
          <h2 class="">Padecimientos</h2>
          <h3 class="mb-5">Dermatitis atópica</h3>
      </div>
    </div>
    <div class="row">
        <div class="col-12">
            <section class="page-section" id="team">
                <div class="container-fluid">
                    <div class="row d-flex justify-content-evenly">
                        @foreach ($services as $ser)
                        @if (!$ser->main_pad)
                        <div class="col-lg-3" id="{{$ser->url}}1">
                            <div class="team-member">
                                <a href="padecimientos/{{$ser->url}}" class="s_class_txt_white">    
                                    <div class="chidos">
                                        <img class="mx-auto rounded-circle" src="{{url(''.$ser->Imagen)}}" alt="..." />
                                    </div>
                                    <p class="mt-2">{{$ser->Titulo}}</p>
                                </a>
                            </div>
                        </div>
                        @endif
                        @endforeach
                    </div>
                </div>
            </section>
        </div>
    </div>
</div>

  <div id="Padecimientos">
    @foreach ($services as $ser)
    @if ($ser->main_pad)
    @if ($loop->index % 2 != 0)
      <section class="ser-2-izq">
        <div class="container-fluid-1">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="img-service-ga">
                        <a href="padecimientos/{{$ser->url}}" class="s_class_txt">
                        
                        <img class="img-fluid holamundo" id="{{$ser->url}}1" src="{{url(''.$ser->Imagen)}}" alt="..." />
                        
                        <button class="btn btn-ga-primary img-service-ga-btn">¡Conoce más!</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4">
                        <a href="padecimientos/{{$ser->url}}" class="s_class_txt_white">
                        <h2 class="">{{$ser->Titulo}}</h2>
                        </a>
                        <hr class="text-white">
                        <ul class="text-white">
                          @foreach ($subservices as $sub)
                            @if ($sub->pad_id == $ser->id)
                              <a href="padecimientos/{{$sub->url}}" class="s_class_txt_white"><li>- {{$sub->Titulo}}</li></a>
                            @endif
                          @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @else
      <section id="scroll" class="ser-2-der">
            <div class="container-fluid-1">
                <div class="row gx-5 align-items-between">
                    <div class="col-lg-6 order-lg-2">
                        <div class=" img-service-ga">
                            <a href="padecimientos/{{$ser->url}}" class="s_class_txt">
                            <img class="img-fluid holamundo" id="{{$ser->url}}1" src="{{url(''.$ser->Imagen)}}" alt="..." />
                            <button class="btn btn-ga-primary img-service-ga-btn">¡Conoce más!</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1 d-flex align-item-center">
                        <div class="p-4 m-auto">
                            <a href="padecimientos/{{$ser->url}}" class="s_class_txt">
                            <h2 class="">{{$ser->Titulo}}</h2>
                            </a>
                            <hr>
                            <ul class="text-white">
                          @foreach ($subservices as $sub)
                            @if ($sub->pad_id == $ser->id)
                              <a href="padecimientos/{{$sub->url}}" class="s_class_txt"><li>- {{$sub->Titulo}}</li></a>
                            @endif
                          @endforeach
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    @endif
  @endif
  <div class="modal fade" id="{{$ser->url}}" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">{{$ser->Titulo}}</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <div class="">{!!$ser->modal!!}</div>
              <p>Cónoce los padecimientos:</p>
              @foreach ($subservices as $sub)
                @if ($sub->pad_id == $ser->id)
                  <a href="padecimientos/{{$sub->url}}" class="s_class_txt"><p>- {{$sub->Titulo}}</p></a>
                @endif
              @endforeach
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
              <a href='contacto/'><button type="button" class="btn btn-ga-primary">¡Contáctanos!</button></a>
              <a target="_blank" href="https://wa.me/524422725661">
                <button type="button" class="btn bg-whats text-white my-2"><i class="fab fa-whatsapp"></i> Envia un mensaje</button>
              </a>
            </div>
          </div>
        </div>
    </div>
  @endforeach
</div>
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