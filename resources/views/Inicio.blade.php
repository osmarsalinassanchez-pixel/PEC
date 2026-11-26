<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio | Reforestación CBTa 35</title>
  <style>
    :root { --azul-oscuro: #1241da77; --verde-medio: #12da97; --verde-claro: #e8f5e9; --texto: #263238; --blanco: #ffffff; --sombra: 0 4px 12px rgba(27, 94, 32, 0.12); }
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
    .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(200px, 1fr)); gap: 15px; margin-bottom: 25px; }
    .stat-box { background: var(--blanco); border-radius: 14px; padding: 18px; text-align: center; box-shadow: var(--sombra); border-top: 4px solid var(--verde-medio); }
    .stat-num { font-size: 2rem; font-weight: bold; color: var(--verde-oscuro); }
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
    
  </header>

  <main>
    <h2>Inicio: Reforestación en el CBTa 35 y Valle de Chalco</h2>
    <p style="margin-bottom: 20px;">
      La reforestación en el <strong>CBTa 35 "Leona Vicario"</strong> fusiona la educación técnica agropecuaria con la conservación ambiental mediante jornadas ecológicas, cultivo sustentable y espacios de biodiversidad en coordinación con Valle de Chalco y zonas limítrofes.
    </p>

    <div class="stats-grid">
      <div class="stat-box">
        <div class="stat-num">2,000</div>
        <div>Árboles Plantados (Arranque)</div>
      </div>
      <div class="stat-box">
        <div class="stat-num">15,000</div>
        <div>Meta Municipal Valle de Chalco</div>
      </div>
      <div class="stat-box">
        <div class="stat-num">48</div>
        <div>Voluntarios Registrados</div>
      </div>
      <div class="stat-box">
        <div class="stat-num">44 ton</div>
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
  </main>

  <center>
        <a  class="boton-volver" href="{{route('welcome')}}">← Volver</a>
    </center>

  <footer>
    <strong>CBTa No. 35 "Leona Vicario"</strong> — Proyecto Escolar Comunitario (PEC) | Alumno: Salinas Sánchez Diego Osmar (3°B Programación) | Maestro: Mariano Sánchez Reyes
  </footer>
</body>
</html>