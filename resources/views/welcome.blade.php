<!doctype html>
<html lang="es">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta property="og:description" content="Poder Legislativo del Estado de México" />
    <meta property="og:url" content="https://congresoedomex.gob.mx" />
    <meta property="og:type" content="website" />
    <meta property="og:image" content="https://congresoedomex.gob.mx/storage/images/EscudoLXII_Mesa.png" />
    <meta property="og:image:type" content="image/png" />
    <meta property="og:image:width" content="1024" />
    <meta property="og:image:height" content="683" />
    <meta property="og:title" content="Poder Legislativo del Estado de México" />
    <title>Poder Legislativo del Estado de México</title>
    <link rel="shortcut icon" href="https://congresoedomex.gob.mx/storage/images/favicon.svg">
    <script defer="defer" src="https://congresoedomex.gob.mx/js/app.js"></script>
    <script defer="defer" src="https://congresoedomex.gob.mx/js/particles.js"></script>
    <link href="https://congresoedomex.gob.mx/css/app.css" rel="stylesheet">
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        .page-wrapper {
            display: flex;
            flex-direction: column;
            min-height: 100vh;
        }

        main {
            flex-grow: 1;
        }

        body.home {
            background-image: url('{{ asset('assets/images/fondo derechos humanos-01-04.svg') }}') !important;
            background-position: top, bottom;
            background-repeat: no-repeat;
            background-size: 100%;
        }

        .pb-lg-60 {
            padding-bottom: 20px !important;
        }

        .pt-60 {
            padding-top: 20px !important;
        }

        .bg-lighter {
            --bs-bg-opacity: 1;
            background-color: #AE8449 !important;
        }

        .btn-outline-darker {
            --bs-btn-color: #FFFFFF;
            --bs-btn-border-color: #94134A;
            --bs-btn-hover-color: #FFFFFF;
            --bs-btn-hover-bg: #94134A;
            --bs-btn-hover-border-color: #94134A;
            --bs-btn-focus-shadow-rgb: 0, 0, 0;
            --bs-btn-active-color: #94134A;
            --bs-btn-active-bg: #94134A;
            --bs-btn-active-border-color: #94134A;
            --bs-btn-active-shadow: inset 0 3px 5px rgba(0, 0, 0, 0.125);
            --bs-btn-disabled-color: #94134A;
            --bs-btn-disabled-bg: transparent;
            --bs-btn-disabled-border-color: #94134A;
            --bs-gradient: none;
        }

        @font-face {
            font-family: 'Regesto Grotesk' !important;
            src: url('/fonts/RegestoGrotesk-Regular.ttf') format('truetype') !important;
            font-weight: normal !important;
            font-style: normal !important;
        }

        @font-face {
            font-family: 'Athelas';
            src: url('/fonts/Athelas.ttc') format('truetype-collection');
            font-weight: normal;
            font-style: normal;
        }

        .titulo-convocatoria {
            font-family: 'Athelas', serif;
            font-size: 41px;
            margin-bottom: -15px;
            color: #b28d5f;
        }

        .titulo-convocatoria {
            font-size: clamp(20px, 3.5vw, 36px);
            /* mínimo 20px, ideal 3.5vw, máximo 36px */
            font-weight: bold;
        }
    </style>
</head>

<body class="home">
    <div class="page-wrapper d-flex flex-column min-vh-100">
        <main class="flex-grow-1">

            <div style="text-align: center; padding: 20px; max-width: 100%; box-sizing: border-box;">

                <!-- Imagen responsive -->
                <img src="{{ asset('images/congreso.png') }}"
                    alt="Ícono Derechos Humanos"
                    style="width: 100%; max-width: 675px; height: auto; margin-bottom: 15px;">

                <div style="max-width: 1100px; margin: 0 auto; text-align:center;">

                    <!-- Título -->
                    <h2 style="font-family: 'Athelas', serif; color:#94134A; font-size: 32px; margin-bottom: 20px;">
                        Bordando contra la Violencia
                    </h2>

                    <!-- Subtítulo -->
                    <h3 style="font-family:'Regesto Grotesk', sans-serif; color:#b28d5f; margin-bottom: 10px;">
                        Descripción de la exposición
                    </h3>

                    <!-- Descripción -->
                    <p style="font-family: 'Regesto Grotesk', sans-serif; color:#555; font-size:1.05rem; line-height:1.6; padding:0 12px; text-align:justify;">
                        Bordando contra la Violencia es una muestra que reconoce al bordado y al tejido como prácticas que han trascendido su origen doméstico y ornamental para convertirse en potentes actos de resistencia, memoria y denuncia frente a la violencia de género.
                        <br><br>
                        Tradicionalmente asociadas al ideal patriarcal de la “mujer de bien”, estas labores fueron durante siglos enseñadas como parte de la formación doméstica femenina. No obstante, en años recientes, diversas colectivas, creadoras y mujeres en todo el mundo han resignificado estas técnicas para transformar el hilo y la aguja en herramientas de expresión política y acompañamiento comunitario.
                        <br><br>
                        Cada pieza que integra esta exposición es resultado de un ejercicio de reflexión, sororidad y toma de conciencia. A través de puntadas, colores y símbolos, se narran historias que hablan de resistencia, dignidad y memoria; historias que visibilizan la violencia machista, pero también la fuerza colectiva que surge al tejer nuestras voces.
                        <br><br>
                        Bordando contra la Violencia invita a reconocer el valor del arte textil como vehículo para denunciar, sanar y construir espacios seguros. Esta muestra busca que cada puntada sea un recordatorio de que la creatividad también es una forma de lucha, y que al bordar en comunidad podemos transformar el dolor en acción y el silencio en memoria.
                    </p>

                    <br><br>

                    <!-- BOTÓN ÚNICO -->
                    <a href="{{ route('ar.video', 1) }}"
                        style="display:inline-block; padding:16px 40px; background:#94134A; color:white; border-radius:10px; 
                            text-decoration:none; font-weight:bold; font-size:1.2rem;">
                        Ir
                    </a>

                </div>
            </div>




        </main>


        <footer>
            <div class="bg-lighter bg-opacity-50 mt-60 pt-60 pb-40 pb-lg-60 position-relative">
                <div class="container-xl">
                    <div class="d-flex flex-column flex-lg-row align-items-center">

                        <div class="col-12 col-lg-12 mb-16 mb-lg-0">
                            <nav class="d-flex justify-content-center flex-wrap"
                                style="font-size: 18px; gap: 8px; color: white;">
                                <a href="https://congresoedomex.gob.mx/" target="_blank"
                                    style="color: white; text-decoration: none;">
                                    Poder Legislativo
                                </a>
                                <span>|</span>
                                <a href="https://congresoedomex.gob.mx/" target="_blank"
                                    style="color: white; text-decoration: none;">
                                   congresoedomex.gob.mx
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>
</body>
<script type="text/javascript">
    const iframe_cont = document.querySelector("iframe");
    iframe_cont.style.cssText = 'width: 100%!important;height: 28vh!important;';
</script>

</html>
