<!DOCTYPE html>
<html lang="en">
<<<<<<< Updated upstream
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Propiedades</title>
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
=======

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Propiedades</title>
    <link rel="preload" href="css/normalize.css" as="style" />
    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
</head>

<header class="header">
        <div class="logo">
        <img src="img\INMURI_ngo.png" alt="Logo Inmobiliaria">
            <!-- <img src="vistas/img/INMURI_ngo.png" alt="logoInmobiliaria"> -->
        </div>
        <div class="nav-bg">

            <nav class="navegacion-principal">
                <a href="../index.php">Inicio</a>
                <a href="servicios.php">Servicios</a>
                <a href="propiedades.php">Propiedades</a>
                <a href="nosotros.php">Nosotros</a>
                <a href="../login.php">Iniciar sesión</a>
            </nav>
        </div>
    </header>

<body>
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
    <!-- Sección de Propiedades -->
    <section class="seccion-propiedades contenedor">
        <h2>Propiedades Destacadas</h2>
        <p class="subtitulo">Encuentra tu próximo hogar o inversión</p>
        
        <div class="grid-propiedades">
            <!-- Propiedad 1 -->
            <div class="card-propiedad">
                <div class="card-imagen">
                    <img src="https://images.unsplash.com/photo-1564013799919-ab600027ffc6?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Casa moderna">
                    <div class="card-tipo venta">VENTA</div>
                </div>
                <div class="card-contenido">
                    <h3>Casa Residencial en Lomas del Valle</h3>
                    <p class="card-descripcion">Amplia casa de 3 recámaras, 2 baños, cocina integral y jardín. Ideal para familias.</p>
                    <div class="card-caracteristicas">
                        <span>3 Recámaras</span>
                        <span>2 Baños</span>
                        <span>180 m²</span>
                        <span>Jardín</span>
                    </div>
                    <div class="card-precio">
                        $2,450,000 MXN <span class="tipo-operacion">Precio de venta</span>
                    </div>
                    <div class="card-contacto">
                        <i class="fas fa-phone"></i>
                        <a href="tel:+523334445566">33 3444 5566</a>
                    </div>
                    <a href="#" class="card-boton">Agendar visita</a>
                </div>
            </div>
            
            <!-- Propiedad 2 -->
            <div class="card-propiedad">
                <div class="card-imagen">
                    <img src="https://images.unsplash.com/photo-1522708323590-d24dbb6b0267?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Departamento">
                    <div class="card-tipo renta">RENTA</div>
                </div>
                <div class="card-contenido">
                    <h3>Departamento en Centro Histórico</h3>
                    <p class="card-descripcion">Departamento amueblado, 1 recámara, excelente ubicación cerca de plazas y transporte.</p>
                    <div class="card-caracteristicas">
                        <span>1 Recámara</span>
                        <span>1 Baño</span>
                        <span>65 m²</span>
                        <span>Amueblado</span>
                    </div>
                    <div class="card-precio">
                        $8,500 MXN/mes <span class="tipo-operacion">Renta mensual</span>
                    </div>
                    <div class="card-contacto">
                        <i class="fas fa-phone"></i>
                        <a href="tel:+523334445566">33 3444 5566</a>
                    </div>
                    <a href="#" class="card-boton">Agendar visita</a>
                </div>
>>>>>>> Stashed changes
            </div>
            
            <!-- Propiedad 3 -->
            <div class="card-propiedad">
                <div class="card-imagen">
                    <img src="https://images.unsplash.com/photo-1580587771525-78b9dba3b914?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Casa campestre">
                    <div class="card-tipo venta">VENTA</div>
                </div>
                <div class="card-contenido">
                    <h3>Rancho en las Afueras</h3>
                    <p class="card-descripcion">Propiedad con 5 hectáreas, casa principal, establos y pozo de agua. Perfecta para proyectos agropecuarios.</p>
                    <div class="card-caracteristicas">
                        <span>4 Recámaras</span>
                        <span>3 Baños</span>
                        <span>350 m²</span>
                        <span>5 Hectáreas</span>
                    </div>
                    <div class="card-precio">
                        $5,900,000 MXN <span class="tipo-operacion">Precio de venta</span>
                    </div>
                    <div class="card-contacto">
                        <i class="fas fa-phone"></i>
                        <a href="tel:+523334445566">33 3444 5566</a>
                    </div>
                    <a href="#" class="card-boton">Agendar visita</a>
                </div>
            </div>
            
            <!-- Propiedad 4 -->
            <div class="card-propiedad">
                <div class="card-imagen">
                    <img src="https://images.unsplash.com/photo-1493809842364-78817add7ffb?ixlib=rb-1.2.1&auto=format&fit=crop&w=500&q=60" alt="Oficina">
                    <div class="card-tipo renta">RENTA</div>
                </div>
                <div class="card-contenido">
                    <h3>Oficina en Zona Comercial</h3>
                    <p class="card-descripcion">Espacio profesional con recepción, 2 cubículos, baño y área de espera. Incluye servicios básicos.</p>
                    <div class="card-caracteristicas">
                        <span>2 Cubículos</span>
                        <span>1 Baño</span>
                        <span>40 m²</span>
                        <span>Aire acondicionado</span>
                    </div>
                    <div class="card-precio">
                        $12,000 MXN/mes <span class="tipo-operacion">Renta mensual</span>
                    </div>
                    <div class="card-contacto">
                        <i class="fas fa-phone"></i>
                        <a href="tel:+523334445566">33 3444 5566</a>
                    </div>
                    <a href="#" class="card-boton">Agendar visita</a>
                </div>
            </div>
        </div>
    </section>


    <footer>
        <p>©2025 Inmobiliaria Uriangato, Todos los derechos reservados.</p>
        <p>Información sujeta a cambios sin previo aviso. Las imágenes mostradas son sólo ilustrativas.</p>
    </footer>
</body>
</html>