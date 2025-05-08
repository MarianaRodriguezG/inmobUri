<!-- simulador de hipoteca -->
<!DOCTYPE html>
<html lang="es-MX">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Servicios</title>
  <link rel="stylesheet" href="css/styles.css" />
  <link rel="stylesheet" href="css/normalize.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" />
</head>

<body class="hipotecabody">
  <header class="header">
    <div class="logo"><img src="img/INMURI_ngo.png" alt="Logo Inmobiliaria" /></div>
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

  <section class="seccion-servicios contenedor">
    <h2>Nuestros Servicios</h2>
    <p class="subtitulo">Expertos en hacer realidad tus proyectos inmobiliarios</p>
    <div class="grid-servicios">
      <div class="card-servicio">
        <i class="fas fa-chart-line icono-servicio"></i>
        <h3>Tasaciones Profesionales</h3>
        <p>Valoramos tu propiedad con metodologías certificadas, considerando mercado local y tendencias de plusvalía.</p>
        <ul style="text-align: left; padding-left: 20px; margin-bottom: 20px;">
          <li>Informe detallado con comparables</li>
          <li>Para ventas, herencias o créditos</li>
          <li>Tasadores certificados</li>
        </ul>
        <button id="abrirSimulador" class="boton" type="button">Simular Crédito</button>
      </div>
    </div>
  </section>

  <!-- Modal del simulador -->
  <section id="modalSimulador" class="modal-simulador oculto">
    <div class="modal-contenido">
      <button class="cerrar-modal" id="cerrarSimulador">&times;</button>
      <h2>Simulador de Crédito Hipotecario</h2>

      <form id="formSimulador">
        <fieldset>
          <legend>Tipo de Crédito:</legend>
          <label><input type="radio" name="tipoCredito" value="fija" checked /> Tasa Fija</label>
          <label><input type="radio" name="tipoCredito" value="apoyo" /> Apoyo de Interés Social</label>
        </fieldset>

        <div id="form-fija">
          <label>Valor del Inmueble*:</label>
          <input type="number" id="valorInmueble" required />
          <label>Enganche*:</label>
          <input type="number" id="enganche" required />
          <label>Interés anual (%)*:</label>
          <input type="number" id="interes" step="0.01" required />
          <label>Plazo (años)*:</label>
          <select id="plazo" required>
            <option value="">Selecciona plazo</option>
            <option>10</option><option>15</option><option>20</option>
          </select>
          <button type="submit" class="boton">Calcular</button>
        </div>

        <div id="form-apoyo" class="oculto">
          <label>Valor del Inmueble*:</label>
          <input type="number" id="valorInmuebleApoyo" />
          <label>Enganche*:</label>
          <input type="number" id="engancheApoyo" />
          <label>Ingresos del usuario*:</label>
          <input type="number" id="ingresosApoyo" />
          <label>Interés anual (%)*:</label>
          <input type="number" id="interesApoyo" step="0.01" />
          <label>Plazo (años)*:</label>
          <select id="plazoApoyo">
            <option value="">Selecciona plazo</option>
            <option>10</option><option>15</option><option>20</option>
          </select>
          <!-- ✅ Botón corregido -->
          <button type="submit" class="boton">Calcular</button>
        </div>
      </form>

      <div id="resultadoSimulacion" class="oculto">
        <h3>Resultados</h3>
        <div class="resultado-card"><strong>DESEMBOLSO INICIAL:</strong><div id="desembolso"></div></div>
        <div class="resultado-card"><strong>PAGO MENSUAL:</strong><div id="mensual"></div></div>
        <div class="resultado-card"><strong>INGRESOS A COMPROBAR:</strong><div id="ingresos"></div></div>
        <div class="resultado-card"><strong>PAGO TOTAL:</strong><div id="total"></div></div>
        <div class="resultado-card"><strong>TASA DE INTERÉS:</strong><div id="tasa"></div></div>
        <div class="resultado-card"><strong>APOYO INFONAVIT:</strong><div id="apoyo">$0.00</div></div>
        <div class="resultado-card"><strong>CAT:</strong><div id="cat">13.2%</div></div>
        <div class="resultado-card"><strong>TABLA DE AMORTIZACIÓN:</strong><a href="#" id="verTabla">Ver tabla</a></div>

        <div class="acciones-resultados">
          <button class="boton boton-pdf" id="btnPDF"><i class="fas fa-file-pdf"></i> Descargar PDF</button>
          <button class="boton boton-excel" id="btnExcel"><i class="fas fa-file-excel"></i> Descargar Excel</button>
          <button class="boton boton-imprimir" onclick="window.print()"><i class="fas fa-print"></i> Imprimir</button>
        </div>
      </div>
    </div>
  </section>

  <!-- Modal para tabla -->
  <section id="modalTabla" class="modal-simulador oculto">
    <div class="modal-contenido">
      <button class="cerrar-modal" onclick="document.getElementById('modalTabla').classList.add('oculto')">&times;</button>
      <h3>Tabla de Amortización</h3>
      <div id="tabla-dinamica"><!-- Se llena con JS --></div>
    </div>
  </section>

  <footer>
    <p>©2025 Inmobiliaria Uriangato, Todos los derechos reservados.</p>
    <p>Información sujeta a cambios sin previo aviso. Las imágenes mostradas son sólo ilustrativas.</p>
  </footer>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.18.5/xlsx.full.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
  <script src="js/simulador.js"></script>
</body>
</html>
