<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página de Login</title>

    <link rel="stylesheet" href="{{ asset('css/login.css') }}">


    <!--  imágenes -->
    <div class="background-slider">
        <img src="{{ asset('images/imagen1.jpg') }}" alt="Fondo 1">
        <img src="{{ asset('images/imagen2.jpg') }}" alt="Fondo 2">
        <img src="{{ asset('images/imagen3.jpg') }}" alt="Fondo 3">
    </div>

    <!-- HSADJAODFJJODFAEFKOAEKO -->
    <div class="content">
        <div class="login-container">
            <h1 class="login-title">Iniciar Sesión</h1>
            <p class="login-subtitle">UCV investigation</p>
            <form method="post" action="">
                <div class="input-group">
                    <i>📧</i>
                    <input name="gmail" type="email" class="form-input" placeholder="Correo electrónico" required>
                </div>

                <div class="input-group">
                    <i>🔒</i>
                    <input name="password" type="password" class="form-input" placeholder="Contraseña" required>
                </div>

                <button type="button" class="login-button" onclick="window.location.href='{{ route('principal') }}'">
                    Ingresar
                </button>

                <div class="forgot-password">
                    <a href="#">¿Olvidaste tu contraseña?</a>
                </div>
            </form>
        </div>
    </div>

</body>
</html>
