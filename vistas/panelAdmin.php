<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administrativos</title>
    <link rel="stylesheet" href="css/estilosADMIN.css">
    <link rel="preload" href="vistas/css/normalize.css" as="style" />
    <link rel="stylesheet" href="vistas/css/normalize.css" />
    <link rel="preload" href="vistas/css/estilosADMIN.css" as="style" />
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="vistas/img/INMURI_ngo.png" alt="logoInmobiliaria">
        </div>
    </header>

    <!-- Sidebar -->

    <main class="contenido">
        <h1>Bienvenido al Panel Administrativo</h1>
        <p>Contenido principal aquí...</p>
        <!-- Contenedor principal con display: flex -->
        <div class="container">
            <!-- Sidebar -->
            <div class="sidebar">
                <div class="profile">
                    <div class="avatar"></div>
                    <p class="name">Mariana</p>
                </div>
                <hr>
                <nav>
                    <ul>
                        <li><a href="/vistas/usuariosADMIN.php"><i class="fas fa-users"></i> Usuarios</a></li>
                        <li><a href="/vistas/empleadosADMIN.php"><i class="fas fa-user-tie"></i> Personal</a></li>
                        <li><a href="/vistas/propiedadesADMIN.php"><i class="fas fa-building"></i> Inmuebles</a></li>
                    </ul>
                </nav>
                
                <div class="messages">
                    <i class="fas fa-envelope"></i> Mensajes
                </div>
                <a href="../logout.php">Logout</a>
            </div>
    </main>

    <footer>
        <p>©2025 Inmobiliaria Uriangato, Todos los derechos reservados.</p>
        <p>Información sujeta a cambios sin previo aviso. Las imágenes mostradas son sólo ilustrativas.</p>
    </footer>

</body>
</html>
