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
  <link href="{{ asset('css/juegos.css') }}" rel="stylesheet" />
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
                  <a class="nav-link" href="#">Juegos </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#">Free to play</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="https://wa.me/+573143575304">Contactenos</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="/login"> Inicio de sesion </a>
                </li>
              </ul>
              <form class="form-inline my-2 my-lg-0 ml-0 ml-lg-4 mb-3 mb-lg-0">
                <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit"></button>
              </form>
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
     <!-- slider section -->
    <section class=" slider_section position-relative">
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
        </ol>
        <!-- la imagen de fondo sale de Style  background-image: url(../images/hero.jpg);-->
        <div class="carousel-inner">
          <div class="carousel-item active slide1">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      CALL OF DUTY
                      <br>
                      <span>
                        Black ops 6
                      </span>
                    </h1>
                    <p>
                      Mientras la guerra del Golfo acapara la atención mundial, una tenebrosa fuerza
                      clandestina se ha infiltrado en los niveles más altos de la CIA, tachando de traidores
                      a cualquiera que se resista. Exiliados de su agencia y del país que una vez los aclamó como héroes,
                      Frank Woods, veterano de Black Ops, y su equipo se ven perseguidos por la organización militar que los creó.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Compra ahora
                      </a>
                      <a href="" class="btn-2">
                        Mas informacion
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
              <!--  <img src="images/slider-img.png" alt="">-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item slide2">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      CALL OF DUTY
                      <span>
                        Modern Warfare 2
                      </span>
                    </h1>
                    <p>
                      los jugadores se verán inmersos en un conflicto a escala global sin precedentes
                      que incluye el regreso de operadores icónicos de la fuerza operativa 141.
                      Infinity Ward ofrece a los fans una experiencia puntera con un manejo nuevo,
                      un sistema de IA avanzado, un armero nuevo y una retahíla de innovaciones gráficas
                      y de jugabilidad que elevarán la franquicia a otro nivel.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Compra ahora
                      </a>
                      <a href="" class="btn-2">
                        Mas informacion
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                <!--   <img src="images/slider-img.png" alt="">-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item slide3">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      BLACK MYTH
                      <br>
                      <span>
                        Wukong
                      </span>
                    </h1>
                    <p>
                      Un RPG de acción inspirado en la mitología china. Emprenderás la travesía como el Destinado,
                      enfrentarás desafíos, conocerás maravillas y descubrirás la oscura verdad que yace bajo el engañoso
                      velo de una gloriosa leyenda ancestral, inspirada en la clásica novela Viaje al Oeste, encarnando al
                      Rey Mono, un personaje mítico con habilidades sobrenaturales.
                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Compra ahora
                      </a>
                      <a href="" class="btn-2">
                        Mas informacion
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                  <!--  <img src="images/slider-img.png" alt="">-->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item slide4">
            <div class="container-fluid">
              <div class="row">
                <div class="col-md-4 offset-md-2">
                  <div class="slider_detail-box">
                    <h1>
                      ASSASSIN'S
                      <br>
                      <span>
                        Creed III
                      </span>
                    </h1>
                    <p>
                      Revive la revolución estadounidense o vívela por primera vez
                      controlando a Connor en la remasterización de Assassin's Creed® III,
                      con gráficos mejorados y una mecánica de juego mejorada. Además, se
                      incluye Assassin's Creed® III Liberation Remasterizado y todo el contenido
                      DLC individual, El quinto título principal de la popular saga de juegos de acción en mundo
                      abierto

                    </p>
                    <div class="btn-box">
                      <a href="" class="btn-1">
                        Compra ahora
                      </a>
                      <a href="#" class="btn-2">
                        Mas informacion
                      </a>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="slider_img-box">
                <!--    <img src="images/slider-img.png" alt="">-->
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </section>
    <!-- end slider section -->
    <!--main section-->
    <main>
      <br><br><br>
      <section class="juegos">
          <h2>Juegos Disponibles</h2>
          <div class="juegos-galeria">
              <div class="juego-tarjeta">
                  <img src="images/Juego1.png" alt="Juego 1">
                  <h3>GTA V</h3>
                  <p> acción y aventura en un mundo abierto inspirado en Los Ángeles, 
                    con una trama criminal y un modo multijugador expansivo.</p>
                  <button>Comprar</button>
              </div>
              <div class="juego-tarjeta">
                  <img src="images/juego2.png" alt="Juego 2">
                  <h3>Halo 4</h3>
                  <p>juego de disparos en primera persona que sigue las aventuras del 
                    Jefe Maestro, enfrentando una nueva amenaza alienígena.</p>
                  <button>Comprar</button>
              </div>
              <div class="juego-tarjeta">
                  <img src="images/juego3.png" alt="Juego 3">
                  <h3>Assassin's Creed Valhala</h3>
                  <p>acción y aventura donde encarnas a un vikingo de Inglaterra 
                    en la época medieval, combinando combate, exploración y estrategia.</p>
                  <button>Comprar</button>
              </div>
              <div class="juego-tarjeta">
                <img src="images/juego4.jpg" alt="Juego 4">
                <h3>Call od Duty: Black ops 6</h3>
                <p> juego de disparos en primera persona con una campaña futurista, un 
                  modo multijugador competitivo y el popular modo zombis.</p>
                <button>Comprar</button>
            </div>
            <div class="juego-tarjeta">
                <img src="images/juego5.jpeg" alt="Juego 5">
                <h3>Farcry 3</h3>
                <p>juego de acción en un mundo abierto donde debes sobrevivir y rescatar 
                  a tus amigos en una isla tropical controlada por piratas y enemigos. 
                  </p>
                <button>Comprar</button>
            </div>
            <div class="juego-tarjeta">
                <img src="images/juego6.jpeg" alt="Juego 6">
                <h3>Farcry 6</h3>
                <p>juego de acción y aventura en un mundo abierto donde lideras una 
                  revolución contra un régimen opresivo en la isla tropical de Yara.</p>
                <button>Comprar</button>
            </div>
            <div class="juego-tarjeta">
              <img src="images/juego7.png" alt="Juego 7">
              <h3>Call of duty: Black ops 2</h3>
              <p>juego en primera persona que combina una campaña futurista 
              con decisiones que afectan la historia, un multijugador y el modo zombis.</p>
              <button>Comprar</button>
          </div>
          <div class="juego-tarjeta">
              <img src="images/juego8.png" alt="Juego 8">
              <h3>Dragon ball Sparking Zero</h3>
              <p>con 181 personajes jugables, Incluye escenas icónicas del anime el 
                juego recrea escenas icónicas del anime, como el sacrificio de Goku.</p>
              <button>Comprar</button>
          </div>
          <div class="juego-tarjeta">
              <img src="images/juego9.png" alt="Juego 9">
              <h3>Assassin's Creed Odyssey</h3>
              <p> juego de acción y aventura en mundo abierto ambientado en la Antigua 
                Grecia y toman decisiones que impactan la historia.</p>
              <button>Comprar</button>
          </div>
          <div class="juego-tarjeta">
            <img src="images/juego10.png" alt="Juego 1">
            <h3>Fallout 4</h3>
            <p>juego de rol y supervivencia ambientado en un mundo post-apocalíptico, donde 
              los jugadores exploran el yermo de Boston mientras buscan a su hijo secuestrado.</p>
            <button>Comprar</button>
        </div>
        <div class="juego-tarjeta">
            <img src="images/juego11.jpg" alt="Juego 2">
            <h3>Bioshock Infinite</h3>
            <p> juego de disparos en primera persona ambientado en la ciudad flotante de 
              Columbia. El jugador controla a Booker DeWitt, quien debe rescatar a Elizabeth</p>
            <button>Comprar</button>
        </div>
        <div class="juego-tarjeta">
            <img src="images/juego12.png" alt="Juego 3">
            <h3>Borderlands 2</h3>
            <p>juego de disparos en primera persona con elementos de rol, ambientado en un 
              mundo de ciencia ficción y humor irreverente.</p>
            <button>Comprar</button>
        </div>
        <div class="juego-tarjeta">
          <img src="images/juego13.jpg" alt="Juego 4">
          <h3>Borderlands 3</h3>
          <p> juego de disparos en primera persona con elementos de rol, y la tercera entrega 
            de la serie Borderlands. Los jugadores asumen el rol de uno de los "Vault Hunters".</p>
          <button>Comprar</button>
      </div>
      <div class="juego-tarjeta">
          <img src="images/juego14.png" alt="Juego 5">
          <h3>FC 24</h3>
          <p>juego de simulación de fútbol lanzado en 2023, que introduce avances como HyperMotionV
             para una jugabilidad más realista, utilizando datos de más de 180 partidos.</p>
          <button>Comprar</button>
      </div>
      <div class="juego-tarjeta">
          <img src="images/juego15.png" alt="Juego 6">
          <h3>Red Dead</h3>
          <p>sigue a John Marston, un exforajido que debe cazar a sus antiguos compañeros para salvar
             a su familia en un mundo abierto ambientado en el Viejo Oeste</p>
          <button>Comprar</button>
      </div>
      <div class="juego-tarjeta">
        <img src="images/juego16.png" alt="Juego 7">
        <h3>Alan Wake 2</h3>
        <p>juego de terror y supervivencia que sigue a dos personajes principales: Alan Wake, un escritor
           atrapado en una dimensión oscura conocida como The Dark Place</p>
        <button>Comprar</button>
    </div>
    <div class="juego-tarjeta">
        <img src="images/juego17.png" alt="Juego 8">
        <h3>Hitman </h3>
        <p>uego permite a los jugadores controlar a Agente 47, un asesino a sueldo que debe completar 
          contratos en más de 20 ubicaciones internacionales.</p>
        <button>Comprar</button>
    </div>
    <div class="juego-tarjeta">
        <img src="images/juego18.png" alt="Juego 9">
        <h3>Watch Dogs 2</h3>
        <p> juego de acción en mundo abierto en el que los jugadores controlan a Marcus Holloway, un 
          hacker que se une a DedSec para enfrentar la corrupción de las corporaciones tecnológicas.</p>
        <button>Comprar</button>
    </div>
          </div>
      </section>
  </main>
  <!--End main section-->

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
  <!-- footer section -->

  <script type="text/javascript" src="{{ asset('js/jquery-3.4.1.min.js') }}"></script>
  <script type="text/javascript" src="{{ asset('js/bootstrap.js') }}"></script>

</body>

</html>