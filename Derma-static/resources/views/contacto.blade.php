

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="{{url('favicon.ico')}}">
    <title>
    Dermatología - Contacto
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
                
                <img id="crs_img" class="img-responsive img-circle w-100" src="{{url('media/derma-1.png')}}" alt="">
                <div class="carousel-caption text-dark text-center">
                        <div class="">
                            <img style="background:rgba(255,255,255,0.5)" src="{{url('media/logo-60h.png')}}"  class="w-25" alt="">
                        </div>
                        <h2 class="text-white">Contáctanos</h2>
                        <p class="text-white text-center">Escribe un texto...</p>
                        <!--p class="text-white" style="text-align: justify;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto, velit.</p-->
                    </div>
            
        
    </div>
    
  </div>
    

    
    <section class="ser-2-izq py-3">
<div class="container my-3">
    <div class="row">
        <div class="col-lg-6 col-12">
            <div class="card shadow-ga-lg mb-1">
                <div class="card-header">
                    <h3>Envia un mensaje</h3>
                </div>
                <div class="card-body">
                    
                    <form method="post" name="contact_form" >
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
                        <input type="hidden" name="csrfmiddlewaretoken" value="vjkIuMYdABaXz6jDyrBSQV9C7F9e1mY5PVdrHu65OKR5DDYvDTb6JCKFAyiXPozi">
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
                <!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d119498.61133090078!2d-100.3774322877102!3d20.6153361906092!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d35b8fdc5b9255%3A0x97b094aa561b832f!2sSantiago%20de%20Quer%C3%A9taro%2C%20Qro.!5e0!3m2!1sen!2smx!4v1642457876603!5m2!1sen!2smx" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"></iframe-->
                <!--iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3762.6631419822365!2d-99.11234298529746!3d19.42695534589571!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d1feae5c60a6c5%3A0xf302c6ec5364d4a5!2sVenustiano%20Carranza%2C%20Ciudad%20de%20M%C3%A9xico%2C%20CDMX!5e0!3m2!1ses-419!2smx!4v1641565763448!5m2!1ses-419!2smx" width="100%" height="600px" style="border:0;" allowfullscreen="" loading="lazy"></iframe-->
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