<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reforestación | CBTa 35</title>
  <style>
    :root { --verde-oscuro: #1b5e20; --verde-medio: #2e7d32; --verde-claro: #e8f5e9; --rojo-borrar: #c62828; --rojo-hover: #8e0000; --texto: #263238; --blanco: #ffffff; --sombra: 0 4px 12px rgba(27, 94, 32, 0.12); }
    * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; }
    body { background-color: #f4f9f4; color: var(--texto); line-height: 1.6; }
    header { background: linear-gradient(135deg, #a8e6cf 0%, #dcedc1 50%, #c8e6c9 100%); padding: 25px 15px 35px; position: relative; overflow: hidden; box-shadow: 0 4px 15px rgba(0,0,0,0.08); text-align: center; }
    .burbuja { position: absolute; border-radius: 50%; background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.7), rgba(255,255,255,0.1)); pointer-events: none; }
    .b1 { width: 90px; height: 90px; top: -20px; left: 30%; }
    .b2 { width: 65px; height: 65px; bottom: 5px; left: 5%; }
    .b3 { width: 45px; height: 45px; bottom: 15px; left: 18%; }
    .b4 { width: 35px; height: 35px; bottom: 10px; left: 25%; }
    .header-info { position: relative; z-index: 2; margin-bottom: 18px; color: var(--verde-oscuro); }
    .header-info h1 { font-size: 1.6rem; font-weight: 700; }
    .header-info p { font-size: 0.9rem; opacity: 0.9; }
    nav { position: relative; z-index: 2; display: flex; flex-wrap: wrap; justify-content: center; gap: 12px; max-width: 1100px; margin: 0 auto; }
    .nav-btn { text-decoration: none; background: rgba(255, 255, 255, 0.92); color: var(--verde-oscuro); padding: 10px 22px; border-radius: 50px; font-size: 0.95rem; font-weight: 600; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08); transition: all 0.25s ease; }
    .nav-btn:hover, .nav-btn.active { background: var(--verde-oscuro); color: var(--blanco); transform: translateY(-2px); box-shadow: 0 6px 14px rgba(27, 94, 32, 0.25); }
    main { max-width: 1100px; margin: 30px auto; padding: 0 20px; }
    h2 { color: var(--verde-oscuro); border-bottom: 3px solid #a8e6cf; padding-bottom: 8px; margin-bottom: 20px; font-size: 1.5rem; }
    .form-panel { background: var(--blanco); padding: 20px; border-radius: 16px; box-shadow: var(--sombra); margin-bottom: 25px; }
    .form-panel h3 { color: var(--verde-oscuro); margin-bottom: 12px; }
    .form-row { display: grid; grid-template-columns: repeat(auto-fit, minmax(180px, 1fr)); gap: 12px; margin-bottom: 12px; }
    input { width: 100%; padding: 10px 12px; border: 1px solid #cfd8dc; border-radius: 8px; font-size: 0.95rem; }
    
    /* Contenedor en fila para los botones de Acción */
    .acciones-fila {
      display: flex;
      align-items: center;
      gap: 8px;
      white-space: nowrap;
    }

    button.btn-accion { background: var(--verde-medio); color: white; border: none; padding: 8px 14px; border-radius: 8px; font-weight: 600; cursor: pointer; }
    button.btn-accion:hover { background: var(--verde-oscuro); }
    
    button.btn-eliminar { background: var(--rojo-borrar); color: white; border: none; width: 32px; height: 32px; border-radius: 8px; font-weight: bold; font-size: 0.95rem; cursor: pointer; display: inline-flex; align-items: center; justify-content: center; }
    button.btn-eliminar:hover { background: var(--rojo-hover); }

    table { width: 100%; border-collapse: collapse; background: var(--blanco); border-radius: 12px; overflow: hidden; box-shadow: var(--sombra); }
    th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #eceff1; }
    th { background-color: var(--verde-oscuro); color: var(--blanco); }
    .mensaje-confirmacion { display: none; margin-top: 20px; padding: 20px; background: var(--verde-claro); border: 2px solid var(--verde-medio); border-radius: 14px; text-align: center; color: var(--verde-oscuro); }
    .mensaje-confirmacion h3 { font-size: 1.3rem; margin-bottom: 8px; }
    footer { text-align: center; padding: 20px; margin-top: 40px; background: #e8f5e9; color: var(--verde-oscuro); font-size: 0.9rem; }
    .boton-volver {
            display: inline-block;
            margin: 20px auto;
            padding: 12px 30px;
            background: linear-gradient(135deg, #1a3a3a, #0f2626);
            color: white;
            text-decoration: none;
            border-radius: 30px;
            font-weight: bold;
            transition: transform 0.3s, background 0.3s;
        }
        
        .boton-volver:hover {
            transform: scale(1.05);
            background: linear-gradient(135deg, #0f2626, #1a3a3a);
        }
  </style>
</head>
<body>
  <header>
    <div class="burbuja b1"></div><div class="burbuja b2"></div>
    <div class="burbuja b3"></div><div class="burbuja b4"></div>
    <div class="header-info">
      <h1>Sistema Integral de Reforestación — CBTa 35 "Leona Vicario"</h1>
      <p>Proyecto Escolar Comunitario (PEC) | Módulo III — Carrera: Programación (3°B)</p>
    </div>
    
  </header>

  <main>
    <h2>Gestión de Campañas y Registro de Voluntarios</h2>
    
    <div class="form-panel">
      <h3>Publicar Nueva Jornada de Reforestación (Coordinador)</h3>
      <div class="form-row">
        <input type="text" id="camp-nombre" placeholder="Nombre de la jornada (ej. Rescate Av. Estanislao)">
        <input type="date" id="camp-fecha">
        <input type="text" id="camp-coords" placeholder="Lugar">
        <input type="number" id="camp-meta" placeholder="Meta de árboles">
        <input type="number" id="camp-cupo" placeholder="Cupo máximo voluntarios">
      </div>
      <button class="btn-accion" onclick="agregarCampana()">Publicar Campaña</button>
    </div>

    <table>
      <thead>
        <tr>
          <th>Jornada</th>
          <th>Fecha</th>
          <th>Lugar</th>
          <th>Meta Árboles</th>
          <th>Cupos Disp.</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody id="tabla-campanas">
        <tr>
          <td>Jornada Estanislao Ramírez - Tláhuac</td>
          <td>2026-12-05</td>
          <td>Tláhuac</td>
          <td>500</td>
          <td id="cupo-0">25</td>
          <td>
            <div class="acciones-fila">
              <button class="btn-accion" onclick="inscribirse(0, 'Jornada Estanislao Ramírez')">Inscribirme</button>
              <button class="btn-eliminar" title="Eliminar campaña" onclick="eliminarCampana(this)">X</button>
            </div>
          </td>
        </tr>
        <tr>
          <td>Reforestación Bosques de Agua (Amecameca)</td>
          <td>2026-12-12</td>
          <td>Volcanes</td>
          <td>800</td>
          <td id="cupo-1">40</td>
          <td>
            <div class="acciones-fila">
              <button class="btn-accion" onclick="inscribirse(1, 'Bosques de Agua')">Inscribirme</button>
              <button class="btn-eliminar" title="Eliminar campaña" onclick="eliminarCampana(this)">X</button>
            </div>
          </td>
        </tr>
      </tbody>
    </table>

    <!-- Mensaje de confirmación al inscribirse -->
    <div id="caja-confirmacion" class="mensaje-confirmacion">
      <h3>Gracias por inscribirte a la campaña voluntaria</h3>
      <p id="detalle-campana" style="font-weight: 600;"></p>
      <p style="font-size: 0.9rem; margin-top: 8px; color: #263238;">
        <strong>Materiales sugeridos:</strong> Guantes de carnaza, pala recta, botella de agua reutilizable y gorra.
      </p>
    </div>
  </main>

  <footer>
    <strong>CBTa No. 35 "Leona Vicario"</strong> — Proyecto Escolar Comunitario (PEC) | Alumno: Salinas Sánchez Diego Osmar (3°B Programación) | Maestro: Mariano Sánchez Reyes
  </footer>

  <script>
    let contadorCampanas = 2;

    function agregarCampana() {
      const nombre = document.getElementById('camp-nombre').value;
      const fecha = document.getElementById('camp-fecha').value;
      const coords = document.getElementById('camp-coords').value;
      const meta = document.getElementById('camp-meta').value;
      const cupo = document.getElementById('camp-cupo').value;

      if (!nombre || !fecha || !cupo) {
        alert("Por favor completa al menos el nombre, fecha y cupo de la jornada.");
        return;
      }

      const idx = contadorCampanas++;
      const fila = `
        <tr>
          <td>${nombre}</td>
          <td>${fecha}</td>
          <td>${coords || 'Por definir'}</td>
          <td>${meta || 100}</td>
          <td id="cupo-${idx}">${cupo}</td>
          <td>
            <div class="acciones-fila">
              <button class="btn-accion" onclick="inscribirse(${idx}, '${nombre}')">Inscribirme</button>
              <button class="btn-eliminar" title="Eliminar campaña" onclick="eliminarCampana(this)">X</button>
            </div>
          </td>
        </tr>`;
      document.getElementById('tabla-campanas').insertAdjacentHTML('beforeend', fila);
      document.getElementById('camp-nombre').value = '';
      document.getElementById('camp-fecha').value = '';
      document.getElementById('camp-coords').value = '';
      document.getElementById('camp-meta').value = '';
      document.getElementById('camp-cupo').value = '';
    }

    function inscribirse(idx, nombreCampana) {
      const celdaCupo = document.getElementById('cupo-' + idx);
      let cupos = parseInt(celdaCupo.innerText);
      if (cupos <= 0) {
        alert("Lo sentimos, ya no hay cupos disponibles para esta jornada.");
        return;
      }
      celdaCupo.innerText = cupos - 1;
      document.getElementById('detalle-campana').innerText = `Jornada seleccionada: ${nombreCampana}`;
      document.getElementById('caja-confirmacion').style.display = 'block';
    }

    function eliminarCampana(boton) {
      if (confirm("¿Estás seguro de que deseas eliminar esta campaña?")) {
        const fila = boton.closest('tr');
        fila.remove();
      }
    }
  </script>
    <center>
        <a  class="boton-volver" href="{{route('welcome')}}">← Volver</a>
    </center>
</body>
</html>