<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard de Investigación</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #f4f7fc;
        }

        .sidebar {
            width: 280px;
            height: 100vh;
            position: fixed;
            top: 0;
            left: 0;
            background: #1e293b;
            color: white;
            padding-top: 25px;
            transition: all 0.3s;
        }

        .sidebar-header {
            text-align: center;
            padding: 15px;
            font-size: 20px;
        }

        .sidebar-header h4 {
            font-size: 22px;
            font-weight: bold;
        }

        .sidebar-header p {
            font-size: 18px;
        }

        .sidebar-menu .nav-item {
            padding: 15px 25px;
        }

        .sidebar-menu .nav-link {
            color: #cbd5e1;
            font-size: 18px;
            transition: 0.3s;
        }

        .sidebar-menu .nav-link i {
            font-size: 20px;
            margin-right: 10px;
        }

        .sidebar-menu .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            color: white;
        }

        .main-content {
            margin-left: 290px;
            padding: 30px;
            transition: all 0.3s;
        }
    </style>

</head>

<body>
    <div class="sidebar" id="sidebar">
        <div class="sidebar-header">
            <h4>Portal de Investigación</h4>
            <p class="text-light">Dr. Juan Pérez | Investigador</p>
        </div>
        <ul class="nav flex-column sidebar-menu">
            <li class="nav-item">
                <a href="#" class="nav-link load-content" data-url="{{ route('dashboard-content') }}">
                    <i class="fas fa-tachometer-alt"></i> Dashboard
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link load-content" data-url="{{ route('mis_investigaciones-content') }}">
                    <i class="fas fa-file-alt"></i> Mis Investigaciones
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link load-content" data-url="{{ route('colaboradores-content') }}">
                    <i class="fas fa-users"></i> Colaboradores
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link load-content" data-url="{{ route('estadisticas-content') }}">
                    <i class="fas fa-chart-line"></i> Estadísticas
                </a>
            </li>
            <li class="nav-item"><a href="#" id="configuracion-link" class="nav-link"><i class="fas fa-cog"></i> Configuración</a></li>
            <li class="nav-item mt-5">
                <form action="{{ route('fin') }}" method="POST">
                    @csrf
                    <button type="submit" class="nav-link text-danger bg-transparent border-0">
                        <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                    </button>
                </form>
            </li>
        </ul>
    </div>

    <div class="main-content" id="content">
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <script>
        $(document).ready(function () {
            $('.load-content').click(function (e) {
                e.preventDefault();
                var url = $(this).data('url');
                console.log("Cargando:", url);
                $('#content').load(url);
            });
        });
    </script>
</body>
</html>
