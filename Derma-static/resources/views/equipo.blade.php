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

  <div class="container">
    <div class="row">
      <div class="col-12 text-center mt-5">
          <h2 class="">Padecimientos</h2>
          <h3 class="text-muted mb-5">Dermatitis atópica</h3>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
      <section class="page-section" id="team">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3" id="acne1">
            <div class="team-member">
                  <a href="padecimientos/acne" class="s_class_txt">    
                  <div class="chidos">
                    <img class="mx-auto rounded-circle" src="{{url('media/13.png')}}" alt="..." />
                  </div>
                    <p class="mt-2">Acné</p>
                  </a>
                </div>
            </div>
            <div class="col-lg-3" id="melasma1">
            <div class="team-member">
                  <a href="padecimientos/melasma" class="s_class_txt">    
                  <div class="chidos">
                    <img class="mx-auto rounded-circle" src="{{url('media/14.png')}}" alt="..." />
                  </div>
                    <p class="mt-2">Melasma<br>(paño o manchas en la cara)</p>
                  </a>
                </div>
            </div>
            <div class="col-lg-3" id="psoriasis1">
            <div class="team-member">
                  <a href="padecimientos/psoriasis" class="s_class_txt">    
                  <div class="chidos">
                    <img class="mx-auto rounded-circle" src="{{url('media/15.png')}}" alt="..." />
                  </div>
                    <p class="mt-2">Psoriasis</p>
                  </a>
                </div>
            </div>
            <div class="col-lg-3" id="vitiligo1">
              <div class="team-member">
                  <a href="padecimientos/vitiligo" class="s_class_txt">    
                  <div class="chidos">
                    <img class="mx-auto rounded-circle" src="{{url('media/16.png')}}" alt="..." />
                  </div>
                    <p class="mt-2">Vitíligo</p>
                  </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6" id="cicatrices1">
                <div class="team-member">
                    <a href="padecimientos/cicatrices" class="s_class_txt"> 
                    <div class="chidos">
                      <img class="mx-auto rounded-circle" src="{{url('media/18.png')}}" alt="..." />
                    </div>
                    <p class="mt-2">Cicatrices <br> (queloides,postacné)</p>
                    </a>
                </div>
            </div>
            <div class="col-lg-6" id="dermacontacto1">
                <div class="team-member">
                  <a href="padecimientos/dermacontacto" class="s_class_txt">    
                  <div class="chidos">
                    <img class="mx-auto rounded-circle" src="{{url('media/17.png')}}" alt="..." />
                  </div>
                    <p class="mt-2">Dermatitis de contacto</p>
                  </a>
                </div>
            </div>
        </div>
    </div>
</section>
      </div>
    </div>
  </div>

  <div id="Padecimientos">
        <section id="scroll" class="ser-2-der">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class=" img-service-ga">
                            <a href="padecimientos/micologia" class="s_class_txt">
                            <img class="img-fluid holamundo" id="micologia1" src="{{url('media/pp4-1.jpg')}}" alt="..." />
                            <button class="btn btn-ga-primary img-service-ga-btn">¡Conoce más!</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-4">
                            <a href="padecimientos/micologia" class="s_class_txt">
                            <h2 class="">Micología cutánea</h2>
                            </a>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <div class="modal fade" id="micologia" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Micología cutánea</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Escribe un texto...</p>
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
      <section class="ser-2-izq">
        <div class="container px-5 ">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="img-service-ga">
                        <a href="padecimientos/pielpeloyunas" class="s_class_txt">
                        
                        <img class="img-fluid holamundo" id="pielpeloyunas1" src="{{url('media/pp4.jpg')}}" alt="..." />
                        
                        <button class="btn btn-ga-primary img-service-ga-btn">¡Conoce más!</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4">
                        <a href="padecimientos/pielpeloyunas" class="s_class_txt_white">
                        <h2 class="">Enfermedades de la piel, pelo y uñas</h2>
                        </a>
                        <hr class="text-white">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="modal fade" id="pielpeloyunas" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Enfermedades de la piel, pelo y uñas</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Escribe un texto...</p>
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
      <section id="scroll" class="ser-2-der">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class=" img-service-ga">
                            <a href="padecimientos/its" class="s_class_txt">
                            <img class="img-fluid holamundo" id="its1" src="{{url('media/pp4-3.jpg')}}" alt="..." />
                            <button class="btn btn-ga-primary img-service-ga-btn">¡Conoce más!</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-4">
                            <a href="padecimientos/its" class="s_class_txt">
                            <h2 class="">Infecciones de transmisión sexual</h2>
                            <h5 class="text-muted">(VPH, atención especializada en pacientes con VIH, Sífilis)</h5>
                            </a>
                            <hr>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <div class="modal fade" id="its" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Infecciones de transmisión sexual</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Escribe un texto...</p>
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
      <section class="ser-2-izq">
        <div class="container px-5 ">
            <div class="row gx-5 align-items-center">
                <div class="col-lg-6">
                    <div class="img-service-ga">
                        <a href="padecimientos/tumoresycancer" class="s_class_txt">
                        
                        <img class="img-fluid holamundo" id="tumoresycancer1" src="{{url('media/pp4-4.jpg')}}" alt="..." />
                        
                        <button class="btn btn-ga-primary img-service-ga-btn">¡Conoce más!</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4">
                        <a href="padecimientos/tumoresycancer" class="s_class_txt_white">
                        <h2 class="">Tumores cutáneos y cáncer de piel</h2>
                        </a>
                        <hr class="text-white">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="modal fade" id="tumoresycancer" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Tumores cutáneos y cáncer de piel</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Escribe un texto...</p>
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
</div>
<div class="modal fade" id="acne" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Acné</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Escribe un texto...</p>
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
<div class="modal fade" id="melasma" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Melasma (paño o manchas en la cara)</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Escribe un texto...</p>
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
<div class="modal fade" id="psoriasis" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Psoriasis</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Escribe un texto...</p>
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
<div class="modal fade" id="vitiligo" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Vitíligo</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Escribe un texto...</p>
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
<div class="modal fade" id="cicatrices" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Cicatrices (queloides,postacné)</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Escribe un texto...</p>
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
<div class="modal fade" id="dermacontacto" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Dermatitis de contacto</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p>Escribe un texto...</p>
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