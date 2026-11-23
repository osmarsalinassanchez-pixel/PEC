<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suelo Vivo</title>
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
            padding-bottom: 40px;
        }

        /* ===== ESCENA DE PAISAJE (fondo decorativo) ===== */
        .paisaje {
            position: fixed;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 55vh;
            z-index: 0;
            pointer-events: none;
        }

        .paisaje svg {
            width: 100%;
            height: 100%;
            display: block;
        }

        /* Sol con animación de pulso suave */
        .sol {
            transform-origin: center;
            animation: brillar 6s ease-in-out infinite;
        }

        @keyframes brillar {
            0%, 100% { opacity: 0.9; transform: scale(1); }
            50% { opacity: 1; transform: scale(1.05); }
        }

        /* Nubes que se desplazan lentamente */
        .nube {
            animation: moverNube 20s linear infinite;
        }

        .nube2 {
            animation: moverNube 28s linear infinite;
            animation-delay: -10s;
        }

        @keyframes moverNube {
            0% { transform: translateX(0); }
            50% { transform: translateX(30px); }
            100% { transform: translateX(0); }
        }

        /* ===== TÍTULO ===== */
        h1 {
            text-align: center;
            color: #2e7d32;
            font-size: 3rem;
            padding: 40px 20px 10px;
            letter-spacing: 2px;
            text-shadow: 2px 2px 6px rgba(255, 255, 255, 0.9);
            position: relative;
            z-index: 1;
        }

        h1::after {
            content: "🌱";
            display: block;
            font-size: 2rem;
            margin-top: 10px;
        }

        /* ===== HEADER / BOTONES ===== */
        header {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 12px;
            padding: 30px 20px;
            max-width: 1100px;
            margin: 0 auto;
            position: relative;
            z-index: 1;
        }

        header a {
            text-decoration: none;
            color: #1b5e20;
            background: linear-gradient(145deg, #ffffff, #e8f5e9);
            padding: 12px 22px;
            border-radius: 30px;
            font-weight: 600;
            font-size: 0.95rem;
            box-shadow: 0 4px 10px rgba(46, 125, 50, 0.2),
                        inset 0 -2px 4px rgba(0, 0, 0, 0.05);
            border: 2px solid rgba(76, 175, 80, 0.4);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        header a::before {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(76, 175, 80, 0.25), transparent);
            transition: left 0.5s ease;
        }

        header a:hover::before {
            left: 100%;
        }

        header a:hover {
            background: linear-gradient(145deg, #4caf50, #388e3c);
            color: #ffffff;
            transform: translateY(-4px) scale(1.05);
            box-shadow: 0 8px 18px rgba(46, 125, 50, 0.4);
            border-color: #2e7d32;
        }

        header a:active {
            transform: translateY(-1px) scale(1.02);
        }

        /* Responsive */
        @media (max-width: 600px) {
            h1 { font-size: 2rem; }
            header { gap: 8px; padding: 20px 10px; }
            header a { padding: 10px 16px; font-size: 0.85rem; }
            .paisaje { height: 45vh; }
        }
    </style>
</head>

<body>

    <!-- ===== PAISAJE DECORATIVO: sol, montañas y árboles ===== -->
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

            <!-- Montaña lejana (más clara) -->
            <path d="M0,500 L0,320 L180,180 L340,300 L480,200 L640,330 L820,190 L980,320 L1140,210 L1300,310 L1440,230 L1440,500 Z"
                  fill="#a5d6a7" opacity="0.7"/>

            <!-- Montaña media -->
            <path d="M0,500 L0,380 L220,250 L400,360 L580,260 L760,380 L940,270 L1120,370 L1300,280 L1440,360 L1440,500 Z"
                  fill="#81c784" opacity="0.85"/>

            <!-- Nieve en picos de la montaña media -->
            <path d="M580,260 L610,285 L595,285 L580,275 L565,285 L550,285 Z" fill="#ffffff" opacity="0.9"/>
            <path d="M940,270 L970,295 L955,295 L940,285 L925,295 L910,295 Z" fill="#ffffff" opacity="0.9"/>

            <!-- Colina con árboles (frente) -->
            <path d="M0,500 L0,430 Q360,370 720,420 Q1080,470 1440,410 L1440,500 Z"
                  fill="#66bb6a"/>

            <!-- Árboles alrededor -->
            <!-- Árbol 1 -->
            <g>
                <rect x="115" y="405" width="10" height="45" fill="#795548"/>
                <circle cx="120" cy="395" r="28" fill="#388e3c"/>
                <circle cx="100" cy="405" r="22" fill="#43a047"/>
                <circle cx="140" cy="405" r="22" fill="#43a047"/>
            </g>
            <!-- Árbol 2 -->
            <g>
                <rect x="300" y="425" width="9" height="40" fill="#795548"/>
                <circle cx="304" cy="415" r="25" fill="#2e7d32"/>
                <circle cx="286" cy="425" r="20" fill="#388e3c"/>
                <circle cx="322" cy="425" r="20" fill="#388e3c"/>
            </g>
            <!-- Árbol 3 -->
            <g>
                <rect x="480" y="445" width="10" height="38" fill="#795548"/>
                <circle cx="485" cy="435" r="26" fill="#388e3c"/>
                <circle cx="465" cy="445" r="21" fill="#43a047"/>
                <circle cx="505" cy="445" r="21" fill="#43a047"/>
            </g>
            <!-- Árbol 4 -->
            <g>
                <rect x="700" y="430" width="10" height="45" fill="#795548"/>
                <circle cx="705" cy="418" r="27" fill="#2e7d32"/>
                <circle cx="683" cy="428" r="21" fill="#388e3c"/>
                <circle cx="727" cy="428" r="21" fill="#388e3c"/>
            </g>
            <!-- Árbol 5 -->
            <g>
                <rect x="920" y="440" width="9" height="40" fill="#795548"/>
                <circle cx="924" cy="430" r="25" fill="#388e3c"/>
                <circle cx="906" cy="440" r="20" fill="#43a047"/>
                <circle cx="942" cy="440" r="20" fill="#43a047"/>
            </g>
            <!-- Árbol 6 -->
            <g>
                <rect x="1120" y="420" width="10" height="45" fill="#795548"/>
                <circle cx="1125" cy="408" r="27" fill="#2e7d32"/>
                <circle cx="1103" cy="418" r="21" fill="#388e3c"/>
                <circle cx="1147" cy="418" r="21" fill="#388e3c"/>
            </g>
            <!-- Árbol 7 (grande a la derecha) -->
            <g>
                <rect x="1320" y="405" width="12" height="55" fill="#795548"/>
                <circle cx="1326" cy="392" r="32" fill="#388e3c"/>
                <circle cx="1300" cy="405" r="25" fill="#43a047"/>
                <circle cx="1352" cy="405" r="25" fill="#43a047"/>
            </g>
            <!-- Árbol 8 (pequeño izquierda) -->
            <g>
                <rect x="30" y="440" width="8" height="35" fill="#795548"/>
                <circle cx="34" cy="430" r="22" fill="#388e3c"/>
                <circle cx="18" cy="440" r="18" fill="#43a047"/>
                <circle cx="50" cy="440" r="18" fill="#43a047"/>
            </g>
        </svg>
    </div>

    <!-- ===== CONTENIDO ===== -->
    <h1>Suelo Vivo</h1>

    <header>
        <a href="{{ route('Inicio') }}">Inicio</a>
        <a href="{{ route('Reforestacion') }}">Reforestación</a>
        <a href="{{ route('Beneficios') }}">Beneficios</a>
        <a href="{{ route('Arboles') }}">Tipos de Árboles</a>
        <a href="{{ route('Caracteristicas') }}">Características</a>
        <a href="{{ route('Plantacion') }}">Plantación</a>
        <a href="{{ route('Invasores') }}">Invasores</a>
    </header>

</body>
</html>
