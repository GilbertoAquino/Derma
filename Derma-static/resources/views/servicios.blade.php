

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{url('favicon.ico')}}">
    <title>
    Dermatología - Servicios
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
                        <h2 class="text-white">Nuestros servicios</h2>     
                    </div>
        
    </div>
    
  </div>
    

    
    
<div id="servicios">
        <section id="scroll" class="ser-2-der">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-4 img-service-ga">
                            <a href="servicios/consulta" class="s_class_txt">
                            <img class="img-fluid rounded-circle holamundo" id="consulta1" src="{{url('media/ss1-3.jpg')}}" alt="..." />
                            <button class="btn btn-ga-primary img-service-ga-btn">¡Conoce más!</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-4">
                            <a href="servicios/consulta" class="s_class_txt">
                            <h2 class="display-4">Consulta dermatológica</h2>
                            </a>
                            <hr>
                            <ul>
                                <li>- Dermatología médica</li>
                                <li>- Dermatología pediátrica</li>
                                <li>- Dermatología quirúrgica</li>
                                <li>- Dermatología láserx </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <div class="modal fade" id="consulta" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Consulta dermatológica</h5>
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
                    <div class="p-4 img-service-ga">
                        <a href="servicios/cirugiadermatologica" class="s_class_txt">
                        
                        <img class="img-fluid rounded-circle holamundo" id="cirugiadermatologica1" src="{{url('media/ss1-1.jpg')}}" alt="..." />
                        
                        <button class="btn btn-ga-primary img-service-ga-btn">¡Conoce más!</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4">
                        <a href="servicios/cirugiadermatologica" class="s_class_txt_white">
                        <h2 class="display-4">Cirugía dermatológica</h2>
                        </a>
                        <hr class="text-white">
                        <ul class="text-white">
                          <li>- Dermatología médica</li>
                          <li>- Dermatología pediátrica</li>
                          <li>- Dermatología quirúrgica</li>
                          <li>- Dermatología láserx </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="modal fade" id="cirugiadermatologica" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Cirugía dermatológica</h5>
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
                        <div class="p-4 img-service-ga">
                            <a href="servicios/laser" class="s_class_txt">
                            <img class="img-fluid rounded-circle holamundo" id="laser1" src="{{url('media/ss1-2.jpg')}}" alt="..." />
                            <button class="btn btn-ga-primary img-service-ga-btn">¡Conoce más!</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-4">
                            <a href="servicios/laser" class="s_class_txt">
                            <h2 class="display-4">Clínica Láser</h2>
                            </a>
                            <hr>
                            <ul>
                                <li>- Láser CO2 fraccionado y ultrapulsado</li>
                                <li>- Láser 360</li>
                                <li>- Eliminación de tatuajes con láser o Nd-yag Qswitched</li>
                                <li>- SOPRANO </li>
                                <li>- Radiofrecuencia Facial y Corporal (accent prime) </li>
                                <li>- Ultrasonido focalizado Ultracel Q </li>
                                <li>- Luz pulsada intensa Stellar M22 </li>
                                <li>- Tecnología de pulso optimo (OPT) </li>
                                <li>- Resurfacing con láser no ablativo Erbium Glass </li>
                                <li>- Hollywood Peel </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <div class="modal fade" id="laser" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Clínica Láser</h5>
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
                    <div class="p-4 img-service-ga">
                        <a href="servicios/pediatrica" class="s_class_txt">
                        
                        <img class="img-fluid rounded-circle holamundo" id="pediatrica1" src="{{url('media/ss3-1.jpg')}}" alt="..." />
                        
                        <button class="btn btn-ga-primary img-service-ga-btn">¡Conoce más!</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4">
                        <a href="servicios/pediatrica" class="s_class_txt_white">
                        <h2 class="display-4">Dermatología pediátrica</h2>
                        </a>
                        <hr class="text-white">
                        <ul class="text-white">
                          <li>Dermatología en:</li>
                          <li>- lactantes</li>
                          <li>- preescolares</li>
                          <li>- escolares </li>
                          <li>- adolecentes </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="modal fade" id="pediatrica" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Dermatología pediátrica</h5>
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
                        <div class="p-4 img-service-ga">
                            <a href="servicios/cosmetica" class="s_class_txt">
                            <img class="img-fluid rounded-circle holamundo" id="cosmetica1" src="{{url('media/ss3-2.jpg')}}" alt="..." />
                            <button class="btn btn-ga-primary img-service-ga-btn">¡Conoce más!</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-4">
                            <a href="servicios/cosmetica" class="s_class_txt">
                            <h2 class="display-4">Dermatología cosmética</h2>
                            </a>
                            <hr>
                            <ul>
                                <li>- Botox (toxina botulínica)</li>
                                <li>- Rellenos faciales (ácido hialurónico) / Hidroxiapatita </li>
                                <li>- Cálcica / Policaprolactona</li>
                                <li>- Hydrafacial </li>
                                <li>- Microdermoabrasión </li>
                                <li>- Hilos tensores (sustentación) </li>
                                <li>- Nanopore (micropunción eléctrica) </li>
                                <li>- Radiofrecuencia facial y corporal </li>
                                <li>- Peelings </li>
                                <li>- Limpiezas faciales profundas  </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <div class="modal fade" id="cosmetica" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Dermatología cosmética</h5>
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
                    <div class="p-4 img-service-ga">
                        <a href="servicios/tratamientos" class="s_class_txt">
                        
                        <img class="img-fluid rounded-circle holamundo" id="tratamientos1" src="{{url('media/ss5-1.jpg')}}" alt="..." />
                        
                        <button class="btn btn-ga-primary img-service-ga-btn">¡Conoce más!</button>
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="p-4">
                        <a href="servicios/tratamientos" class="s_class_txt_white">
                        <h2 class="display-4">Tratamientos corporales</h2>
                        </a>
                        <hr class="text-white">
                        <ul class="text-white">
                          <li>- Criolipólisis</li>
                          <li>- Mesoterapia</li>
                          <li>- Radiofrecuencia y ultrasonido corporal (accent prime)</li>
                          <li>- Cmslim (Entrenador muscular de alta intensidad) </li>
                          <li>- Tratamientos con enzimas PB SERUM </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <div class="modal fade" id="tratamientos" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Tratamientos corporales</h5>
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
                        <div class="p-4 img-service-ga">
                            <a href="servicios/farmacia" class="s_class_txt">
                            <img class="img-fluid rounded-circle holamundo" id="farmacia1" src="{{url('media/ss5.jpg')}}" alt="..." />
                            <button class="btn btn-ga-primary img-service-ga-btn">¡Conoce más!</button>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-4">
                            <a href="servicios/farmacia" class="s_class_txt">
                            <h2 class="display-4">Farmacia dermatológica</h2>
                            </a>
                            <hr>
                            <ul>
                                <li>- Skin ceuticals</li>
                                <li>- Filorga </li>
                                <li>- Hdmedical </li>
                                <li>- Pb serum </li>
                                <li>- Leorex </li>
                                <li>- SVR dermatología </li>
                                <li>- Tizo  </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    
    <div class="modal fade" id="farmacia" tabindex="-1" aria-labelledby="SModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="SModalLabel">Farmacia dermatológica</h5>
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