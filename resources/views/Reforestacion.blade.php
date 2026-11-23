<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Reforestación - CBTA 35 "Leona Vicario"</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, sans-serif;
        }

        body {
            min-height: 100vh;
            background: linear-gradient(180deg, #bfe9ff 0%, #e3f6e7 45%, #d4edc9 100%);
            position: relative;
            overflow-x: hidden;
            padding-bottom: 60px;
            color: #1b3b1f;
        }

        /* ===== PAISAJE DECORATIVO ===== */
        .paisaje {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40vh;
            z-index: 0;
            pointer-events: none;
            opacity: 0.8;
        }

        .paisaje svg { width: 100%; height: 100%; display: block; }

        .sol { transform-origin: center; animation: brillar 6s ease-in-out infinite; }
        @keyframes brillar {
            0%, 100% { opacity: 0.9; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.05); }
        }
        .nube { animation: moverNube 20s linear infinite; }
        .nube2 { animation: moverNube 28s linear infinite; animation-delay: -10s; }
        @keyframes moverNube {
            0% { transform: translateX(0); }
            50% { transform: translateX(30px); }
            100% { transform: translateX(0); }
        }

        /* ===== CONTENEDOR ===== */
        .contenedor {
            position: relative;
            z-index: 1;
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ===== PORTADA ===== */
        .portada { text-align: center; padding: 40px 20px 15px; }

        .portada .etiqueta {
            display: inline-block;
            background: #2e7d32;
            color: #fff;
            padding: 6px 18px;
            border-radius: 20px;
            font-size: 0.8rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 12px;
            box-shadow: 0 4px 10px rgba(46,125,50,0.3);
        }

        h1 {
            color: #1b5e20;
            font-size: 2.8rem;
            letter-spacing: 1px;
            text-shadow: 2px 2px 6px rgba(255,255,255,0.9);
        }

        

        .subtitulo { color: #33691e; font-size: 1rem; margin-top: 8px; font-style: italic; }

        /* ===== SECCIÓN ===== */
        section {
            background: rgba(255,255,255,0.9);
            backdrop-filter: blur(6px);
            border-radius: 22px;
            padding: 35px;
            margin-bottom: 30px;
            box-shadow: 0 8px 25px rgba(46,125,50,0.15);
            border: 1px solid rgba(76,175,80,0.2);
        }

        section h2 {
            color: #2e7d32;
            font-size: 1.8rem;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 3px solid #a5d6a7;
            padding-bottom: 10px;
        }


        section p {
            line-height: 1.75;
            color: #2b4a2e;
            margin-bottom: 16px;
            text-align: justify;
        }

        /* ===== LISTA CON VIÑETAS ===== */
        ul.lista-verde {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }

        ul.lista-verde li {
            padding: 12px 15px 12px 45px;
            position: relative;
            background: rgba(232,245,233,0.7);
            border-radius: 12px;
            margin-bottom: 10px;
            line-height: 1.6;
            color: #2b4a2e;
            border-left: 4px solid #81c784;
        }

        ul.lista-verde li::before {
            content: "*";
            position: absolute;
            left: 15px;
            color: #2e7d32;
            font-weight: bold;
            font-size: 1.1rem;
        }

        ul.lista-verde li strong {
            color: #1b5e20;
        }

        /* ===== FOOTER ===== */
        footer {
            text-align: center;
            padding: 30px 20px 20px;
            color: #2e7d32;
            font-size: 0.85rem;
            position: relative;
            z-index: 1;
        }

        footer strong { color: #1b5e20; }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 600px) {
            h1 { font-size: 2rem; }
            section { padding: 22px; }
            section h2 { font-size: 1.4rem; }
            .paisaje { height: 30vh; }
        }
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

   

    <!-- ===== CONTENIDO ===== -->
    <div class="contenedor">

        <!-- PORTADA -->
        <div class="portada">
            <span class="etiqueta">CBTA 35 · Leona Vicario</span>
            <center><h1>La Reforestación</h1></center>

        </div>

        <!-- ===== SUBTEMA: LA REFORESTACIÓN ===== -->
        <section>
            <center><h2>La Reforestación</h2></center>

            <p>
                <strong>La reforestación en el CBTa 35 "Leona Vicario" fusiona la educación técnica agropecuaria con la conservación ambiental a través de tres ejes principales. En primer lugar, la comunidad estudiantil realiza jornadas ecológicas enfocadas en plantar árboles para rescatar suelos y proteger zonas forestales críticas, como los bosques de agua en Magdalena Contreras. En segundo lugar, implementan prácticas de cultivo sustentable que incluyen la producción de abono orgánico y el cuidado de especies nativas de alto valor ecológico, como el ahuehuete. Por último, colaboran con dependencias locales en la creación de jardines polinizadores diseñados con flora nativa para preservar insectos esenciales y mantener el equilibrio biológico de la región.    </strong>
            </p>

            <ul class="lista-azul">
                <li><strong>Jornadas ecológicas:</strong> Estudiantes plantan árboles para rescatar suelos y proteger bosques de agua, como en la Extensión de Magdalena Contreras.</li>
                <li><strong>Cultivo sustentable:</strong> Producen abono orgánico y cuidan especies nativas de alto valor ecológico, como el ahuehuete.</li>
                <li><strong>Espacios de biodiversidad:</strong> Crean jardines polinizadores con flora nativa para proteger insectos esenciales en la región.</li>
            </ul>
        </section>

        <!-- ===== FOOTER ===== -->
        <footer>
            <p> Maestro Mariano Sánchez Reyes </p><br> 
            <p>Alumno Salinas Sánchez Diego Osmar</p><br>
            <p>Grado y Grupo: 3°B · Carrera: Programación </p><br>
                <p> Materia: Módulo III</p><br>
            <p style="margin-top: 10px;"> CBTA 35 "Leona Vicario" </p>
        </footer>
    </div>
   <center>
    <a href="{{ url('/') }}" class="boton-volver">← Volver al inicio</a>
</center>
</body>
</html>