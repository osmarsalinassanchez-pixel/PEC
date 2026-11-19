<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    {{-- ============================================
     BARRA DE NAVEGACIÓN - Proyecto "Suelos Vivos"
     CBTA No. 35 · Valle de Chalco
     ============================================ --}}
<nav class="navbar navbar-expand-lg navbar-suelos sticky-top">
    <div class="container">

        {{-- ===== LOGO / MARCA ===== --}}
        
            <h1>Suelos Vivos</h1>


        {{-- ===== BOTÓN HAMBURGUESA (Móvil) ===== --}}
        <button class="navbar-toggler" type="button"
                data-bs-toggle="collapse"
                data-bs-target="#menuSuelos"
                aria-controls="menuSuelos"
                aria-expanded="false"
                aria-label="Abrir menú de navegación">
            <span class="navbar-toggler-icon" style="filter: invert(1);"></span>
        </button>

        {{-- ===== MENÚ DE SUBTEMAS ===== --}}
        <div class="collapse navbar-collapse" id="menuSuelos">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link" href="#inicio">
                        <i class="bi bi-house-door-fill"></i> Inicio
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#reforestacion">
                        <i class="bi bi-globe-americas"></i> Reforestación
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#beneficios">
                        <i class="bi bi-heart-pulse-fill"></i> Beneficios
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#arboles">
                        <i class="bi bi-tree"></i> Tipos de Árboles
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#caracteristicas">
                        <i class="bi bi-check2-square"></i> Características
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#plantacion">
                        <i class="bi bi-hand-index-thumb"></i> Plantación
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#invasores">
                        <i class="bi bi-bug-fill"></i> Invasores
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="#acerca">
                        <i class="bi bi-person-circle"></i> Acerca de
                    </a>
                </li>

            </ul>
        </div>

    </div>
</nav>
</body>
</html>