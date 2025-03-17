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
  <link rel="stylesheet" type="text/css" href={{ asset('css/bootstrap.css') }} />

  <!-- fonts style -->
  <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="{{ asset('css/style.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/Dashboard.css') }}" rel="stylesheet" />
  <link href="{{ asset('css/stylef.css') }}" rel="stylesheet" />
  <!-- responsive style -->
  <link href="{{ asset('css/responsive.css') }}" rel="stylesheet" />
</head>

<body>
  <div class="hero_area">
    <!-- header section strats -->
    <header class="header_section">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="/">
            <img src="images/logo.png" alt="">
            <span>
              ARCADE STORE
            </span>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="d-flex mx-auto flex-column flex-lg-row align-items-center">
              <ul class="navbar-nav  ">
                <li class="nav-item active">
                  <a class="nav-link" href="/">inicio <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/metricas">Metricas</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/juegos">Juegos </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Free to play</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="WhatsApp">Contactenos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/login"> Inicio de sesion </a>
                </li>
              </ul>
            <!--  <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>-->
            </div>
            <div class="quote_btn-container  d-flex justify-content-center">
              <a href="">
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
            <li><a href="/empleado">Empleados</a></li>
            <li><a href="/error_404">Proveedores</a></li>
            <li><a href="/error_404">Descuentos</a></li>
            <li><a href="/error_500">Juegos Nuevos</a></li>
            <li><a href="/error_500">Ventas</a></li>
        </ul>
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
                            <h3>Ventas con descuentos</h3>
                            <p> 50% hoy.</p>
                            <div class="progress-bar">
                                <div class="progress" style="width: 50%;"></div>
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