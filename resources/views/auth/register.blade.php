<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Basic -->
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <!-- Site Metas -->
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <meta name="author" content="Scrum 3"/>

    <title>ARCADE STORE</title>

    <!-- slider stylesheet -->
    <link rel="stylesheet" type="text/css"
          href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css"/>

    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.css') }}"/>

    <!-- fonts style -->
    <link href="https://fonts.googleapis.com/css?family=Dosis:400,500|Poppins:400,700&display=swap" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/stylef.css') }}" rel="stylesheet"/>
    <link href="{{ asset('css/valid.css') }}" rel="stylesheet"/>
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>

<div class="login-container">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
    <h2>Registro de cliente</h2>
    <form id="employeeForm" method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <label for="name">Nombre completo</label>
            <input type="text" id="name" name="name" placeholder="Ingrese su nombre completo"
                   required value="{{ old('name') }}">
            @error('name')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="email">Dirección de correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="tucorreo@gmail.com"
                   required value="{{ old('email') }}">
            @error('email')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Numero de telefono</label>
            <input type="tel" id="phone" name="phone" placeholder="1234567891"
                   required value="{{ old('phone') }}">
            @error('phone')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password">Contraseña</label>
            <input type="password" id="password" name="password" required>
            @error('password')
            <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <label for="password_confirmation">Confirmar Contraseña</label>
            <input type="password" id="password_confirmation" name="password_confirmation" required>
        </div>

        <div class="form-group">
            <input type="submit" value="Confirmar" class="login-button">
        </div>
        <div class="success" id="successMessage"></div>


        <p class="or">o iniciar sesión con</p>
        <div class="social-login">
            <button class="social-btn xbox"><i class="fab fa-xbox"></i></button>
            <button class="social-btn steam"><i class="fab fa-steam"></i></button>
            <button class="social-btn facebook"><i class="fab fa-facebook-f"></i></button>
            <button class="social-btn google"><i class="fab fa-google"></i></button>
            <button class="social-btn apple"><i class="fab fa-apple"></i></button>
        </div>
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

    <a href="{{ route('login') }}" class="create-account">¿ya tienes una cuenta? iniciar sesion</a>
    <a href="#" class="privacy-policy">Política de privacidad</a>
</div>
<script src="{{ asset('js/Empscript.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
</body>
</html>
