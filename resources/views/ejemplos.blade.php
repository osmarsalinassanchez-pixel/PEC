<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reforestación PEC - CBTa 35 "Leona Vicario"</title>
  <style>
    :root {
      --verde-oscuro: #1b5e20;
      --verde-medio: #2e7d32;
      --verde-claro: #e8f5e9;
      --texto: #263238;
      --blanco: #ffffff;
      --sombra: 0 4px 12px rgba(27, 94, 32, 0.12);
    }

    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    body {
      background-color: #f4f9f4;
      color: var(--texto);
      line-height: 1.6;
    }

    /* ENCABEZADO CON ESTÉTICA DE LA IMAGEN (Degradado verde menta, burbujas y botones píldora) */
    header {
      background: linear-gradient(135deg, #a8e6cf 0%, #dcedc1 50%, #c8e6c9 100%);
      padding: 25px 15px 35px;
      position: relative;
      overflow: hidden;
      box-shadow: 0 4px 15px rgba(0,0,0,0.08);
      text-align: center;
    }

    /* Burbujas decorativas de fondo */
    .burbuja {
      position: absolute;
      border-radius: 50%;
      background: radial-gradient(circle at 30% 30%, rgba(255,255,255,0.7), rgba(255,255,255,0.1));
      pointer-events: none;
    }
    .b1 { width: 90px; height: 90px; top: -20px; left: 30%; }
    .b2 { width: 65px; height: 65px; bottom: 5px; left: 5%; }
    .b3 { width: 45px; height: 45px; bottom: 15px; left: 18%; }
    .b4 { width: 35px; height: 35px; bottom: 10px; left: 25%; }

    .header-info {
      position: relative;
      z-index: 2;
      margin-bottom: 18px;
      color: var(--verde-oscuro);
    }
    .header-info h1 {
      font-size: 1.6rem;
      font-weight: 700;
    }
    .header-info p {
      font-size: 0.9rem;
      opacity: 0.9;
    }

    /* Barra de navegación tipo píldora */
    nav {
      position: relative;
      z-index: 2;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 12px;
      max-width: 1100px;
      margin: 0 auto;
    }

    .nav-btn {
      background: rgba(255, 255, 255, 0.92);
      color: var(--verde-oscuro);
      border: none;
      padding: 10px 22px;
      border-radius: 50px;
      font-size: 0.95rem;
      font-weight: 600;
      cursor: pointer;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.08);
      transition: all 0.25s ease;
    }

    .nav-btn:hover, .nav-btn.active {
      background: var(--verde-oscuro);
      color: var(--blanco);
      transform: translateY(-2px);
      box-shadow: 0 6px 14px rgba(27, 94, 32, 0.25);
    }

    /* CONTENEDOR PRINCIPAL */
    main {
      max-width: 1100px;
      margin: 30px auto;
      padding: 0 20px;
    }

    .seccion {
      display: none;
      animation: fadeIn 0.35s ease;
    }
    .seccion.activa {
      display: block;
    }

    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(8px); }
      to { opacity: 1; transform: translateY(0); }
    }

    h2 {
      color: var(--verde-oscuro);
      border-bottom: 3px solid #a8e6cf;
      padding-bottom: 8px;
      margin-bottom: 20px;
      font-size: 1.5rem;
    }

    /* TARJETAS Y GRID */
    .grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(290px, 1fr));
      gap: 20px;
      margin-bottom: 25px;
    }

    .card {
      background: var(--blanco);
      border-radius: 16px;
      padding: 20px;
      box-shadow: var(--sombra);
      border-left: 5px solid var(--verde-medio);
    }

    .card h3 {
      color: var(--verde-oscuro);
      margin-bottom: 10px;
      font-size: 1.15rem;
    }

    /* MÉTRICAS DE IMPACTO (HU-09) */
    .stats-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
      gap: 15px;
      margin-bottom: 25px;
    }

    .stat-box {
      background: var(--blanco);
      border-radius: 14px;
      padding: 18px;
      text-align: center;
      box-shadow: var(--sombra);
      border-top: 4px solid var(--verde-medio);
    }

    .stat-num {
      font-size: 2rem;
      font-weight: bold;
      color: var(--verde-oscuro);
    }

    /* FORMULARIOS Y TABLAS */
    .form-panel {
      background: var(--blanco);
      padding: 20px;
      border-radius: 16px;
      box-shadow: var(--sombra);
      margin-bottom: 25px;
    }

    .form-row {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 12px;
      margin-bottom: 12px;
    }

    input, select {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #cfd8dc;
      border-radius: 8px;
      font-size: 0.95rem;
    }

    button.btn-accion {
      background: var(--verde-medio);
      color: white;
      border: none;
      padding: 10px 20px;
      border-radius: 8px;
      font-weight: 600;
      cursor: pointer;
    }

    button.btn-accion:hover {
      background: var(--verde-oscuro);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: var(--blanco);
      border-radius: 12px;
      overflow: hidden;
      box-shadow: var(--sombra);
    }

    th, td {
      padding: 12px 15px;
      text-align: left;
      border-bottom: 1px solid #eceff1;
    }

    th {
      background-color: var(--verde-oscuro);
      color: var(--blanco);
    }

    .badge {
      padding: 4px 10px;
      border-radius: 20px;
      font-size: 0.8rem;
      font-weight: bold;
    }
    .badge-ok { background: #c8e6c9; color: #1b5e20; }
    .badge-alerta { background: #ffcdd2; color: #b71c1c; }

    /* PASE DIGITAL QR (HU-02) */
    .pase-qr {
      display: none;
      margin-top: 15px;
      padding: 15px;
      background: var(--verde-claro);
      border: 2px dashed var(--verde-medio);
      border-radius: 12px;
      text-align: center;
    }

    footer {
      text-align: center;
      padding: 20px;
      margin-top: 40px;
      background: #e8f5e9;
      color: var(--verde-oscuro);
      font-size: 0.9rem;
    }
  </style>
</head>
<body>

  <!-- ENCABEZADO CON LOS 7 TEMAS DE LA IMAGEN -->
  <header>
    <div class="burbuja b1"></div>
    <div class="burbuja b2"></div>
    <div class="burbuja b3"></div>
    <div class="burbuja b4"></div>

    <div class="header-info">
      <h1>Sistema Integral de Reforestación — CBTa 35 "Leona Vicario"</h1>
      <p>Proyecto Escolar Comunitario (PEC) | Módulo III — Carrera: Programación (3°B)</p>
    </div>

    <nav>
      <button class="nav-btn active" onclick="mostrarSeccion('inicio', this)">Inicio</button>
      <button class="nav-btn" onclick="mostrarSeccion('reforestacion', this)">Reforestación</button>
      <button class="nav-btn" onclick="mostrarSeccion('beneficios', this)">Beneficios</button>
      <button class="nav-btn" onclick="mostrarSeccion('tipos', this)">Tipos de Árboles</button>
      <button class="nav-btn" onclick="mostrarSeccion('caracteristicas', this)">Características</button>
      <button class="nav-btn" onclick="mostrarSeccion('plantacion', this)">Plantación</button>
      <button class="nav-btn" onclick="mostrarSeccion('especies', this)">Especies</button>
    </nav>
  </header>

  <main>
    <!-- 1. INICIO (Contexto PEC + Tablero de Impacto HU-09) -->
    <section id="inicio" class="seccion activa">
      <h2>Inicio: Reforestación en el CBTa 35 y Valle de Chalco</h2>
      <p style="margin-bottom: 20px;">
        La reforestación en el <strong>CBTa 35 "Leona Vicario"</strong> fusiona la educación técnica agropecuaria con la conservación ambiental mediante jornadas ecológicas, cultivo sustentable y espacios de biodiversidad en coordinación con Valle de Chalco y zonas limítrofes.
      </p>

      <!-- HU-09: Reportes de Impacto en tiempo real -->
      <div class="stats-grid">
        <div class="stat-box">
          <div class="stat-num" id="stat-arboles">2,000</div>
          <div>Árboles Plantados (Arranque)</div>
        </div>
        <div class="stat-box">
          <div class="stat-num">15,000</div>
          <div>Meta Municipal Valle de Chalco</div>
        </div>
        <div class="stat-box">
          <div class="stat-num" id="stat-voluntarios">48</div>
          <div>Voluntarios Registrados</div>
        </div>
        <div class="stat-box">
          <div class="stat-num" id="stat-co2">44 ton</div>
          <div>Captura Estimada de CO₂/año</div>
        </div>
      </div>

      <div class="grid">
        <div class="card">
          <h3>Jornadas Ecológicas</h3>
          <p>Plantación de árboles para rescatar suelos y proteger zonas forestales críticas, como los bosques de agua en la Extensión de Magdalena Contreras y Av. Estanislao Ramírez.</p>
        </div>
        <div class="card">
          <h3>Cultivo Sustentable</h3>
          <p>Producción de abono orgánico en el plantel y cuidado de especies nativas de alto valor ecológico como el <strong>ahuehuete</strong>.</p>
        </div>
        <div class="card">
          <h3>Espacios de Biodiversidad</h3>
          <p>Creación de jardines polinizadores con flora nativa en colaboración con dependencias locales para preservar insectos esenciales.</p>
        </div>
      </div>
    </section>

    <!-- 2. REFORESTACIÓN (HU-01 Gestión de Campañas + HU-02 Registro de Voluntarios) -->
    <section id="reforestacion" class="seccion">
      <h2>Gestión de Campañas y Registro de Voluntarios (HU-01 / HU-02)</h2>
      
      <!-- Formulario HU-01: Crear Campaña -->
      <div class="form-panel">
        <h3>Publicar Nueva Jornada de Reforestación (Coordinador)</h3>
        <div class="form-row">
          <input type="text" id="camp-nombre" placeholder="Nombre de la jornada (ej. Rescate Av. Estanislao)">
          <input type="date" id="camp-fecha">
          <input type="text" id="camp-coords" placeholder="Coordenadas GPS (ej. 19.291, -98.938)">
          <input type="number" id="camp-meta" placeholder="Meta de árboles">
          <input type="number" id="camp-cupo" placeholder="Cupo máximo voluntarios">
        </div>
        <button class="btn-accion" onclick="agregarCampana()">Publicar Campaña</button>
      </div>

      <!-- Tabla de Campañas Activas + Inscripción HU-02 -->
      <table>
        <thead>
          <tr>
            <th>Jornada</th>
            <th>Fecha</th>
            <th>Ubicación GPS</th>
            <th>Meta Árboles</th>
            <th>Cupos Disp.</th>
            <th>Acción (HU-02)</th>
          </tr>
        </thead>
        <tbody id="tabla-campanas">
          <tr>
            <td>Jornada Estanislao Ramírez - Tláhuac</td>
            <td>2026-12-05</td>
            <td>19.2915, -98.9421</td>
            <td>500</td>
            <td id="cupo-0">25</td>
            <td><button class="btn-accion" onclick="inscribirse(0, 'Jornada Estanislao Ramírez')">Inscribirme</button></td>
          </tr>
          <tr>
            <td>Reforestación Bosques de Agua (Magdalena Contreras)</td>
            <td>2026-12-12</td>
            <td>19.3021, -99.2450</td>
            <td>800</td>
            <td id="cupo-1">40</td>
            <td><button class="btn-accion" onclick="inscribirse(1, 'Bosques de Agua')">Inscribirme</button></td>
          </tr>
        </tbody>
      </table>

      <!-- Pase Digital QR generado al inscribirse (HU-02) -->
      <div id="pase-digital" class="pase-qr">
        <h3>Pase Digital de Voluntario Confirmado</h3>
        <p id="pase-texto"></p>
        <p style="font-size: 0.85rem; margin-top: 6px;"><strong>Materiales sugeridos:</strong> Guantes de carnaza, pala recta, botella de agua reutilizable y gorra.</p>
        <div style="margin-top:10px; font-family: monospace; background: white; display: inline-block; padding: 10px 18px; border-radius: 8px; border: 1px solid #ccc;">
          [ CÓDIGO QR: CBTA35-VOL-<span id="qr-folio"></span> ]
        </div>
      </div>
    </section>

    <!-- 3. BENEFICIOS (Del documento PEC) -->
    <section id="beneficios" class="seccion">
      <h2>Beneficios y Ventajas de la Reforestación en el CBTa 35</h2>
      <div class="grid">
        <div class="card">
          <h3>1. Beneficios Ambientales y Climáticos</h3>
          <p>• Captura de dióxido de carbono (CO₂) y liberación de oxígeno.<br>
             • Regulación térmica: reduce las islas de calor en patios y aulas.<br>
             • Acueductos naturales: redistribuyen el agua absorbida hacia mantos acuíferos y evitan la erosión del suelo.</p>
        </div>
        <div class="card">
          <h3>2. Fortalecimiento Académico y Técnico</h3>
          <p>• Funciona como un <strong>laboratorio vivo</strong> para estudiantes.<br>
             • Práctica real en diseño de viveros, análisis de suelos, selección de especies y control de plagas.</p>
        </div>
        <div class="card">
          <h3>3. Impacto Social y Vinculación</h3>
          <p>• Involucra a ejidatarios, padres de familia y autoridades (CONAFOR, PROBOSQUE, Municipio de Valle de Chalco).<br>
             • Acceso a programas de donación gratuita de arbolado para centros educativos.</p>
        </div>
      </div>
    </section>

    <!-- 4. TIPOS DE ÁRBOLES (HU-03 Inventario de Vivero) -->
    <section id="tipos" class="seccion">
      <h2>Inventario de Vivero y Tipos de Árboles (HU-03)</h2>
      <p style="margin-bottom: 15px;">Control de stock disponible en el vivero escolar. El sistema alerta automáticamente si el stock baja del mínimo (15 ejemplares).</p>

      <div class="form-panel">
        <h3>Registrar / Actualizar Stock en Vivero</h3>
        <div class="form-row">
          <input type="text" id="viv-especie" placeholder="Especie (ej. Ahuehuete)">
          <select id="viv-tipo">
            <option value="Nativa / Riparia">Nativa / Riparia</option>
            <option value="Forestal / Captación">Forestal / Captación</option>
            <option value="Polinizadora / Urbana">Polinizadora / Urbana</option>
          </select>
          <input type="number" id="viv-altura" placeholder="Altura promedio (cm)">
          <input type="number" id="viv-stock" placeholder="Cantidad disponible">
        </div>
        <button class="btn-accion" onclick="agregarVivero()">Guardar en Inventario</button>
      </div>

      <table>
        <thead>
          <tr>
            <th>Especie</th>
            <th>Clasificación</th>
            <th>Altura Promedio</th>
            <th>Stock Disponible</th>
            <th>Estado (HU-03)</th>
          </tr>
        </thead>
        <tbody id="tabla-vivero">
          <tr>
            <td>Ahuehuete (Taxodium mucronatum)</td>
            <td>Nativa / Riparia</td>
            <td>120 cm</td>
            <td>45</td>
            <td><span class="badge badge-ok">Stock Óptimo</span></td>
          </tr>
          <tr>
            <td>Pino Ayacahuite</td>
            <td>Forestal / Captación</td>
            <td>85 cm</td>
            <td>10</td>
            <td><span class="badge badge-alerta">Stock Bajo (&lt;15)</span></td>
          </tr>
          <tr>
            <td>Tronadora / Flora Polinizadora</td>
            <td>Polinizadora / Urbana</td>
            <td>60 cm</td>
            <td>32</td>
            <td><span class="badge badge-ok">Stock Óptimo</span></td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- 5. CARACTERÍSTICAS (Problemáticas Ambientales del CBTa 35) -->
    <section id="caracteristicas" class="seccion">
      <h2>Características y Problemáticas Ambientales del CBTa 35</h2>
      <p style="margin-bottom: 18px;">Diagnóstico técnico de la zona de Valle de Chalco y límites con Ixtapaluca para garantizar la supervivencia de los árboles:</p>
      <div class="grid">
        <div class="card">
          <h3>Estrés Hídrico y Sequía</h3>
          <p>Clima semiárido a templado con temporadas de estiaje prolongadas. Requiere programación de riego constante durante los primeros años.</p>
        </div>
        <div class="card">
          <h3>Calidad y Tipo de Suelo</h3>
          <p>Suelos de origen ex-lacustre o compactados por la urbanización que carecen de nutrientes orgánicos. Se soluciona aplicando abono orgánico producido en el CBTa 35.</p>
        </div>
        <div class="card">
          <h3>Elección de Especies Adecuadas</h3>
          <p>Evitar especies ornamentales de alto consumo de agua; priorizar árboles resistentes a la compactación y contaminación de la Carretera Federal México-Puebla.</p>
        </div>
        <div class="card">
          <h3>Seguimiento Post-Plantación</h3>
          <p>Conformación de brigadas estudiantiles de mantenimiento a 3, 6 y 12 meses para evitar la mortalidad tras las jornadas masivas.</p>
        </div>
      </div>
    </section>

    <!-- 6. PLANTACIÓN (HU-05 Registro en Campo + HU-06 / HU-11 Seguimiento y Riego) -->
    <section id="plantacion" class="seccion">
      <h2>Registro en Campo y Seguimiento de Riego (HU-05 / HU-06 / HU-11)</h2>
      
      <div class="form-panel">
        <h3>Registrar Árbol Plantado / Inspección de Sobrevivencia</h3>
        <div class="form-row">
          <input type="text" id="reg-id" placeholder="ID Ejemplar (ej. ARB-004)">
          <input type="text" id="reg-especie" placeholder="Especie plantada">
          <input type="text" id="reg-zona" placeholder="Polígono / Zona (ej. Perímetro Sur)">
          <select id="reg-estado">
            <option value="Sano - Riego al día">Sano - Riego al día</option>
            <option value="Requiere Riego (Estiaje)">Requiere Riego (Estiaje)</option>
            <option value="Alerta de Plaga / Sequía">Alerta de Plaga / Sequía</option>
          </select>
        </div>
        <button class="btn-accion" onclick="registrarArbol()">Registrar en Bitácora</button>
      </div>

      <table>
        <thead>
          <tr>
            <th>ID Árbol</th>
            <th>Especie</th>
            <th>Polígono / Zona</th>
            <th>Revisión</th>
            <th>Estado de Sobrevivencia</th>
          </tr>
        </thead>
        <tbody id="tabla-plantacion">
          <tr>
            <td>ARB-001</td>
            <td>Ahuehuete</td>
            <td>Jardín Polinizador CBTa 35</td>
            <td>3 meses</td>
            <td><span class="badge badge-ok">Sano - Riego al día</span></td>
          </tr>
          <tr>
            <td>ARB-002</td>
            <td>Fresno Nativo</td>
            <td>Av. Estanislao Ramírez</td>
            <td>6 meses</td>
            <td><span class="badge badge-alerta">Requiere Riego (Estiaje)</span></td>
          </tr>
        </tbody>
      </table>
    </section>

    <!-- 7. ESPECIES (HU-10 Guía Técnica de Especies Nativas) -->
    <section id="especies" class="seccion">
      <h2>Guía Técnica de Especies Nativas (HU-10)</h2>
      <p style="margin-bottom: 18px;">Fichas técnicas para voluntarios principiantes sobre cómo plantar y cuidar cada especie local:</p>
      <div class="grid">
        <div class="card">
          <h3>Ahuehuete (Taxodium mucronatum)</h3>
          <p><strong>Profundidad de cepa:</strong> 60 cm x 60 cm.<br>
             <strong>Distancia entre árboles:</strong> 5 a 6 metros.<br>
             <strong>Requerimiento de riego:</strong> Alto en el primer año; ideal para zonas con humedad o bordes de canales.</p>
        </div>
        <div class="card">
          <h3>Pino / Oyamel (Zonas de Captación)</h3>
          <p><strong>Profundidad de cepa:</strong> 40 cm x 40 cm.<br>
             <strong>Distancia entre árboles:</strong> 3 metros.<br>
             <strong>Requerimiento de riego:</strong> Moderado; excelente para infiltración de agua en zonas altas como Magdalena Contreras.</p>
        </div>
        <div class="card">
          <h3>Flora Nativa Polinizadora</h3>
          <p><strong>Profundidad de cepa:</strong> 30 cm x 30 cm.<br>
             <strong>Distancia entre plantas:</strong> 80 cm.<br>
             <strong>Requerimiento de riego:</strong> Bajo; tolera sequía y atrae abejas, mariposas y colibríes esenciales para el equilibrio biológico.</p>
        </div>
      </div>
    </section>
  </main>

  <footer>
    <strong>CBTa No. 35 "Leona Vicario"</strong> — Proyecto Escolar Comunitario (PEC) | Alumno: Salinas Sánchez Diego Osmar (3°B Programación) | Maestro: Mariano Sánchez Reyes
  </footer>

  <script>
    // Navegación entre las 7 pestañas de la imagen
    function mostrarSeccion(idSeccion, boton) {
      document.querySelectorAll('.seccion').forEach(sec => sec.classList.remove('activa'));
      document.querySelectorAll('.nav-btn').forEach(btn => btn.classList.remove('active'));
      
      document.getElementById(idSeccion).classList.add('activa');
      boton.classList.add('active');
    }

    // HU-01: Agregar nueva campaña
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
          <td><button class="btn-accion" onclick="inscribirse(${idx}, '${nombre}')">Inscribirme</button></td>
        </tr>
      `;
      document.getElementById('tabla-campanas').insertAdjacentHTML('beforeend', fila);
      document.getElementById('camp-nombre').value = '';
      document.getElementById('camp-coords').value = '';
      document.getElementById('camp-meta').value = '';
      document.getElementById('camp-cupo').value = '';
    }

    // HU-02: Inscripción de voluntario con descuento de cupo y pase QR
    function inscribirse(idx, nombreCampana) {
      const celdaCupo = document.getElementById('cupo-' + idx);
      let cupos = parseInt(celdaCupo.innerText);
      if (cupos <= 0) {
        alert("Lo sentimos, ya no hay cupos disponibles para esta jornada.");
        return;
      }
      celdaCupo.innerText = cupos - 1;

      // Actualizar contador global en Inicio
      const statVol = document.getElementById('stat-voluntarios');
      statVol.innerText = parseInt(statVol.innerText) + 1;

      // Mostrar Pase Digital QR
      const folio = Math.floor(100000 + Math.random() * 900000);
      document.getElementById('pase-texto').innerText = `Lugar asegurado en: ${nombreCampana}`;
      document.getElementById('qr-folio').innerText = folio;
      document.getElementById('pase-digital').style.display = 'block';
    }

    // HU-03: Inventario de vivero con alerta de stock mínimo
    function agregarVivero() {
      const especie = document.getElementById('viv-especie').value;
      const tipo = document.getElementById('viv-tipo').value;
      const altura = document.getElementById('viv-altura').value;
      const stock = parseInt(document.getElementById('viv-stock').value);

      if (!especie || isNaN(stock)) {
        alert("Ingresa el nombre de la especie y la cantidad en stock.");
        return;
      }

      const estadoHTML = stock < 15 
        ? '<span class="badge badge-alerta">Stock Bajo (&lt;15)</span>' 
        : '<span class="badge badge-ok">Stock Óptimo</span>';

      const fila = `
        <tr>
          <td>${especie}</td>
          <td>${tipo}</td>
          <td>${altura || 50} cm</td>
          <td>${stock}</td>
          <td>${estadoHTML}</td>
        </tr>
      `;
      document.getElementById('tabla-vivero').insertAdjacentHTML('beforeend', fila);
      document.getElementById('viv-especie').value = '';
      document.getElementById('viv-altura').value = '';
      document.getElementById('viv-stock').value = '';
    }

    // HU-05 & HU-06: Registro de árbol plantado y monitoreo
    function registrarArbol() {
      const id = document.getElementById('reg-id').value;
      const especie = document.getElementById('reg-especie').value;
      const zona = document.getElementById('reg-zona').value;
      const estado = document.getElementById('reg-estado').value;

      if (!id || !especie || !zona) {
        alert("Completa el ID, la especie y el polígono.");
        return;
      }

      const badgeClass = estado.includes('Sano') ? 'badge-ok' : 'badge-alerta';
      const fila = `
        <tr>
          <td>${id}</td>
          <td>${especie}</td>
          <td>${zona}</td>
          <td>Recién plantado</td>
          <td><span class="badge ${badgeClass}">${estado}</span></td>
        </tr>
      `;
      document.getElementById('tabla-plantacion').insertAdjacentHTML('beforeend', fila);

      // Sumar 1 árbol al tablero de Inicio
      const statArb = document.getElementById('stat-arboles');
      const actual = parseInt(statArb.innerText.replace(',', ''));
      statArb.innerText = (actual + 1).toLocaleString();

      document.getElementById('reg-id').value = '';
      document.getElementById('reg-especie').value = '';
      document.getElementById('reg-zona').value = '';
    }
  </script>
</body>
</html>