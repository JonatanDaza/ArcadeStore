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
    <!-- responsive style -->
    <link href="{{ asset('css/responsive.css') }}" rel="stylesheet"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
<div class="login-container">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="logo">
    <h2>Iniciar sesión</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf

        <label for="email">Dirección de correo electrónico</label>
        <input type="email" id="email" name="email" required value="{{ old('email') }}">
        @error('email')
        <div class="error">{{ $message }}</div>
        @enderror

        <label for="password">Contraseña</label>
        <input type="password" id="password" name="password" required>
        @error('password')
        <div class="error">{{ $message }}</div>
        @enderror

        <a href="#" class="forgot-password">¿Has olvidado la contraseña?</a>

        <input type="submit" value="Iniciar sesión" class="login-button">

        <p class="or">o iniciar sesión con</p>
        <div class="social-login">
            <button class="social-btn xbox"><i class="fab fa-xbox"></i></button>
            <button class="social-btn steam"><i class="fab fa-steam"></i></button>
            <button class="social-btn facebook"><i class="fab fa-facebook-f"></i></button>
            <button class="social-btn google"><i class="fab fa-google"></i></button>
            <button class="social-btn apple"><i class="fab fa-apple"></i></button>
        </div>
    </form>
    <a href="{{ route('register') }}" class="create-account">Crear una cuenta</a>
    <a href="#" class="privacy-policy">Política de privacidad</a>
</div>
</body>
</html>
