<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./vistas/css/estilosADMIN.css">
    <link rel="preload" href="css/normalize.css" as="style" />
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>
<body>
    <header>
        <h1>Administración Inmuebles</h1>
    </header>

    <main>
        <!-- Contenedor principal con display: flex -->
        <div class="container">
             <!-- Botón para mostrar/ocultar menú en móviles -->
        <button class="menu-toggle">☰ Menú</button>
            <!-- Sidebar -->
            <div class="sidebar">
                <div class="profile">
                    <div class="avatar"></div>
                    <p class="name">Mariana</p>
                </div>
                <hr>
                <nav>
                    <ul>
                        <li><a href="usuariosADMIN.htm"><i class="fas fa-users"></i> Usuarios</a></li>
                        <li><a href="empleadosADMIN.htm"><i class="fas fa-user-tie"></i> Personal</a></li>
                        <li><a href="#"><i class="fas fa-building"></i> Inmuebles</a></li>
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
                            <th>Img</th>
                            <th>Código</th>
                            <th>Precio</th>
                            <th>Ubicación</th>
                            <th>Descripción</th>
                            <th>Superficie</th>
                            <th>Habitaciones</th>
                            <th>Baños</th>
                            <th>Tipo</th>
                            <th>Servicios</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <tbody>
                                <tr>
                                    <td data-label="Img"><img src="https://img.freepik.com/foto-gratis/casa-aislada-campo_1303-23773.jpg" alt="Casa"></td>
                                    <td data-label="Código">001</td>
                                    <td data-label="Precio">$300,000</td>
                                    <td data-label="Ubicación">Ciudad A</td>
                                    <td data-label="Descripción">Casa moderna</td>
                                    <td data-label="Superficie">200m²</td>
                                    <td data-label="Habitaciones">3</td>
                                    <td data-label="Baños">2</td>
                                    <td data-label="Tipo">Casa</td>
                                    <td data-label="Servicios">Jardín, Garage</td>
                                    <td data-label="Acciones" class="opciones">
                                        <button class="ver">Ver</button>
                                        <button class="actualizar">Editar</button>
                                        <button class="eliminar">Eliminar</button>
                                    </td>
                                </tr>
                            </tbody>                            
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
    <script>
        // JavaScript para activar/desactivar el menú en móviles
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.sidebar').classList.toggle('active');
        });
    </script>
</body>
</html>
