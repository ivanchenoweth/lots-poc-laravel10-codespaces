<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->

<link rel="stylesheet" href="anafront/style.css">
  <script src="anafront/login.js" defer></script>
    </head>
    <body class="antialiased">
            <div class="container" id="container">
            <div class="form-container sign-up">
            <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <h1>Crear Cuenta</h1>
                    <div class="social-icons">
                            <i class="fa-solid fa-user"></i>    
                    </div>
                    <span>Usa tu correo para registrarte</span>
                        <input type="text" name="name" id="name" placeholder="Nombre de usuario">
                        <input type="email" name="email" id="email" placeholder="Correo electrónico">
                        <input type="password" name="password" id="password" placeholder="Contraseña">
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Confirmar Contraseña">
                        <button>Registrarse</button>
                </form>
            </div>
            <div class="form-container sign-in">
            <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <h1>Iniciar Sesión</h1>
                    <div class="social-icons">
                    <i class="fa-solid fa-user"></i>
                    </div>
                    <span>Inicie sesión con su correo y contraseña</span>
                    <input type="email" name="email" id="email" placeholder="Correo electrónico">
                    <input type="password" name="password" id="password" placeholder="Contraseña">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                    <button>Iniciar Sesión</button>
                </form>
            </div>
            <div class="toggle-container">
                <div class="toggle">
                    <div class="toggle-panel toggle-left">
                    <h1>¡Bienvenido de vuelta!</h1>
                    <p>Ingrese sus detalles personales para acceder</p>
                    <button class="hidden" id="login">Iniciar Sesión</button>
                    </div>
                    <div class="toggle-panel toggle-right">
                    <h1>¡Bienvenido!</h1>
                    <p>Regístrese con sus detalles personales para acceder</p>
                    <button class="hidden" id="register">Registrarse</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="anafront/script.js"></script>
    </body>
</html>
