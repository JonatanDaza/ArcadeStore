<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content=""/>
  <meta name="description" content=""/>
  <meta name="author" content="Scrum 3"/>

  <title>ARCADE STORE</title>
  <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">

  <!-- slider stylesheet -->
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css')}}" />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/Dashboard.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/form.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/stylef.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/registro.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/valid.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
          <nav class="navbar navbar-expand-lg custom_nav-container">
              <a class="navbar-brand" href="{{ route('tienda.index') }}">
                  <img src="{{ asset('images/logo.png') }}" alt="ARCADE STORE Logo">
                  <span>
                      ARCADE STORE
                  </span>
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse"
                      data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                      aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
                      <ul class="navbar-nav">
                          <li class="nav-item {{ request()->routeIs('tienda.index') ? 'active' : '' }}">
                              <a class="nav-link" href="{{ route('tienda.index') }}">inicio <span class="sr-only">(current)</span></a>
                          </li>
                          <li class="nav-item {{ request()->routeIs('metricas') ? 'active' : '' }}">
                              <a class="nav-link" href="/Dashboard">Metricas</a>
                          </li>
                          <li class="nav-item {{ request()->routeIs('juegos') ? 'active' : '' }}">
                              <a class="nav-link" href="/juegos">Juegos</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="#">Free to play</a>
                          </li>
                          <li class="nav-item">
                              <a class="nav-link" href="https://wa.me/+573143575304" target="_blank">Contactenos</a>
                          </li>
                          @if (Auth::check())
                              <li class="nav-item dropdown">
                                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                                     data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      {{ Auth::user()->name }}
                                  </a>
                                  <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                      <a class="dropdown-item" href="{{ route('logout') }}"
                                         onclick="event.preventDefault();
                                                   document.getElementById('logout-form').submit();">
                                          {{ __('Logout') }}
                                      </a>

                                      <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                            class="d-none">
                                          @csrf
                                      </form>
                                  </div>
                              </li>
                          @else
                              <li class="nav-item">
                                  <a class="nav-link" href="/login"> Inicio de sesion </a>
                              </li>
                          @endif
                      </ul>
                  </div>
                  <div class="quote_btn-container d-flex justify-content-center">
                      <a href="https://wa.me/+573143575304" target="_blank">
                          +573143575304
                      </a>
                  </div>
              </div>
          </nav>
      </div>
  </header>
    <!-- end header section -->
<body>
    <div class="dashboard">
    <!--barra lateral-->
    <div class="sidebar">

        <h2>ARCADE_STORE</h2>
        <ul>
            <li><a href="/">Inicio</a></li>
            <li><a href="/Dashboard">Metricas</a></li>
            <li><a href="#">Proveedores</a></li>
            <li><a href="#">Descuentos</a></li>
            <li><a href="#">juegos mas vendidos</a></li>
            <li><a href="#">Ventas</a></li>
        </ul>
    </div>

    <!-- form cliente -->
     <div class="form-container">
      <form id="employeeForm" action="/metricas" method="post">
            <h3> Formulario de registro de empleado </h3>
            <br>

            <!--lista desplegable-->
              <div class="form-group">
              <label for="tipo_documento">Tipo de documento:</label>
              <select name="documento" id="documento">
                <option value="cedula"> cedula de ciudadania </option>
                <option value="Tarjeta_id"> Tarjeta de identidad</option>
                <option value="pasaporte"> Pasaporte </option>
                <option value="cedula_E">Cedula de extranjeria</option>
              </select>
              <div class="error" id="selectError"></div>
              </div>

              <div class="form-group">
                <label for="N°Documento">N° de documento</label>
                <input type="text" id="doc" name="doc" required placeholder="Ingrese el numero de documento">
                <div class="error" id="docError"></div>
                </div>

              <div class="form-group">
                <label for="name">Nombre completo</label>
                <input type="text" id="name" name="name" placeholder="Ingrese su nombre completo"
                required>
                <div class="error" id="nameError"></div>
              </div>
        
              <div class="form-group">
                <label for="email">Dirección de correo electrónico</label>
                <input type="email" id="email" name="email" placeholder="tucorreo@gmail.com"
                required>
                <div class="error" id="emailError"></div>
              </div>
        
              <div class="form-group">
              <label for="tel">Numero de telefono</label>
              <input type="tel" id="phone" name="phone" placeholder="1234567891"
              required>
              <div class="error" id="phoneError"></div>
              </div>
        
              <div class="form-group">
                <label for="FechaC">Fecha de inicio contrato</label>
                <input type="date" name="fechaC" id="fechaC" min="2010-01-01" max="2024-12-31">
              <div class="error" id="fechaError"></div>
              </div>
        
              <div class="form-group">
              <input type="submit" value="Confirmar" class="login-button">
              </div>
              <div class="success" id="successMessage"></div>
            <br>

            <!-- boton terminos y condiciones -->
            <button class="btn-terms" id="btnOpenModal">leer terminos y condiciones</button>
        </form>

        <!-- moda(VENTANA EMERGENTE)-->
        <div id="termsModal" class="modal">
          <div class="modal-content">
              <!--Boton de cierre-->
              <button class="close-btn" id="btnCloseModal" aria-label="cerrar modal">&times;</button>
              <h2>Terminos y Condiciones</h2>
              <p>
                Bienvenido a Arcade Store. En esta sección explicamos cómo recopilamos, usamos, almacenamos, 
                protegemos y compartimos tus datos personales. Al utilizar nuestra plataforma, aceptas los 
                términos y condiciones descritos en este documento. Si no estás de acuerdo con alguna parte 
                de estos términos, te recomendamos que no utilices nuestros servicios.
              </p> <br>
              <p>
                Tomamos medidas técnicas y organizativas adecuadas para proteger tus datos personales contra 
                el acceso no autorizado, la alteración, divulgación o destrucción. Sin embargo, debes ser 
                consciente de que ninguna medida de seguridad es completamente infalible. 
              </p>
              <p> Politica de privacidad</p>
              <button class="btn-accept" id="btnAcceptModal">Aceptar</button>
          </div>
       </div>
       <script src="{{ asset('js/emp.js') }}"></script>
       <script src="{{ asset('js/script.js') }}"></script>
     </div>
   <!-- contenido principal -->
   <div class="main-content">
    <div class="card">
        <h3>Usuarios</h3>
        <p> 50 nuevos usuarios registrados hoy.</p>
        <div class="progress-bar">
        <div class="progress" style="width: 75%;"></div>
        </div>
    </div>

            <div class="card">
                <h3>Ventas</h3>
                <p> 120 ventas realizados hoy.</p>
                <div class="progress-bar">
                    <div class="progress" style="width: 50%;"></div>
                </div>
            </div>
                    <div class="card">
                        <h3>Ventas aumentadas</h3>
                        <p> Aumento 50% hoy.</p>
                        <div class="progress-bar">
                            <div class="progress" style="width: 90%;"></div>
                            </div>
                        </div>
        <!-- grafico circular-->
        <div class="circle-chart">
            <h3>Progreso Total</h3>
            <div class="circle" style="background: conic-gradient(#4CAF50 90%, #f2f2f2 0 100%);"></div>
            <P class="circle-text">90%</P>
        </div>
</div>
    </div>
</body>

    <!-- info section -->
    <section class="info_section layout_padding2">
        <div class="container">
            <div class="info_items">
                <a href="">
                    <div class="item ">
                        <div class="img-box box-1">
                            <img src="" alt="">
                        </div>
                        <div class="detail-box">
                            <p>
                                SENA
                                CALLE 13 # 65-10
                            </p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="item ">
                        <div class="img-box box-2">
                            <img src="" alt="">
                        </div>
                        <div class="detail-box">
                            <p>
                                +57 3143575304
                            </p>
                        </div>
                    </div>
                </a>
                <a href="">
                    <div class="item ">
                        <div class="img-box box-3">
                            <img src="" alt="">
                        </div>
                        <div class="detail-box">
                            <p>
                                arcadestore@gmail.com
                            </p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </section>

    <!-- end info_section -->
    <!-- footer section-->
<section class="container-fluid footer_section">
    <p> 2024 ALL Rights Reserved By Scrum 3 - SENA-CSF</p>
</section>

</body>
</html>