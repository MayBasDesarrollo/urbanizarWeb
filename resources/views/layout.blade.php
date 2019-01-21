<!DOCTYPE html>
<html lang="es">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Urbanizar</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    {{--  Mi estilo personalizado  --}}
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/modern-business.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">

  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light fixed-top" style="z-index:11;">
      <div class="container">
        <i class="fas fa-house-damage fa-2x" style="padding-bottom: 10px;color:#3d5afe"></i>
        <a class="navbar-brand" href="{{ route('prop.home') }}">
            <h3>Urbanizar</h3>
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link" href="{{ route('prop.home') }}">Inicio</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="" id="navbarDropdownPropiedades" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Propiedades
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownPropiedades">
                <a class="dropdown-item" href="{{ route('prop.index') }}">Venta</a>
                <a class="dropdown-item" href="{{ route('prop.index') }}">Alquiler</a>
                <a class="dropdown-item" onclick="infoModal('Propiedades Administración')">Administración</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownTasaciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Tasaciones
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownTasaciones">
                  <a class="dropdown-item" onclick="infoModal('Tasaciones Venta')">Venta</a>
                  <a class="dropdown-item" onclick="infoModal('Tasaciones Alquiler')">Alquiler</a>
                  <a class="dropdown-item" onclick="infoModal('Tasaciones Administración')">Administración</a>
              </div>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownAsesoramiento" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Asesoramiento
              </a>
              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownAsesoramiento">
                  <a class="dropdown-item" onclick="infoModal('Asesoramiento Venta')">Venta</a>
                  <a class="dropdown-item" onclick="infoModal('Asesoramiento Alquiler')">Alquiler</a>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    @yield('content')

    <!-- Footer -->
    <footer id="footer">
        <section id="contact" class="section-bg wow fadeInUp" style="background-color: #f8f9fa;visibility: visible; animation-name: fadeInUp;">
            <div class="container">
                <div class="row contact-info">
                    <div class="col-md-3">
                        <div class="contact-address">
                            <i class="fas fa-map-marked-alt"></i>
                            <h3>Dirección</h3>
                            <address>Belgrano, N° 2040, Buenos Aires, Argentina</address>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-phone">
                            <i class="fas fa-phone"></i>
                            <h3>Número de Contacto</h3>
                            <address>11 2363 6235</address>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-email">
                            <i class="fas fa-envelope"></i>   
                            <h3>Email</h3>
                            <address>info@example.com</address>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="contact-email">
                                <i class="fab fa-facebook"></i>  
                            <h3>Facebook</h3>
                            <address>Urbanizar</address>
                        </div>
                    </div>
                </div>
            </div>
        </section>

      {{-- <div class="footer-top">
        <div class="container">
          <div class="row">

            <div class="col-lg-3 col-md-6 footer-newsletter">
                <h4>Urbanizar</h4>
                <p class="text-justify">
                    Te queremos brindar el servicio que quisiéramos para nosotros,
                    esforzarnos en cada tarea, pequeña o grande. Impactar en la vida
                    de las personas, que la retribución se la consecuencia y no el fin.
                </p>
                <p>Y recuerde usted ya nos conoce!!</p>
            </div> --}}

            {{-- nova --}}
            {{--  <div class="col-lg-3 col-md-6 footer-info">
                <h3>Urbanizar</h3>
                <p class="text-justify">
                    Te queremos brindar el servicio que quisiéramos para nosotros,
                    esforzarnos en cada tarea, pequeña o grande. Impactar en la vida
                    de las personas, que la retribución se la consecuencia y no el fin.
                </p>
                <p>Y recuerde usted ya nos conoce!!</p>
            </div>  --}}
            {{-- nova --}}

            {{-- <div class="col-lg-3 col-md-6 footer-contact">
                <h4>Contacto</h4>
                <p>
                    Belgrano, N° 2040, Buenos Aires, Argentina.<br>
                    <strong>Telefono:</strong> 11 2363 6235<br>
                    <strong>Email:</strong> info@example.com<br>
                </p>

                <div class="social-links">
                    <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                </div>
            </div> --}}
{{-- 
            <div class="col-lg-3 col-md-6 footer-links">
                <h4>Membresia</h4>
                <ul>
                    <li>
                        <strong>Eduardo Ilzarbe</strong> 
                        <br>
                        <img class="img-membre" src="{{asset('img/membresia/cucicba1.jpg')}}">
                        Matricula: 3363

                        <br>

                        <strong>Andrea Alderete</strong> 
                        <br>
                        <img class="img-membre" src="{{asset('img/membresia/cucicba1.jpg')}}">
                        Matricula: 6255
                    </li>
                </ul>
            </div> --}}

            {{-- <div class="col-lg-3 col-md-6 footer-newsletter">
                <h4>Consultar</h4>
                <p class="text-justify">
                    Estamos para ofrecerte el mejor servicio que se adapte a tus necesidades, así que si
                    tienes alguna duda o pregunta no dudes en comunicarte con nosotros, te responderemos lo antes posibles.
                </p>
                <a class="btn btn-primary float-right" role="button" data-toggle="modal" data-target="#infoModal">Preguntar</a>
            </div>

          </div>
        </div>
      </div> --}}
      <!-- /.container -->
    </footer>


    <!-- Modal de información -->
    <div class="modal fade" id="infoModal" tabindex="-1" role="dialog" aria-labelledby="infoModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="infoModalLabel">Consultar <small id="tituloLugar"></small> </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <p>Nos comunicaremos contigo lo mas pronto posible, para aclarar todas tus dudas sobre la administración de alquileres.</p>
                    <form>
                        <input type="hidden" value="" id="infoModalLugar">
                        <div class="form-group">
                            <label for="recipient-name" class="col-form-label">Nombre:</label>
                            <input type="text" class="form-control" id="recipient-name">
                        </div>
                        <div class="form-group">
                            <label for="recipient-tlf" class="col-form-label">Teléfono:</label>
                            <input type="text" class="form-control" id="recipient-tlf">
                        </div>
                        <div class="form-group">
                            <label for="message-text" class="col-form-label">Mensaje:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary button-urbanizar">Enviar</button>
                </div>
          </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
    <script>
        function infoModal($nombre){
            $("#infoModalLugar").val($nombre);
            $("#tituloLugar").text("("+$nombre+")");
            $("#infoModal").modal("show");
        }
    </script>

  </body>

</html>
