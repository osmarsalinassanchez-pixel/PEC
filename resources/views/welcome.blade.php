<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Un Futuro Verde</title>
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

        /* ===== FONDO DE BURBUJAS ===== */
        .burbujas {
            position: fixed;
            inset: 0;
            overflow: hidden;
            z-index: 0;
            pointer-events: none;
        }

        .burbuja {
            position: absolute;
            bottom: -150px;
            background: radial-gradient(circle at 30% 30%,
                        rgba(255, 255, 255, 0.8),
                        rgba(168, 230, 207, 0.35) 40%,
                        rgba(76, 175, 80, 0.15) 70%,
                        transparent 100%);
            border: 1px solid rgba(255, 255, 255, 0.5);
            border-radius: 50%;
            box-shadow: inset -5px -5px 15px rgba(76, 175, 80, 0.15),
                        inset 5px 5px 15px rgba(255, 255, 255, 0.6),
                        0 0 15px rgba(168, 230, 207, 0.4);
            animation: subir linear infinite;
            opacity: 0;
        }

        /* Burbujas con distintos tamaños, posiciones, duraciones y retardos */
        .burbuja:nth-child(1)  { width: 40px;  height: 40px;  left: 5%;   animation-duration: 14s; animation-delay: 0s;   }
        .burbuja:nth-child(2)  { width: 70px;  height: 70px;  left: 15%;  animation-duration: 18s; animation-delay: 2s;   }
        .burbuja:nth-child(3)  { width: 25px;  height: 25px;  left: 25%;  animation-duration: 12s; animation-delay: 4s;   }
        .burbuja:nth-child(4)  { width: 90px;  height: 90px;  left: 35%;  animation-duration: 22s; animation-delay: 1s;   }
        .burbuja:nth-child(5)  { width: 50px;  height: 50px;  left: 45%;  animation-duration: 16s; animation-delay: 6s;   }
        .burbuja:nth-child(6)  { width: 30px;  height: 30px;  left: 55%;  animation-duration: 13s; animation-delay: 3s;   }
        .burbuja:nth-child(7)  { width: 110px; height: 110px; left: 65%;  animation-duration: 25s; animation-delay: 5s;   }
        .burbuja:nth-child(8)  { width: 45px;  height: 45px;  left: 75%;  animation-duration: 17s; animation-delay: 7s;   }
        .burbuja:nth-child(9)  { width: 60px;  height: 60px;  left: 85%;  animation-duration: 19s; animation-delay: 2.5s; }
        .burbuja:nth-child(10) { width: 20px;  height: 20px;  left: 95%;  animation-duration: 11s; animation-delay: 8s;   }
        .burbuja:nth-child(11) { width: 80px;  height: 80px;  left: 10%;  animation-duration: 21s; animation-delay: 9s;   }
        .burbuja:nth-child(12) { width: 35px;  height: 35px;  left: 50%;  animation-duration: 15s; animation-delay: 10s;  }

        @keyframes subir {
            0% {
                transform: translateY(0) translateX(0) scale(0.8);
                opacity: 0;
            }
            10% {
                opacity: 0.85;
            }
            50% {
                transform: translateY(-50vh) translateX(25px) scale(1);
            }
            90% {
                opacity: 0.85;
            }
            100% {
                transform: translateY(-110vh) translateX(-25px) scale(1.1);
                opacity: 0;
            }
        }
        /* ===== FIN FONDO DE BURBUJAS ===== */

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
    <!-- Fondo de burbujas animadas -->
    <div class="burbujas" aria-hidden="true">
        <span class="burbuja"></span>
        <span class="burbuja"></span>
        <span class="burbuja"></span>
        <span class="burbuja"></span>
        <span class="burbuja"></span>
        <span class="burbuja"></span>
        <span class="burbuja"></span>
        <span class="burbuja"></span>
        <span class="burbuja"></span>
        <span class="burbuja"></span>
        <span class="burbuja"></span>
        <span class="burbuja"></span>
    </div>

    <!-- Decoraciones flotantes -->
    <span class="decoracion hoja1"></span>
    <span class="decoracion hoja2"></span>
    <span class="decoracion hoja3"></span>
    <span class="decoracion hoja4"></span>

    <h1>Un Futuro Verde</h1>

    <header>
        <a href="{{ route('Inicio') }}">Inicio</a>
        <a href="{{ route('Reforestacion') }}">Reforestación</a>
        <a href="{{ route('Beneficios') }}">Beneficios</a>
        <a href="{{ route('Arboles') }}">Tipos de Árboles</a>
        <a href="{{ route('Caracteristicas') }}">Características</a>
        <a href="{{ route('Plantacion') }}">Plantación</a>
        <a href="{{ route('Especies') }}">Especies</a>
    </header>
    
</body>
</html>