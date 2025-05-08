<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Inmobiliaria Uriangato</title>
    <link rel="stylesheet" href="vistas/css/styles.css">
</head>
<body>
    <header class="header">
        <div class="logo">
            <img src="vistas/img/INMURI_ngo.png" alt="Logo Inmobiliaria">
        </div>
        <nav class="navegacion-principal">
            <a href="index.php">Inicio</a>
            <a href="./vistas/servicios.php">Servicios</a>
            <a href="./vistas/propiedades.php">Propiedades</a>
            <a href="./vistas/nosotros.php">Nosotros</a>
            <a href="login.php" class="activo">Iniciar sesión</a>
        </nav>
    </header>

    <main class="contenedor-login">
        <div class="login-box">
            <h1>Iniciar sesión</h1>
            <p class="subtitulo">¡Bienvenido de nuevo!</p>
            <p class="instrucciones">Ingresa tus datos para iniciar sesión</p>
            
            <form method="POST" action="../index.php?accion=login" class="formulario-login">
                <div class="campo">
                    <label for="correo">Email</label>
                    <input type="email" id="correo" name="correo" placeholder="ejemplo@correo.com" required>
                </div>
                <div class="campo">
                    <label for="contrasena">Contraseña</label>
                    <input type="password" id="contrasena" name="contrasena" placeholder="••••••••" required>
                </div>
                <button type="submit" class="boton-login">Iniciar sesión</button>
            </form>
            
            <div class="enlaces-footer">
                <a href="#">¿Olvidaste tu contraseña?</a>
                <a href="#">Regístrate aquí</a>
            </div>
        </div>
    </main>

    <footer class="footer">
        <p>©2025 Inmobiliaria Uriangato, Todos los derechos reservados.</p>
        <p>Información sujeta a cambios sin previo aviso. Las imágenes mostradas son sólo ilustrativas.</p>
    </footer>
</body>
</html>