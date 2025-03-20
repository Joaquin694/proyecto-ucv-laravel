<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>

    <link rel="stylesheet" href="{{ asset('css/crearCuenta.css') }}">

</head>
<body>

    <!--  imágenes  -->
    <div class="background-slider">
        <img src="{{ asset('images/ima1.jpg') }}" alt="Fondo 1">
        <img src="{{ asset('images/ima2.jpg') }}" alt="Fondo 2">
        <img src="{{ asset('images/ima3.jpg') }}" alt="Fondo 3">
        <img src="{{ asset('images/ima4.jpg') }}" alt="Fondo 4">
    </div>

    <!-- Contenido -->
    <div class="content">
        <div class="register-container">
            <h1 class="register-title">Registro de Usuario</h1>
            <form>
                <div class="input-group">
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>

                <div class="input-group">
                    <label for="apellido">Apellido</label>
                    <input type="text" id="apellido" name="apellido" required>
                </div>

                <div class="input-group">
                    <label for="gmail">Correo Electrónico</label>
                    <input type="email" id="gmail" name="gmail" required>
                </div>

                <div class="input-group">
                    <label for="telefono">Teléfono</label>
                    <input type="tel" id="telefono" name="telefono" required>
                </div>

                <button type="submit" class="register-button">Registrarse</button>
            </form>
        </div>
    </div>

</body>
</html>
