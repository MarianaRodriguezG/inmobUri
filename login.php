<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="vistas/css/styles.css">
    <link rel="preload" href="vistas/css/normalize.css" as="style" />
    <link rel="stylesheet" href="vistas/css/normalize.css" />
    <link rel="preload" href="css/styles.css" as="style" />
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="vistas/img/INMURI_ngo.png" alt="logoInmobiliaria">

        </div>
        <div class="nav-bg">

            <nav class="navegacion-principal">
                <a href="index.php">Inicio</a>
                <a href="servicios.php">Servicios</a>
                <a href="propiedades.php">Propiedades</a>
                <a href="nosotros.php">Nosotros</a>
                <a href="login.php">Iniciar sesión</a>
            </nav>
        </div>

    </header>
    <h2>Login</h2>
    <form method="POST" action="../index.php?accion=login">
        <label for="correo">Correo:</label>
        <input type="email" name="correo" required><br>

        <label for="contrasena">Contraseña:</label>
        <input type="password" name="contrasena" required><br>

        <button type="submit">Iniciar sesión</button>
    </form>
    <footer>
        <p>©2025 Inmobiliaria Uriangato, Todos los derechos reservados.</p>
        <p>Información sujeta a cambios sin previo aviso. Las imágenes mostradas son sólo ilustrativas.</p>
    </footer>
</body>

</html>