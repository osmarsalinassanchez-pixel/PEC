<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
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
    <h2>La Reforestación en el CBTA 35</h2>
            <p>
                La reforestación en el <strong>CBTa 35 "Leona Vicario"</strong> fusiona la educación técnica agropecuaria con la conservación ambiental a través de tres ejes principales. La comunidad estudiantil realiza jornadas ecológicas enfocadas en plantar árboles para rescatar suelos y proteger zonas forestales críticas, como los bosques de agua en Magdalena Contreras.
            </p>
            <p>
                Además, implementan prácticas de cultivo sustentable que incluyen la producción de abono orgánico y el cuidado de especies nativas de alto valor ecológico, como el <em>ahuehuete</em>. Por último, colaboran con dependencias locales en la creación de jardines polinizadores diseñados con flora nativa para preservar insectos esenciales y mantener el equilibrio biológico de la región.
            </p>
        </section>
        <center>
    <a href="{{ url('/') }}" class="boton-volver">← Volver al inicio</a>
</center>
</body>
</html>