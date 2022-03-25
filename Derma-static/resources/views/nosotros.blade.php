

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="./static/favicon.ico">
    <title>
    Dr. H. Amed Jaidar Monter
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
                        <h2 class="text-white">Nosotros</h2>     
                        <button type="button" class="btn btn-ga-primary my-2" data-bs-toggle="modal" data-bs-target="#carrousel_modal0">
                          Nuestra historia
                        </button>
                        
                        
                    </div>
            </div>
            
            <div class="modal fade" id="carrousel_modal0" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Nuestra historia</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div>
                        <img class="w-100" src="{{url('media/_about-leftimg.jpg')}}" alt="">
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
                    <a href='../contacto/'><button type="button" class="btn btn-ga-primary">Contáctanos</button></a>
                    <a target="_blank" href="https://wa.me/524422725661">
                      <button type="button" class="btn bg-whats text-white my-2"><i class="fab fa-whatsapp"></i> Envia un mensaje</button>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            
        
    </div>
    
  </div>
    
  <!--div class="container my-5" id="acerca-de">
            <div class="row">
                <div class="col-12">
                    <div class="card mb-3 ser-2-izq text-white shadow-lg rounded">
                        <div class="row g-0">
                          <div class="col-md-4 d-flex align-items-center border-end">
                            <img class="w-100 p-2 rounded" src="{{url('media/about-leftimg.jpeg')}}" alt="Doctor">
                          </div>
                          <div class="col-md-8">
                            <div class="card-body">
                            <div class="card-title text-center border-bottom mt-1 mb-4"><h2>Dr. H. Amed Jaidar Monter</h2>
                            <h3>Dermatólogo</h3></div>
                            <ul class="timeline">
                                <li>
                                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url('img/mv-1.png')}}" alt="..." /></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4>Estudios:</h4>
                                        </div>
                                        <div class="timeline-body"><p class="text-muted">
                                        Centro Dermatológico Dr. Ladislao de la Pascua
                                        </p></div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url('img/mv-2.png')}}" alt="..." /></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4>Cirugía Dermatológica Pediátrica</h4>
                                        </div>
                                        <div class="timeline-body"><p class="text-muted">
                                        Hospital Infantil Privado  </p></div>
                                    </div>
                                </li>
                                <li>
                                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url('img/mv-1.png')}}" alt="..." /></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4>Maestría en Ciencias</h4>
                                        </div>
                                        <div class="timeline-body"><p class="text-muted">
                                           Instituto Politécnico Nacional 
                                        </p></div>
                                    </div>
                                </li>
                                <li class="timeline-inverted">
                                    <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url('img/mv-2.png')}}" alt="..." /></div>
                                    <div class="timeline-panel">
                                        <div class="timeline-heading">
                                            <h4>Recertificado por</h4>
                                        </div>
                                        <div class="timeline-body"><p class="text-muted">
                                        el consejo mexicano de Dermatología  </p></div>
                                    </div>
                                </li>
                            </ul>
                            </div>
                          </div>
                        </div>
                      </div>
                </div>
            </div>
        </div-->
    
<section>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-4 col-12">
                <img class="w-100 p-2 rounded" src="{{url('media/about-leftimg.jpeg')}}" alt="Doctor">
            </div>
            <div class="col-lg-8 col-12">
                <div class="text-center">
        
                <h2 class="">Dr. H. Amed Jaidar Monter</h2>
                <h3 class="text-muted mb-5">Dermatólogo</h3>
            </div>
    <section class="page-section" id="team">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{url('media/endors1.png')}}" alt="..." />
                    <p class="text-muted mt-2">Egresado del</p>
                </div>
                <div class="team-description mx-5">
                    <p>Centro Dermatológico Dr. Ladislao de la Pascua.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{url('media/endors4.png')}}" alt="..." />
                    <p class="text-muted mt-2">Cirugía Dermatológica Pediátrica</p>
                </div>
                <div class="team-description mx-5">
                    <p>Hospital Infantil Privado.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{url('media/endors1.png')}}" alt="..." />
                    <p class="text-muted mt-2">Maestría en Ciencias</p>
                </div>
                <div class="team-description mx-5">
                    <p>Instituto Politécnico Nacional.</p>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{url('media/endors3.png')}}" alt="..." />
                    <p class="text-muted mt-2">Recertificado por</p>
                </div>
                <div class="team-description mx-5">
                    <p>el consejo mexicano de Dermatología.</p>
                </div>
            </div>
        </div>
    </div>
</section>
    <!--ul class="timeline">
                            <li>
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url('media/endors1.png')}}" alt="..." /></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Egresado del</h4>
                                    </div>
                                    <div class="timeline-body"><p class="text-muted">
                                    Centro Dermatológico Dr. Ladislao de la Pascua
                                    </p></div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url('media/endors4.png')}}" alt="..." /></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Cirugía Dermatológica Pediátrica</h4>
                                    </div>
                                    <div class="timeline-body"><p class="text-muted">
                                    Hospital Infantil Privado  </p></div>
                                </div>
                            </li>
                            <li>
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url('media/endors1.png')}}" alt="..." /></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Maestría en Ciencias</h4>
                                    </div>
                                    <div class="timeline-body"><p class="text-muted">
                                       Instituto Politécnico Nacional 
                                    </p></div>
                                </div>
                            </li>
                            <li class="timeline-inverted">
                                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{url('media/endors3.png')}}" alt="..." /></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>Recertificado por</h4>
                                    </div>
                                    <div class="timeline-body"><p class="text-muted">
                                    el consejo mexicano de Dermatología  </p></div>
                                </div>
                            </li>
                        </ul-->  
            </div>
        </div>
    </div>
</section>

    
<div class="ser-2-izq">
    
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

</body>
</html>