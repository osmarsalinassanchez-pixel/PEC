<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tipos de Árboles | CBTa 35</title>
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
    input, select { width: 100%; padding: 10px 12px; border: 1px solid #cfd8dc; border-radius: 8px; font-size: 0.95rem; }
    button.btn-accion { background: var(--verde-medio); color: white; border: none; padding: 10px 20px; border-radius: 8px; font-weight: 600; cursor: pointer; }
    button.btn-accion:hover { background: var(--verde-oscuro); }
    button.btn-eliminar { background: var(--rojo-borrar); color: white; border: none; width: 32px; height: 32px; border-radius: 8px; font-weight: bold; font-size: 0.95rem; cursor: pointer; display: inline-flex; align-items: center; justify-content: center; }
    button.btn-eliminar:hover { background: var(--rojo-hover); }
    table { width: 100%; border-collapse: collapse; background: var(--blanco); border-radius: 12px; overflow: hidden; box-shadow: var(--sombra); }
    th, td { padding: 12px 15px; text-align: left; border-bottom: 1px solid #eceff1; }
    th { background-color: var(--verde-oscuro); color: var(--blanco); }
    .badge { padding: 4px 10px; border-radius: 20px; font-size: 0.8rem; font-weight: bold; }
    .badge-ok { background: #c8e6c9; color: #1b5e20; }
    .badge-alerta { background: #ffcdd2; color: #b71c1c; }
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
    <nav>
       <nav>
  <a href="{{ route('Inicio') }}" class="nav-btn">Inicio</a>
  <a href="{{ route('Reforestacion') }}" class="nav-btn">Reforestación</a>
  <a href="{{ route('Beneficios') }}" class="nav-btn">Beneficios</a>
  <a href="{{ route('Arboles') }}" class="nav-btn active">Tipos de Árboles</a>
  <a href="{{ route('Caracteristicas') }}" class="nav-btn">Características</a>
  <a href="{{ route('Plantacion') }}" class="nav-btn">Plantación</a>
  <a href="{{ route('Especies') }}" class="nav-btn">Especies</a>
  <a href="{{ route('ejemplos') }}" class="nav-btn">Ejemplos</a>
</nav>
    </nav>
  </header>

  <main>
    <h2>Inventario de Vivero y Tipos de Árboles</h2>
    <p style="margin-bottom: 15px;">Control de stock disponible en el vivero escolar. El sistema alerta automáticamente si la Cnatidad es baja del mínimo (15 ejemplares).</p>

    <div class="form-panel">
      <h3>Registrar / Actualizar Cantidad en Vivero</h3>
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
          <th>Cantidad Disponible</th>
          <th>Estado</th>
          <th>Acción</th>
        </tr>
      </thead>
      <tbody id="tabla-vivero">
        <tr>
          <td>Ahuehuete (Taxodium mucronatum)</td>
          <td>Nativa / Riparia</td>
          <td>120 cm</td>
          <td>45</td>
          <td><span class="badge badge-ok">Cantidad Óptimo</span></td>
          <td><button class="btn-eliminar" title="Eliminar especie" onclick="eliminarFila(this)">X</button></td>
        </tr>
        <tr>
          <td>Pino Ayacahuite</td>
          <td>Forestal / Captación</td>
          <td>85 cm</td>
          <td>10</td>
          <td><span class="badge badge-alerta">Cantidad Bajo (&lt;15)</span></td>
          <td><button class="btn-eliminar" title="Eliminar especie" onclick="eliminarFila(this)">X</button></td>
        </tr>
        <tr>
          <td>Tronadora / Flora Polinizadora</td>
          <td>Polinizadora / Urbana</td>
          <td>60 cm</td>
          <td>32</td>
          <td><span class="badge badge-ok">Cantidad Óptimo</span></td>
          <td><button class="btn-eliminar" title="Eliminar especie" onclick="eliminarFila(this)">X</button></td>
        </tr>
      </tbody>
    </table>
  </main>

  <footer>
    <center><strong>CBTa No. 35 "Leona Vicario"</strong><br></center>  
    <center><strong>Proyecto Escolar Comunitario (PEC)</strong></center><br>  
    <center><strong>Alumno: Salinas Sánchez Diego Osmar (3°B Programación)</strong></center>
    <center><strong>Maestro: Mariano Sánchez Reyes</strong></center>
  </footer>

  <script>
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
          <td><button class="btn-eliminar" title="Eliminar especie" onclick="eliminarFila(this)">X</button></td>
        </tr>`;
      document.getElementById('tabla-vivero').insertAdjacentHTML('beforeend', fila);
      document.getElementById('viv-especie').value = '';
      document.getElementById('viv-altura').value = '';
      document.getElementById('viv-stock').value = '';
    }

    function eliminarFila(boton) {
      if (confirm("¿Estás seguro de que deseas eliminar esta especie del inventario?")) {
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