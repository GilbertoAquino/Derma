

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{url('favicon.ico')}}">
    <title>
    Dermatología C-Q-I
</title>
    @include("templates/styles")
</head>
<body>
    
    
@include("templates/header")

    
<div id="Inicio"></div>
    
        
<div id="myCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="4000">
            <img src="{{ url('img/1.gif') }}" id="crs_img" class="img-responsive img-circle w-100"/>
            <!--video id="crs_img" class="img-responsive img-circle w-100" autoplay loop>
                <source src="{{ url('img/1.mp4') }}" />
            </video-->
            <div class="carousel-caption text-center" >
                <!--div class="p-5 shadow-lg" style="background:rgba(255,255,255,0.5);">
                    <img src="{{url('media/logo-60h.png')}}"  class="w-50" alt="">
                </div-->
                <div class="responsive_margin_crs responsive_text_crs">
                    <h1>Especialistas en tu piel</h1>
                </div>
                <a href="./contacto">
                    <button type="button" class="btn btn-ga-primary responsive_text_crs responsive_margin_crs">
                        ¡Contáctanos!
                    </button>
                </a>
                <a href="https://wa.me/5215527778875">
                    <button type="button" class="btn bg-whats responsive_text_crs responsive_margin_crs text-white">
                        <i class="fab fa-whatsapp responsive_text_crs"></i> Whatsapp 
                    </button>
                </a>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
            <img src="{{ url('img/2.gif') }}" id="crs_img" class="img-responsive img-circle w-100"/>
            <!--video id="crs_img" class="img-responsive img-circle w-100" loop autoplay>
                <source src="{{ url('img/2.mp4') }}" />
            </video-->
            <div class="carousel-caption text-center" >
                <!--div class="p-5 shadow-lg" style="background:rgba(255,255,255,0.5);">
                    <img src="{{url('media/logo-60h.png')}}"  class="w-50" alt="">
                </div-->
                <div class="responsive_margin_crs responsive_text_crs">
                    <h1>Especialistas en tu piel</h1>
                </div>
                <a href="./contacto">
                    <button type="button" class="btn btn-ga-primary responsive_text_crs responsive_margin_crs">
                        ¡Contáctanos!
                    </button>
                </a>
                <a href="https://wa.me/5215527778875">
                    <button type="button" class="btn bg-whats responsive_text_crs responsive_margin_crs text-white">
                        <i class="fab fa-whatsapp responsive_text_crs"></i> Whatsapp 
                    </button>
                </a>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
            <img src="{{ url('img/3.gif') }}" id="crs_img" class="img-responsive img-circle w-100"/>
            <!--video  id="crs_img" class="img-responsive img-circle w-100" loop autoplay>
                <source src="{{ url('img/3.mp4') }}" />
            </video-->
            <div class="carousel-caption text-center" >
                <!--div class="p-5 shadow-lg" style="background:rgba(255,255,255,0.5);">
                    <img src="{{url('media/logo-60h.png')}}"  class="w-50" alt="">
                </div-->
                <div class="responsive_margin_crs responsive_text_crs">
                    <h1>Especialistas en tu piel</h1>
                </div>
                <a href="./contacto">
                    <button type="button" class="btn btn-ga-primary responsive_text_crs responsive_margin_crs">
                        ¡Contáctanos!
                    </button>
                </a>
                <a href="https://wa.me/5215527778875">
                    <button type="button" class="btn bg-whats responsive_text_crs responsive_margin_crs text-white">
                        <i class="fab fa-whatsapp responsive_text_crs"></i> Whatsapp 
                    </button>
                </a>
            </div>
        </div>
        <div class="carousel-item" data-bs-interval="4000">
            <img src="{{ url('img/4.gif') }}" id="crs_img" class="img-responsive img-circle w-100"/>
            <!--video id="crs_img" class="img-responsive img-circle w-100" loop autoplay>
                <source src="{{ url('img/4.mp4') }}" />
            </video-->
            <div class="carousel-caption text-center" >
                <!--div class="p-5 shadow-lg" style="background:rgba(255,255,255,0.5);">
                    <img src="{{url('media/logo-60h.png')}}"  class="w-50" alt="">
                </div-->
                <div class="responsive_margin_crs responsive_text_crs">
                    <h1>Especialistas en tu piel</h1>
                </div>
                <a href="./contacto">
                    <button type="button" class="btn btn-ga-primary responsive_text_crs responsive_margin_crs">
                        ¡Contáctanos!
                    </button>
                </a>
                <a href="https://wa.me/5215527778875">
                    <button type="button" class="btn bg-whats responsive_text_crs responsive_margin_crs text-white">
                        <i class="fab fa-whatsapp responsive_text_crs"></i> Whatsapp 
                    </button>
                </a>
            </div>
        </div>      
    </div>
</div>
    <section class="page-section py-5" id="services">
    <div class="container">
        <div class="text-center mb-5">
            <h1 class="section-heading ">Servicios</h1>
            <h2>{{$hola ?? ''}}</h2>
            <h5 class="section-subheading ">En la clínica contamos con dermatólogos certificados, especialistas en dermatología clínica, quirúrgica y estética</h5>
        </div>
        <div class="row text-center d-flex justify-content-evenly">
            
            <div class="col-md-3">
                <a href="servicios/consulta" class="s_class_txt"><span class="mt-4 fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x float-s"></i>
                    <i class="fas fa-diagnoses fa-stack-1x my-float-s fa-inverse"></i>
                </span>
                <h5 class="my-3 ">Consulta dermatológica</h5></a>
            </div>
            
            <div class="col-md-3">
                <a href="servicios/Publicacionyentrevistas" class="s_class_txt"><span class="mt-4 fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x float-s"></i>
                    <i class="fas fas fa-clinic-medical fa-stack-1x my-float-s fa-inverse"></i>
                </span>
                <h5 class="my-3 ">Cirugía dermatológica</h5></a>
            </div>
            
            <div class="col-md-3">
                <a href="servicios/Investigaciones" class="s_class_txt"><span class="mt-4 fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x float-s"></i>
                    <i class="fas fa-laptop-medical fa-stack-1x my-float-s fa-inverse"></i>
                </span>
                <h5 class="my-3 ">Clínica Láser</h5></a>
            </div>
            
            <div class="col-md-3">
                <a href="servicios/Confiabilidad" class="s_class_txt"><span class="mt-4 fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x float-s"></i>
                    <i class="fas fa-stethoscope fa-stack-1x my-float-s fa-inverse"></i>
                </span>
                <h5 class="my-3 ">Dermatología pediátrica</h5></a>
            </div>
            
            <div class="col-md-3">
                <a href="servicios/PDA" class="s_class_txt"><span class="mt-4 fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x float-s"></i>
                    <i class="fas fa-medkit fa-stack-1x my-float-s fa-inverse"></i>
                </span>
                <h5 class="my-3 ">Dermatología cosmética</h5></a>
            </div>
            
            <div class="col-md-3">
                <a href="servicios/ExamenMedico" class="s_class_txt"><span class="mt-4 fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x float-s"></i>
                    <i class="fas fa-child fa-stack-1x my-float-s fa-inverse"></i>
                </span>
                <h5 class="my-3 ">Tratamientos corporales</h5></a>
            </div>
            
            <div class="col-md-3">
                <a href="servicios/IntegracionEquipos" class="s_class_txt"><span class="mt-4 fa-stack fa-4x">
                    <i class="fas fa-circle fa-stack-2x float-s"></i>
                    <i class="fas fa-pills fa-stack-1x my-float-s fa-inverse"></i>
                </span>
                <h5 class="my-3 ">Farmacia dermatológica</h5></a>
            </div>
            
        </div>
    </div>
</section>
    <!--section class="features-icons text-center">
    <div class="container">
        <div class="text-center">
            <h2 class="section-heading ">Nuestras redes sociales</h2>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <a style="color:black;" href="https://www.facebook.com/Humanmexico/"><div class="features-icons-icon d-flex"><i class="fab fa-facebook color-facebook color-hover m-auto"></i></div>
                    <h3>Facebook</h3></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                    <a style="color:black;" href="https://twitter.com/drjaidar"><div class="features-icons-icon d-flex"><i class="fab fa-twitter color-twitter color-hover m-auto"></i></div>
                    <h3>Twitter</h3></a>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="features-icons-item mx-auto mb-0 mb-lg-3">
                    <a style="color:black;" href="https://www.instagram.com/amederma_clinic/"><div class="features-icons-icon d-flex"><i style="border-radius: 10%; color: white;" class="fab fa-instagram px-2 bg-instagram color-hover m-auto"></i></div>
                    <h3>Instagram</h3></a>
                </div>
            </div>
        </div>
    </div>
</section-->

    
    
    <section class="ser-2-izq py-3">
<div class="container my-3">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card shadow-ga-lg mb-1">
                <div class="card-header">
                    <h3>Envia un mensaje</h3>
                </div>
                <div class="card-body">
                    
                    <form action="/" method="post" name="contact_form" >
                    @if ($alert === TRUE)
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                            ¡Gracias por contactarnos! En la brevedad nos comunicaremos contigo.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @elseif ($alert === FALSE)
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            ¡Algo salio mal! Intenta otra vez mas tarde.
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                    @else
                      
                    @endif
                    @csrf    
                        <input type="hidden" name="csrfmiddlewaretoken" value="44cZyATrQkxqdizLhmak2ah0O3axn4D1oG5ILi1j4teyhPeDmOKyVRS3hWjgb6ee">
                            <div class="user-box d-flex mb-1">
                                <input type="text" name="Nombre" placeholder="Nombre" class="me-1" maxlength="50" required id="id_Nombre">
                                
                                <input type="text" name="Apellidos" placeholder="Apellido" maxlength="50" required id="id_Apellidos">
                            </div>
                            <div class="user-box my-1">
                                <input type="text" name="Email" placeholder="Correo electrónico" required id="id_Email">
                                
                            </div>
                            <div class="user-box my-1">
                                <input type="text" name="Telefono" placeholder="Teléfono" required id="id_Telefono">
                                
                            </div>
                            <div class="user-box my-1">
                                <textarea name="Mensaje" cols="40" rows="5" placeholder="Escribe tu mensaje..." required id="id_Mensaje">
</textarea>
                                
                            </div>
                        <div class="form-group text-center my-1">
                            <button type='submit' class='btn btn-ga-secondary w-75 m-1'><i class="fas fa-envelope"></i> Enviar mensaje por correo</button>
                        </div>
                        <div class="text-center">
                            <button type='button' class='btn bg-whats w-75 m-1 text-white' onclick="ContactoviaWhats()"><i class="fab fa-whatsapp"></i> Enviar mensaje por WhatsApp</button>
                        </div>
                    </form>
                    
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-12">
            <div class="card shadow-lg mt-1">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d29873.34858775416!2d-100.3962337665228!3d20.621984562918662!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b1a6cd5faed%3A0x43c3216a94e962a1!2sAnillo%20Vial%20Fray%20Jun%C3%ADpero%20Serra%201550%2C%20Privada%20Arboledas%2C%2076140%20Santiago%20de%20Quer%C3%A9taro%2C%20Qro.!5e0!3m2!1ses!2smx!4v1644256557060!5m2!1ses!2smx" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
</section>
<script>
    function ContactoviaWhats(){
        var Nombre = document.contact_form.Nombre.value;
        var Apellidos = document.contact_form.Apellidos.value;
        var Mensaje = document.contact_form.Mensaje.value;
        var url = "https://wa.me/524422725661?text="
        window.open(url + "Hola, Mi nombre es "+Nombre+" "+Apellidos+" "+Mensaje)
    }
</script>

@include('templates/footer')

@include('templates/floatbuttons')
    

    <!--a href="https://www.facebook.com/Humanmexico/" class="float bg-facebook" style="bottom:370px;"> <i class="fab fa-facebook my-float"></i> </a>
    <a href="https://www.linkedin.com/company/human-m%C3%A9xico/" class="float bg-linkedin" style="bottom:335px;"> <i class="fab fa-linkedin my-float"></i> </a>
    <a href="https://twitter.com/Human_Mex" style="bottom:300px;" class="float bg-twitter"><i class="fab fa-twitter my-float"></i></a>
    <a href="https://wa.me/524422725661" style="bottom:265px;" class="float bg-whats"> <i class="fab fa-whatsapp my-float"></i> </a-->
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
          //$("#s_modal4").modal("show");
            $("#content-slider").lightSlider({
                item:2,
                loop:true,
                keyPress:true,
                responsive: [
                {
                    breakpoint: 1000,
                    settings: {
                        item: 2,
                        slideMove: 1,
                        slideMargin: 6,
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        item: 1,
                        slideMove: 1
                    }
                }
            ]
            });
        });
    </script>
    <script>
      $(document).ready(function() {
        $("#{{$modal ?? ''}}").modal("show");
      });
    </script>
</body>
</html>