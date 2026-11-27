<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Especies | CBTa 35</title>
  <style>
    :root { --verde-oscuro: #1b5e20; --verde-medio: #2e7d32; --verde-claro: #e8f5e9; --texto: #263238; --blanco: #ffffff; --sombra: 0 4px 12px rgba(27, 94, 32, 0.12); }
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
    .grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(290px, 1fr)); gap: 20px; margin-bottom: 25px; }
    .card { background: var(--blanco); border-radius: 16px; padding: 20px; box-shadow: var(--sombra); border-left: 5px solid var(--verde-medio); }
    .card h3 { color: var(--verde-oscuro); margin-bottom: 10px; font-size: 1.15rem; }
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
  </main>

  <center>
        <a  class="boton-volver" href="{{route('welcome')}}">← Volver</a>
    </center>

  <footer>
    <center><strong>CBTa No. 35 "Leona Vicario"</strong><br></center>  
    <center><strong>Proyecto Escolar Comunitario (PEC)</strong></center><br>  
    <center><strong>Alumno: Salinas Sánchez Diego Osmar (3°B Programación)</strong></center>
    <center><strong>Maestro: Mariano Sánchez Reyes</strong></center>
  </footer>
</body>
</html>