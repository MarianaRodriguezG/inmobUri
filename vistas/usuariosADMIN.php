<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Admin</title>
    <link rel="stylesheet" href="css/estilosADMIN.css">
    <link rel="preload" href="css/normalize.css" as="style" />
    <link rel="stylesheet" href="css/normalize.css" />
    <link rel="preload" href="css/estilosADMIN.css" as="style" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">

</head>
<body>
    <header>
        <h1>Administración Usuarios</h1>
    </header>

    <main>
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
                        <li><a href="#"><i class="fas fa-users"></i> Usuarios</a></li>
                        <li><a href="empleadosADMIN.php"><i class="fas fa-user-tie"></i> Personal</a></li>
                        <li><a href="propiedadesADMIN.php"><i class="fas fa-building"></i> Inmuebles</a></li>
                    </ul>
                </nav>
                <div class="messages">
                    <i class="fas fa-envelope"></i> Mensajes
                </div>
            </div>

            <!-- Detalles de la propiedad (tabla) -->
            <section class="detallesPropiedad">
                <table>
                    <thead>
                        <tr>
                            <th>Foto</th>
                            <th>Nombre</th>
                            <th>ID</th>
                            <th>Dirección</th>
                            <th>Teléfono</th>
                            <th>Correo</th>
                            <th>Acción</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <img src="https://e7.pngegg.com/pngimages/312/283/png-clipart-man-s-face-avatar-computer-icons-user-profile-business-user-avatar-blue-face-thumbnail.png" alt="">
                            </td>
                            <td>Alfredo Huerta</td>
                            <td>VF6353F</td>
                            <td>Ciudad A</td>
                            <td>443 102 3667</td>
                            <td>example@gmail.com</td>
                            <td class="opciones">
                                <button class="ver">Ver</button>
                                <button class="actualizar">Actualizar</button>
                                <button class="eliminar">Eliminar</button>
                            </td>
                        </tr>
                        <!-- Más filas según sea necesario -->
                    </tbody>
                </table>
            </section>
        </div>
    </main>

    <footer>
        <p>2025 Inmobiliaria Urlangato, Todos los derechos reservados.</p>
        <p>Información sujeta a cambios sin previo aviso. Las imágenes mostradas son sólo ilustrativas.</p>
    </footer>
</body>
</html>
