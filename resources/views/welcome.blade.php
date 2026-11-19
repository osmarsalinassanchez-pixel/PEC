
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
            background: linear-gradient(135deg, #a8e6cf 0%, #dcedc1 50%, #c5e8d5 100%);
            position: relative;
            overflow-x: hidden;
            padding-bottom: 40px;
        }

        /* Decoraciones de fondo: hojas y círculos */
        body::before,
        body::after {
            content: "";
            position: fixed;
            border-radius: 50%;
            z-index: 0;
            pointer-events: none;
        }

        body::before {
            width: 400px;
            height: 400px;
            background: radial-gradient(circle, rgba(76, 175, 80, 0.15), transparent 70%);
            top: -100px;
            left: -100px;
        }

        body::after {
            width: 500px;
            height: 500px;
            background: radial-gradient(circle, rgba(56, 142, 60, 0.12), transparent 70%);
            bottom: -150px;
            right: -150px;
        }

        /* Decoraciones flotantes tipo hoja */
        .decoracion {
            position: fixed;
            font-size: 2.5rem;
            opacity: 0.25;
            z-index: 0;
            pointer-events: none;
            animation: flotar 6s ease-in-out infinite;
        }

        .decoracion.hoja1 { top: 20%; left: 5%; animation-delay: 0s; }
        .decoracion.hoja2 { top: 60%; right: 8%; animation-delay: 1.5s; }
        .decoracion.hoja3 { bottom: 15%; left: 15%; animation-delay: 3s; }
        .decoracion.hoja4 { top: 35%; right: 20%; animation-delay: 2s; }

        @keyframes flotar {
            0%, 100% { transform: translateY(0) rotate(-5deg); }
            50% { transform: translateY(-20px) rotate(5deg); }
        }

        /* Título */
        h1 {
            text-align: center;
            color: #2e7d32;
            font-size: 3rem;
            padding: 40px 20px 10px;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(255, 255, 255, 0.7);
            position: relative;
            z-index: 1;
        }

        h1::after {
            content: "";
            display: block;
            font-size: 2rem;
            margin-top: 10px;
        }

        /* Header con navegación */
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

        /* Botones */
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
            .decoracion { font-size: 1.8rem; }
        }
    </style>
</head>

<body>
    <!-- Decoraciones flotantes -->
    <span class="decoracion hoja1"></span>
    <span class="decoracion hoja2"></span>
    <span class="decoracion hoja3"></span>
    <span class="decoracion hoja4"></span>

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