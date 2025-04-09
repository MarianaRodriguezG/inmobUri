<?php
session_start();
$usuario = $_SESSION['usuario_nombre'] ?? null;
?>
<!DOCTYPE html>
<html lang="es-MX">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inmobiliaria Uriangato</title>
    <link rel="stylesheet" href="vistas/css/styles.css">
    <link rel="preload" href="vistas/css/normalize.css" as="style" />
    <link rel="stylesheet" href="vistas/css/normalize.css" />
    <link rel="preload" href="vistas/css/styles.css" as="style" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<body>
    <header class="header">
        <div class="logo">
            <img src="vistas/img/INMURI_ngo.png" alt="logoInmobiliaria">
        </div>
        <div class="nav-bg">
            <nav class="navegacion-principal">
                <a href="index.php">Inicio</a>
                <a href="vistas/servicios.php">Servicios</a>
                <a href="vistas/propiedades.php">Propiedades</a>
                <a href="vistas/nosotros.php">Nosotros</a>
                <?php if ($usuario): ?>
                    <a href="logout.php">Cerrar sesión (<?php echo htmlspecialchars($usuario); ?>)</a>
                <?php else: ?>
                    <a href="login.php">Iniciar sesión</a>
                <?php endif; ?>
            </nav>
        </div>
    </header>

    <main>
        <section class="hero">
            <h1>Encuentra tu hogar ideal</h1>
            <div class="actions">
                <button>RENTAR</button>
                <button>COMPRAR</button>
            </div>
            <section class="search-filter-bar">
                <form>
                    <div class="form-group">
                        <label for="property-type">TIPO INMUEBLE</label>
                        <select id="property-type">
                            <option>Departamento</option>
                            <option>Casa</option>
                            <option>Oficina</option>
                            <option>Local Comercial</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="location">ZONA</label>
                        <input type="text" id="location" placeholder="Ingresar ubicación">
                    </div>

                    <button type="submit">Buscar</button>
                </form>
            </section>
        </section>

        <section class="ubicacion">
            <div class="mapa">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3736.8948213309923!2d-101.1782126!3d20.1318455!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842cc85e09bdabcd%3A0x123456789abcdef!2sAv.%20Educaci%C3%B3n%20Superior%202000%2C%20Uriangato%2C%20Gto.!5e0!3m2!1ses-419!2smx!4v1712624952845!5m2!1ses-419!2smx"
                    width="100%"
                    height="350"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade">
                </iframe>

            </div>

            <aside class="info-ubicacion">
                <h2><i class="fa-solid fa-map-location-dot"></i> ¿Dónde nos encontramos?</h2>
                <p><i class="fa-solid fa-map-marker-alt"></i> <strong>Domicilio: </strong> Av.Edu.Superior #2000, Uriangato, Gto.</p>
                <p><i class="fa-solid fa-phone"></i> <strong>Tel: </strong> 4454581915</p>
                <p><i class="fa-solid fa-envelope"></i> <strong>Email: </strong> contacto@inmuri.com</p>
                <p><i class="fa-solid fa-clock"></i> <strong>Horario: </strong> L-V, 9:00 AM-3:00 PM</p>
            </aside>
        </section>
    </main>

    <footer>
        <p>©2025 Inmobiliaria Uriangato, Todos los derechos reservados.</p>
        <p>Información sujeta a cambios sin previo aviso. Las imágenes mostradas son sólo ilustrativas.</p>
    </footer>
</body>

</html>