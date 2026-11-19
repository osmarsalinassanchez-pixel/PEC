<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>La Reforestación - CBTA 35</title>
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
            height: 45vh;
            z-index: 0;
            pointer-events: none;
            opacity: 0.85;
        }

        .paisaje svg {
            width: 100%;
            height: 100%;
            display: block;
        }

        .sol {
            transform-origin: center;
            animation: brillar 6s ease-in-out infinite;
        }

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

        /* ===== CONTENEDOR GENERAL ===== */
        .contenedor {
            position: relative;
            z-index: 1;
            max-width: 1100px;
            margin: 0 auto;
            padding: 0 20px;
        }

        /* ===== ENCABEZADO ===== */
        .portada {
            text-align: center;
            padding: 50px 20px 20px;
        }

        .portada .etiqueta {
            display: inline-block;
            background: #2e7d32;
            color: #fff;
            padding: 6px 18px;
            border-radius: 20px;
            font-size: 0.85rem;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 15px;
            box-shadow: 0 4px 10px rgba(46,125,50,0.3);
        }

        h1 {
            color: #1b5e20;
            font-size: 3rem;
            letter-spacing: 1px;
            text-shadow: 2px 2px 6px rgba(255,255,255,0.9);
        }

        h1::after {
            content: "🌱";
            display: block;
            font-size: 2rem;
            margin-top: 10px;
        }

        .subtitulo {
            color: #33691e;
            font-size: 1.1rem;
            margin-top: 10px;
            font-style: italic;
        }

        /* ===== NAVEGACIÓN (BOTONES) ===== */
        nav {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            padding: 30px 0 10px;
            position: sticky;
            top: 0;
            background: rgba(227, 246, 231, 0.85);
            backdrop-filter: blur(8px);
            z-index: 10;
            padding: 15px;
            border-radius: 0 0 20px 20px;
            margin-bottom: 30px;
        }

        nav a {
            text-decoration: none;
            color: #1b5e20;
            background: linear-gradient(145deg, #ffffff, #e8f5e9);
            padding: 10px 18px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.85rem;
            box-shadow: 0 4px 10px rgba(46,125,50,0.2);
            border: 2px solid rgba(76,175,80,0.4);
            transition: all 0.3s ease;
        }

        nav a:hover {
            background: linear-gradient(145deg, #4caf50, #388e3c);
            color: #fff;
            transform: translateY(-3px);
            box-shadow: 0 8px 18px rgba(46,125,50,0.4);
        }

        /* ===== SECCIONES ===== */
        section {
            background: rgba(255,255,255,0.85);
            backdrop-filter: blur(6px);
            border-radius: 22px;
            padding: 35px;
            margin-bottom: 40px;
            box-shadow: 0 8px 25px rgba(46,125,50,0.15);
            border: 1px solid rgba(76,175,80,0.2);
            scroll-margin-top: 100px;
        }

        section h2 {
            color: #2e7d32;
            font-size: 1.9rem;
            margin-bottom: 18px;
            display: flex;
            align-items: center;
            gap: 12px;
            border-bottom: 3px solid #a5d6a7;
            padding-bottom: 10px;
        }

        section h2::before {
            content: "🌳";
            font-size: 1.7rem;
        }

        section p {
            line-height: 1.75;
            color: #2b4a2e;
            margin-bottom: 16px;
            text-align: justify;
        }

        /* ===== TARJETAS DE EJES ===== */
        .ejes {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-top: 20px;
        }

        .eje {
            background: linear-gradient(145deg, #f1f8e9, #e8f5e9);
            border-radius: 16px;
            padding: 22px;
            border-left: 6px solid #4caf50;
            box-shadow: 0 4px 12px rgba(46,125,50,0.1);
            transition: transform 0.3s ease;
        }

        .eje:hover {
            transform: translateY(-5px);
        }

        .eje h3 {
            color: #1b5e20;
            font-size: 1.1rem;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .eje p {
            font-size: 0.95rem;
            margin: 0;
            color: #3e5c40;
        }

        /* ===== LISTAS ===== */
        ul.lista-verde {
            list-style: none;
            padding: 0;
            margin: 15px 0;
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
            content: "✔";
            position: absolute;
            left: 15px;
            color: #2e7d32;
            font-weight: bold;
            font-size: 1.1rem;
        }

        /* ===== TARJETAS DE BENEFICIOS ===== */
        .beneficios {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 18px;
            margin-top: 20px;
        }

        .beneficio {
            background: linear-gradient(145deg, #ffffff, #f1f8e9);
            border-radius: 16px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 12px rgba(46,125,50,0.12);
            border-top: 5px solid #66bb6a;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .beneficio:hover {
            transform: translateY(-6px);
            box-shadow: 0 10px 22px rgba(46,125,50,0.25);
        }

        .beneficio .icono {
            font-size: 2.2rem;
            display: block;
            margin-bottom: 10px;
        }

        .beneficio h4 {
            color: #2e7d32;
            margin-bottom: 8px;
            font-size: 1rem;
        }

        .beneficio p {
            font-size: 0.9rem;
            color: #3e5c40;
            margin: 0;
            text-align: center;
        }

        /* ===== PROBLEMÁTICAS (ALERTAS) ===== */
        .problemas {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(260px, 1fr));
            gap: 18px;
            margin-top: 20px;
        }

        .problema {
            background: linear-gradient(145deg, #fff8e1, #ffecb3);
            border-radius: 16px;
            padding: 20px;
            border-left: 6px solid #ff9800;
            box-shadow: 0 4px 12px rgba(255,152,0,0.15);
        }

        .problema h4 {
            color: #e65100;
            margin-bottom: 8px;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .problema p {
            font-size: 0.9rem;
            color: #6d4c41;
            margin: 0;
        }

        /* ===== IMÁGENES DE EJEMPLO ===== */
        .galeria {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(240px, 1fr));
            gap: 16px;
            margin-top: 20px;
        }

        .galeria .foto {
            border-radius: 16px;
            overflow: hidden;
            box-shadow: 0 6px 18px rgba(46,125,50,0.2);
            position: relative;
            height: 180px;
            display: flex;
            align-items: flex-end;
            justify-content: center;
            color: #fff;
            font-weight: 600;
            text-shadow: 1px 1px 4px rgba(0,0,0,0.6);
            padding: 15px;
        }

        .foto1 { background: linear-gradient(135deg, #4caf50, #1b5e20); }
        .foto2 { background: linear-gradient(135deg, #81c784, #388e3c); }
        .foto3 { background: linear-gradient(135deg, #a5d6a7, #2e7d32); }
        .foto4 { background: linear-gradient(135deg, #66bb6a, #1b5e20); }

        /* ===== PIE DE PÁGINA ===== */
        footer {
            text-align: center;
            padding: 30px 20px 20px;
            color: #2e7d32;
            font-size: 0.9rem;
            position: relative;
            z-index: 1;
        }

        footer strong {
            color: #1b5e20;
        }

        /* ===== RESPONSIVE ===== */
        @media (max-width: 600px) {
            h1 { font-size: 2rem; }
            section { padding: 22px; }
            section h2 { font-size: 1.4rem; }
            .paisaje { height: 35vh; }
            nav a { padding: 8px 14px; font-size: 0.8rem; }
        }
    </style>
</head>

<body>

    <!-- ===== PAISAJE DECORATIVO ===== -->
    <div class="paisaje">
        <svg viewBox="0 0 1440 500" preserveAspectRatio="xMidYMax slice" xmlns="http://www.w3.org/2000/svg">
            <!-- Sol -->
            <g class="sol">
                <circle cx="1150" cy="110" r="45" fill="#ffe082" opacity="0.95"/>
                <circle cx="1150" cy="110" r="65" fill="#ffe082" opacity="0.35"/>
                <circle cx="1150" cy="110" r="85" fill="#ffe082" opacity="0.18"/>
            </g>
            <!-- Nubes -->
            <g class="nube" fill="#ffffff" opacity="0.85">
                <ellipse cx="300" cy="90" rx="55" ry="22"/>
                <ellipse cx="340" cy="80" rx="40" ry="20"/>
                <ellipse cx="260" cy="82" rx="35" ry="18"/>
            </g>
            <g class="nube2" fill="#ffffff" opacity="0.7">
                <ellipse cx="800" cy="130" rx="50" ry="20"/>
                <ellipse cx="840" cy="120" rx="38" ry="18"/>
                <ellipse cx="760" cy="122" rx="32" ry="16"/>
            </g>
            <!-- Montaña lejana -->
            <path d="M0,500 L0,320 L180,180 L340,300 L480,200 L640,330 L820,190 L980,320 L1140,210 L1300,310 L1440,230 L1440,500 Z" fill="#a5d6a7" opacity="0.7"/>
            <!-- Montaña media -->
            <path d="M0,500 L0,380 L220,250 L400,360 L580,260 L760,380 L940,270 L1120,370 L1300,280 L1440,360 L1440,500 Z" fill="#81c784" opacity="0.85"/>
            <path d="M580,260 L610,285 L595,285 L580,275 L565,285 L550,285 Z" fill="#ffffff" opacity="0.9"/>
            <path d="M940,270 L970,295 L955,295 L940,285 L925,295 L910,295 Z" fill="#ffffff" opacity="0.9"/>
            <!-- Colina -->
            <path d="M0,500 L0,430 Q360,370 720,420 Q1080,470 1440,410 L1440,500 Z" fill="#66bb6a"/>
            <!-- Árboles -->
            <g>
                <rect x="115" y="405" width="10" height="45" fill="#795548"/>
                <circle cx="120" cy="395" r="28" fill="#388e3c"/>
                <circle cx="100" cy="405" r="22" fill="#43a047"/>
                <circle cx="140" cy="405" r="22" fill="#43a047"/>
            </g>
            <g>
                <rect x="300" y="425" width="9" height="40" fill="#795548"/>
                <circle cx="304" cy="415" r="25" fill="#2e7d32"/>
                <circle cx="286" cy="425" r="20" fill="#388e3c"/>
                <circle cx="322" cy="425" r="20" fill="#388e3c"/>
            </g>
            <g>
                <rect x="480" y="445" width="10" height="38" fill="#795548"/>
                <circle cx="485" cy="435" r="26" fill="#388e3c"/>
                <circle cx="465" cy="445" r="21" fill="#43a047"/>
                <circle cx="505" cy="445" r="21" fill="#43a047"/>
            </g>
            <g>
                <rect x="700" y="430" width="10" height="45" fill="#795548"/>
                <circle cx="705" cy="418" r="27" fill="#2e7d32"/>
                <circle cx="683" cy="428" r="21" fill="#388e3c"/>
                <circle cx="727" cy="428" r="21" fill="#388e3c"/>
            </g>
            <g>
                <rect x="920" y="440" width="9" height="40" fill="#795548"/>
                <circle cx="924" cy="430" r="25" fill="#388e3c"/>
                <circle cx="906" cy="440" r="20" fill="#43a047"/>
                <circle cx="942" cy="440" r="20" fill="#43a047"/>
            </g>
            <g>
                <rect x="1120" y="420" width="10" height="45" fill="#795548"/>
                <circle cx="1125" cy="408" r="27" fill="#2e7d32"/>
                <circle cx="1103" cy="418" r="21" fill="#388e3c"/>
                <circle cx="1147" cy="418" r="21" fill="#388e3c"/>
            </g>
            <g>
                <rect x="1320" y="405" width="12" height="55" fill="#795548"/>
                <circle cx="1326" cy="392" r="32" fill="#388e3c"/>
                <circle cx="1300" cy="405" r="25" fill="#43a047"/>
                <circle cx="1352" cy="405" r="25" fill="#43a047"/>
            </g>
            <g>
                <rect x="30" y="440" width="8" height="35" fill="#795548"/>
                <circle cx="34" cy="430" r="22" fill="#388e3c"/>
                <circle cx="18" cy="440" r="18" fill="#43a047"/>
                <circle cx="50" cy="440" r="18" fill="#43a047"/>
            </g>
        </svg>
    </div>

    <!-- ===== PORTADA ===== -->
    <div class="contenedor">
        <div class="portada">
            <span class="etiqueta">Propuesta Escolar · CBTA 35</span>
            <h1>La Reforestación</h1>
            <p class="subtitulo">"Leona Vicario" — Valle de Chalco · Educación técnica agropecuaria y conservación ambiental</p>
        </div>

        <!-- ===== NAVEGACIÓN ===== -->
        <nav>
            <a href="#inicio">Inicio</a>
            <a href="#ejes">Ejes</a>
            <a href="#beneficios">Beneficios</a>
            <a href="#ventajas">Ventajas</a>
            <a href="#valle">Valle de Chalco</a>
            <a href="#problematicas">Problemáticas</a>
            <a href="#fuentes">Fuentes</a>
        </nav>

        <!-- ===== INICIO / INTRO ===== -->
        <section id="inicio">
            <h2>La Reforestación en el CBTA 35</h2>
            <p>
                La reforestación en el <strong>CBTa 35 "Leona Vicario"</strong> fusiona la educación técnica agropecuaria con la conservación ambiental a través de tres ejes principales. La comunidad estudiantil realiza jornadas ecológicas enfocadas en plantar árboles para rescatar suelos y proteger zonas forestales críticas, como los bosques de agua en Magdalena Contreras.
            </p>
            <p>
                Además, implementan prácticas de cultivo sustentable que incluyen la producción de abono orgánico y el cuidado de especies nativas de alto valor ecológico, como el <em>ahuehuete</em>. Por último, colaboran con dependencias locales en la creación de jardines polinizadores diseñados con flora nativa para preservar insectos esenciales y mantener el equilibrio biológico de la región.
            </p>
        </section>

        <!-- ===== EJES PRINCIPALES ===== -->
        <section id="ejes">
            <h2>Tres Ejes Principales</h2>
            <div class="ejes">
                <div class="eje">
                    <h3>🌱 Jornadas ecológicas</h3>
                    <p>Estudiantes plantan árboles para rescatar suelos y proteger bosques de agua, como en la Extensión de Magdalena Contreras.</p>
                </div>
                <div class="eje">
                    <h3>🌿 Cultivo sustentable</h3>
                    <p>Producen abono orgánico y cuidan especies nativas de alto valor ecológico, como el ahuehuete.</p>
                </div>
                <div class="eje">
                    <h3>🐝 Espacios de biodiversidad</h3>
                    <p>Crean jardines polinizadores con flora nativa para proteger insectos esenciales en la región.</p>
                </div>
            </div>
        </section>

        <!-- ===== BENEFICIOS ===== -->
        <section id="beneficios">
            <h2>Beneficios de la Reforestación</h2>
            <p>
                La reforestación en el CBTA No. 35 aporta importantes beneficios ambientales, educativos y comunitarios. En el aspecto ambiental, la plantación de árboles contribuye directamente a la captura de carbono y a la purificación del aire.
            </p>

            <div class="beneficios">
                <div class="beneficio">
                    <span class="icono">💨</span>
                    <h4>Aire limpio</h4>
                    <p>Captura de carbono y purificación del aire.</p>
                </div>
                <div class="beneficio">
                    <span class="icono">💧</span>
                    <h4>Ciclo del agua</h4>
                    <p>Regula la infiltración de lluvia hacia los mantos acuíferos.</p>
                </div>
                <div class="beneficio">
                    <span class="icono">🪨</span>
                    <h4>Suelo protegido</h4>
                    <p>Reduce la erosión en terrenos propensos a desgastarse.</p>
                </div>
                <div class="beneficio">
                    <span class="icono">🌡️</span>
                    <h4>Microclimas frescos</h4>
                    <p>Genera refugios naturales para la biodiversidad local.</p>
                </div>
                <div class="beneficio">
                    <span class="icono">🎓</span>
                    <h4>Laboratorio vivo</h4>
                    <p>Los estudiantes aplican conocimientos reales sobre viveros y suelos.</p>
                </div>
                <div class="beneficio">
                    <span class="icono">🤝</span>
                    <h4>Trabajo en equipo</h4>
                    <p>Promueve una cultura ecológica que se extiende a la comunidad.</p>
                </div>
            </div>

            <p style="margin-top: 20px;">
                Al plantar árboles en terrenos degradados o espacios sin uso, contribuimos a la lucha contra el cambio climático y a la recuperación de la vida silvestre. Los árboles producen oxígeno, purifican el aire, forman suelos fértiles, evitan erosión, mantienen ríos limpios, captan agua para los acuíferos, sirven como refugios para la fauna y mejoran el paisaje.
            </p>
        </section>

        <!-- ===== VENTAJAS ===== -->
        <section id="ventajas">
            <h2>Ventajas de la Reforestación</h2>
            <p>
                La implementación de proyectos de reforestación dentro y alrededor de los Centros de Bachillerato Tecnológico Agropecuario (CBTA), y específicamente en el CBTA 35, representa una estrategia clave que genera beneficios de gran impacto en tres ejes fundamentales: el ambiental, el académico y el comunitario.
            </p>

            <h3 style="color:#2e7d32; margin: 20px 0 10px; font-size:1.2rem;">🌍 Beneficios ambientales y climáticos</h3>
            <ul class="lista-verde">
                <li>Mitigación del cambio climático mediante la captura de CO₂ y liberación de oxígeno.</li>
                <li>Reguladores térmicos naturales que crean microclimas más frescos.</li>
                <li>Sistemas radiculares que protegen la capa fértil del suelo contra la erosión.</li>
                <li>Mejora la filtración de agua hacia los mantos acuíferos, evitando encharcamientos.</li>
                <li>Refugios biológicos para polinizadores, aves e insectos locales.</li>
            </ul>

            <h3 style="color:#2e7d32; margin: 20px 0 10px; font-size:1.2rem;">🎓 Fortalecimiento académico y técnico</h3>
            <ul class="lista-verde">
                <li>Laboratorio vivo de educación ambiental y técnica.</li>
                <li>Aplicación práctica de conocimientos sobre diseño de viveros y análisis de suelos.</li>
                <li>Selección de especies adecuadas, técnicas de plantación y control de plagas.</li>
                <li>Desarrollo de competencias laborales reales y cultura forestal sostenible.</li>
            </ul>

            <h3 style="color:#2e7d32; margin: 20px 0 10px; font-size:1.2rem;">🤝 Impacto social y vinculación comunitaria</h3>
            <ul class="lista-verde">
                <li>Mejora la imagen institucional y promueve la vinculación con la comunidad.</li>
                <li>Involucra a ejidatarios, padres de familia y autoridades locales.</li>
                <li>Abre puertas a colaboraciones con CONAFOR y secretarías de medio ambiente.</li>
                <li>Facilita el acceso a donaciones de plantas, capacitaciones y recursos técnicos.</li>
            </ul>
        </section>

        <!-- ===== VALLE DE CHALCO ===== -->
        <section id="valle">
            <h2>Reforestación en Valle de Chalco</h2>
            <p>
                El municipio se ha sumado a la <strong>Jornada Nacional de Reforestación</strong> encabezada por el presidente municipal Alan Velasco Agüero, con compromisos de plantación de miles de árboles (como los arranques de 2,000 árboles iniciales de una meta de 15,000 en coordinación con zonas ecológicas y limítrofes), además de trabajos de restauración hidrológica forestal.
            </p>

            <ul class="lista-verde">
                <li><strong>Trabajos conjuntos:</strong> faenas de reforestación y rescate de espacios públicos en zonas limítrofes (como el tramo de la Avenida Estanislao Ramírez hacia la Autopista México-Puebla en conjunto con Tláhuac).</li>
                <li><strong>Colaboración:</strong> brigadas comunitarias y el Partido Verde Edoméx en proyectos de forestación urbana.</li>
                <li><strong>Donación de árboles:</strong> programa de donación gratuita de arbolado para parques, calles, camellones y centros educativos (dirigido a personas físicas, morales o escuelas, sujeto a verificación de la zona).</li>
            </ul>
        </section>

        <!-- ===== PROBLEMÁTICAS ===== -->
        <section id="problematicas">
            <h2>Problemáticas Ambientales del CBTA 35</h2>
            <p>
                A pesar de los esfuerzos, existen diversos factores que dificultan el éxito de las reforestaciones en la zona de Valle de Chalco y los límites con Ixtapaluca:
            </p>

            <div class="problemas">
                <div class="problema">
                    <h4>💧 Estrés hídrico y sequía</h4>
                    <p>Climas semiáridos a templados con temporadas de estiaje prolongadas dificultan la supervivencia de los árboles recién plantados sin riego constante.</p>
                </div>
                <div class="problema">
                    <h4>🌳 Elección de especies inadecuadas</h4>
                    <p>Se usan especies ornamentales o no endémicas que demandan más agua de la disponible o no toleran la compactación del suelo.</p>
                </div>
                <div class="problema">
                    <h4>🪨 Calidad y tipo de suelo</h4>
                    <p>Suelos de origen ex-lacustre o altamente planchados por la urbanización, con alta tasa de mortalidad en las especies plantadas.</p>
                </div>
                <div class="problema">
                    <h4>📉 Falta de seguimiento post-plantación</h4>
                    <p>Las jornadas se concentran en la plantación masiva pero carecen de brigadas de mantenimiento a mediano y largo plazo.</p>
                </div>
            </div>
        </section>

        <!-- ===== GALERÍA SIMBÓLICA ===== -->
        <section id="galeria">
            <h2>Galería de Reforestación</h2>
            <div class="galeria">
                <div class="foto foto1">Jornadas ecológicas</div>
                <div class="foto foto2">Plantación de especies nativas</div>
                <div class="foto foto3">Jardines polinizadores</div>
                <div class="foto foto4">Restauración de suelos</div>
            </div>
        </section>

        <!-- ===== FUENTES ===== -->
        <section id="fuentes">
            <h2>Fuentes de Consulta</h2>
            <ul class="lista-verde">
                <li><a href="https://www.biodiversidad.gob.mx" target="_blank" style="color:#2e7d32;">biodiversidad.gob.mx</a></li>
                <li><a href="https://www.scribd.com" target="_blank" style="color:#2e7d32;">es.scribd.com</a></li>
                <li><a href="https://www.gob.mx" target="_blank" style="color:#2e7d32;">gob.mx</a></li>
                <li><a href="https://www.reddearboles.org" target="_blank" style="color:#2e7d32;">reddearboles.org</a></li>
                <li><a href="https://www.edengreen.com" target="_blank" style="color:#2e7d32;">edengreen.com</a></li>
                <li><a href="https://lipsia.com" target="_blank" style="color:#2e7d32;">lipsia.com</a></li>
            </ul>
        </section>

        <!-- ===== PIE ===== -->
        <footer>
            <p><strong>Propuesta:</strong> Maestro Mariano Sánchez Reyes · Alumno Salinas Sánchez Diego Osmar</p>
            <p>Grado y Grupo: 3°B · Carrera: Programación · Materia: Módulo III</p>
            <p style="margin-top: 10px;">🌱 CBTA 35 "Leona Vicario" — Valle de Chalco 🌱</p>
        </footer>
    </div>

</body>
</html>