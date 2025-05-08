document.addEventListener('DOMContentLoaded', function () {
    const abrirBtn = document.getElementById('abrirSimulador');
    const cerrarBtn = document.getElementById('cerrarSimulador');
    const modal = document.getElementById('modalSimulador');
    const resultado = document.getElementById('resultadoSimulacion');
    const form = document.getElementById('formSimulador');
    const modalTabla = document.getElementById('modalTabla');
    const contenidoTabla = modalTabla.querySelector('#tabla-dinamica');
  
    let tablaAmortizacion = [];
  
    abrirBtn.addEventListener('click', () => modal.classList.remove('oculto'));
    cerrarBtn.addEventListener('click', () => modal.classList.add('oculto'));
  
    document.querySelectorAll('input[name="tipoCredito"]').forEach(radio => {
      radio.addEventListener('change', e => {
        document.getElementById('form-fija').classList.toggle('oculto', e.target.value !== 'fija');
        document.getElementById('form-apoyo').classList.toggle('oculto', e.target.value !== 'apoyo');
      });
    });
  
    form.addEventListener('submit', function (e) {
      e.preventDefault();
      const tipo = document.querySelector('input[name="tipoCredito"]:checked').value;
      if (tipo === 'fija') calcularTasaFija();
      else calcularApoyo();
    });
  
    function calcularTasaFija() {
      const valor = parseFloat(document.getElementById('valorInmueble').value);
      const enganche = parseFloat(document.getElementById('enganche').value);
      const interes = parseFloat(document.getElementById('interes').value) / 100;
      const plazo = parseInt(document.getElementById('plazo').value);
      const meses = plazo * 12;
      const credito = valor - enganche;
      const mensualidad = (credito * interes / 12) / (1 - Math.pow(1 + interes / 12, -meses));
      const total = mensualidad * meses;
      const ingresos = mensualidad * 2.5;
      const desembolso = mensualidad + enganche;
      generarTabla(credito, interes, meses, mensualidad);
      mostrarResultados(desembolso, mensualidad, ingresos, total, interes, 0);
    }
  
    function calcularApoyo() {
      const valor = parseFloat(document.getElementById('valorInmuebleApoyo').value);
      const enganche = parseFloat(document.getElementById('engancheApoyo').value);
      const ingresos = parseFloat(document.getElementById('ingresosApoyo').value);
      const interes = parseFloat(document.getElementById('interesApoyo').value) / 100;
      const plazoStr = document.getElementById('plazoApoyo').value;
  
      if (!valor || !enganche || !ingresos || !interes || !plazoStr) {
        alert("Por favor completa todos los campos obligatorios del crédito con Apoyo Infonavit.");
        return;
      }
  
      const plazo = parseInt(plazoStr);
      const meses = plazo * 12;
      const subsidio = ingresos <= 8500 ? 120000 : 80000;
      const credito = valor - enganche - subsidio;
      const mensualidad = (credito * interes / 12) / (1 - Math.pow(1 + interes / 12, -meses));
      const total = mensualidad * meses;
      const ingresosRequeridos = mensualidad * 2.5;
      const desembolso = mensualidad + enganche;
  
      generarTabla(credito, interes, meses, mensualidad);
      mostrarResultados(desembolso, mensualidad, ingresosRequeridos, total, interes, subsidio);
    }
  
    function generarTabla(credito, tasa, meses, mensualidad) {
      tablaAmortizacion = [];
      let saldo = credito;
      for (let i = 1; i <= meses; i++) {
        const interesMensual = saldo * (tasa / 12);
        const abonoCapital = mensualidad - interesMensual;
        saldo -= abonoCapital;
        tablaAmortizacion.push({
          mes: i,
          interes: interesMensual,
          abonoCapital: abonoCapital,
          mensualidad: mensualidad,
          saldoRestante: saldo > 0 ? saldo : 0
        });
      }
    }
  
    function mostrarResultados(d, m, i, t, tasa, apoyo) {
      document.getElementById('desembolso').textContent = toMXN(d);
      document.getElementById('mensual').textContent = toMXN(m);
      document.getElementById('ingresos').textContent = toMXN(i);
      document.getElementById('total').textContent = toMXN(t);
      document.getElementById('tasa').textContent = (tasa * 100).toFixed(2) + ' %';
      document.getElementById('apoyo').textContent = toMXN(apoyo);
      resultado.classList.remove('oculto');
    }
  
    function toMXN(val) {
      return val.toLocaleString('es-MX', { style: 'currency', currency: 'MXN' });
    }
  
    document.getElementById('verTabla').addEventListener('click', e => {
      e.preventDefault();
      contenidoTabla.innerHTML = '';
      tablaAmortizacion.forEach(row => {
        const card = document.createElement('div');
        card.classList.add('card-tabla');
        card.innerHTML = `
          <strong>Mes ${row.mes}</strong><br>
          Interés: ${toMXN(row.interes)}<br>
          Abono a capital: ${toMXN(row.abonoCapital)}<br>
          Pago mensual: ${toMXN(row.mensualidad)}<br>
          Saldo restante: ${toMXN(row.saldoRestante)}
        `;
        contenidoTabla.appendChild(card);
      });
      modalTabla.classList.remove('oculto');
    });
  
    // PDF
    document.getElementById('btnPDF').addEventListener('click', () => {
      const { jsPDF } = window.jspdf;
      const doc = new jsPDF();
      const tipo = document.querySelector('input[name="tipoCredito"]:checked').value;
      const valor = tipo === 'fija' ? document.getElementById('valorInmueble').value : document.getElementById('valorInmuebleApoyo').value;
      const enganche = tipo === 'fija' ? document.getElementById('enganche').value : document.getElementById('engancheApoyo').value;
      const ingresos = tipo === 'apoyo' ? document.getElementById('ingresosApoyo').value : document.getElementById('ingresos').textContent;
  
      doc.setFontSize(16);
      doc.text("Resumen Simulador Hipotecario", 20, 20);
      const datos = [
        ["Tipo de crédito", tipo === 'fija' ? "Tasa Fija" : "Apoyo de Interés Social"],
        ["Valor del inmueble", toMXN(parseFloat(valor))],
        ["Enganche", toMXN(parseFloat(enganche))],
        ["Tasa de interés", document.getElementById('tasa').textContent],
        ["Pago mensual", document.getElementById('mensual').textContent],
        ["Pago total", document.getElementById('total').textContent],
        ["Ingresos a comprobar", ingresos],
        ["Apoyo Infonavit", document.getElementById('apoyo').textContent]
      ];
  
      let y = 40;
      datos.forEach(row => {
        doc.text(`${row[0]}: ${row[1]}`, 20, y);
        y += 10;
      });
  
      doc.addPage();
      doc.text("Tabla de Amortización", 20, 20);
      let startY = 30;
      doc.setFontSize(10);
      tablaAmortizacion.forEach(row => {
        doc.text(`Mes ${row.mes}`, 10, startY);
        doc.text(`Interés: ${toMXN(row.interes)}`, 10, startY + 6);
        doc.text(`Capital: ${toMXN(row.abonoCapital)}`, 10, startY + 12);
        doc.text(`Pago: ${toMXN(row.mensualidad)}`, 10, startY + 18);
        doc.text(`Saldo: ${toMXN(row.saldoRestante)}`, 10, startY + 24);
        startY += 35;
        if (startY > 270) {
          doc.addPage();
          startY = 20;
        }
      });
  
      doc.save("simulacion_credito.pdf");
    });
  
    // Excel
    document.getElementById('btnExcel').addEventListener('click', () => {
      const tipo = document.querySelector('input[name="tipoCredito"]:checked').value;
      const valor = tipo === 'fija' ? document.getElementById('valorInmueble').value : document.getElementById('valorInmuebleApoyo').value;
      const enganche = tipo === 'fija' ? document.getElementById('enganche').value : document.getElementById('engancheApoyo').value;
      const ingresos = tipo === 'apoyo' ? document.getElementById('ingresosApoyo').value : document.getElementById('ingresos').textContent;
  
      const wb = XLSX.utils.book_new();
      const resumen = [
        ["Concepto", "Valor"],
        ["Tipo de crédito", tipo === 'fija' ? "Tasa Fija" : "Apoyo de Interés Social"],
        ["Valor del inmueble", toMXN(parseFloat(valor))],
        ["Enganche", toMXN(parseFloat(enganche))],
        ["Tasa de interés", document.getElementById('tasa').textContent],
        ["Pago mensual", document.getElementById('mensual').textContent],
        ["Pago total", document.getElementById('total').textContent],
        ["Ingresos a comprobar", ingresos],
        ["Apoyo Infonavit", document.getElementById('apoyo').textContent]
      ];
  
      const ws1 = XLSX.utils.aoa_to_sheet(resumen);
      XLSX.utils.book_append_sheet(wb, ws1, "Resumen");
  
      const tabla = [["Mes", "Interés", "Abono Capital", "Pago Mensual", "Saldo Restante"]];
      tablaAmortizacion.forEach(row => {
        tabla.push([
          row.mes,
          row.interes,
          row.abonoCapital,
          row.mensualidad,
          row.saldoRestante
        ]);
      });
  
      const ws2 = XLSX.utils.aoa_to_sheet(tabla);
      XLSX.utils.book_append_sheet(wb, ws2, "Amortización");
      XLSX.writeFile(wb, "simulacion_credito.xlsx");
    });
  });
  