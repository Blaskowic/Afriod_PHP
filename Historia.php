<?php
// HistoriaAFROI.php
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>AFROI | Historia y Memoria Afro en Itagüí</title>

        <!-- Bootstrap + Boxicons -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">

        <style>
            /* 🎨 Paleta Tierra Eléctrica */
            :root{
                --beige:#f5f2ed;
                --marron-osc:#3d2b1f;
                --marron-md:#8b5e3c;
                --terracota:#ff6f31;
                --mostaza:#ffb300;
                --verde-oliva:#9acd32;
                --card-bg:#ffffff;
            }

            body{
                background: var(--beige);
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: var(--marron-osc);
            }

            .header{
                background: linear-gradient(90deg, var(--terracota), var(--marron-md));
                color:#fff;
                padding:36px;
                border-radius:16px;
                margin-bottom:30px;
                text-align:center;
                box-shadow:0 10px 28px rgba(61,43,31,.35);
            }

            .section{
                background: var(--card-bg);
                border-radius:16px;
                padding:28px;
                margin-bottom:28px;
                box-shadow:0 6px 18px rgba(61,43,31,.15);
                border-left:6px solid var(--mostaza);
            }

            .section h4{
                font-weight:700;
                margin-bottom:16px;
            }

            .icon{
                color:var(--terracota);
                font-size:1.4rem;
                margin-right:6px;
            }

            ul li{
                margin-bottom:8px;
            }

            .badge-afro{
                background:var(--verde-oliva);
                color:#fff;
                padding:6px 14px;
                border-radius:10px;
                font-weight:600;
                font-size:.9rem;
            }

            .highlight{
                color:var(--terracota);
                font-weight:600;
            }

            .subtle{
                color:var(--marron-md);
                font-size:.95rem;
            }
        </style>
    </head>

    <body>
        <!-- BOTÓN VOLVER -->
        <div class="text-center mt-5 mb-3">
            <a href="index.php" class="btn btn-lg px-5 shadow"
               style="background: linear-gradient(90deg, var(--mostaza), var(--terracota));
               color: #3d2b1f; font-weight: 600; border-radius: 50px; letter-spacing: .5px; transition: all .3s ease;"
               onmouseover="this.style.transform = 'translateY(-2px)';this.style.boxShadow = '0 10px 22px rgba(61,43,31,.35)'"
               onmouseout="this.style.transform = 'translateY(0)';this.style.boxShadow = '0 4px 10px rgba(61,43,31,.25)'">
                <i class='bx bx-arrow-back'></i> Volver al Inicio
            </a>
        </div>
        <div class="container py-4">

            <!-- ENCABEZADO -->
            <div class="header">
                <h2>AFROI</h2>
                <p class="mb-2">
                    Asociación de Comunidades Negras, Afrocolombianas, Raizales y Palenqueras de Itagüí
                </p>
                <span class="badge-afro">Identidad • Memoria • Organización • Territorio</span>
            </div>

            <!-- CONTEXTO HISTÓRICO -->
            <div class="section">
                <h4><i class="bx bx-map-alt icon"></i> Contexto Histórico y Territorial</h4>
                <p>
                    La presencia afrodescendiente en <strong>Itagüí</strong> se explica por procesos históricos
                    de migración interna provenientes principalmente del <strong>Chocó, Urabá antioqueño,
                        la costa Pacífica y Caribe colombiano</strong>, motivados por dinámicas laborales,
                    industriales y situaciones de desplazamiento forzado.
                </p>
                <p>
                    Estas comunidades, pese a su aporte cultural, social y económico, enfrentaron durante
                    décadas condiciones de <span class="highlight">invisibilización, exclusión y ausencia
                        de representación institucional</span>.
                </p>
            </div>

            <!-- ORÍGENES -->
            <div class="section">
                <h4><i class="bx bx-history icon"></i> Orígenes y Fundación de AFROI</h4>
                <p>
                    En respuesta a este contexto, a comienzos del año <strong>2000</strong>,
                    líderes y lideresas afrodescendientes del municipio impulsaron la creación
                    de la <strong>Asociación de Comunidades Negras, Afrocolombianas, Raizales y
                        Palenqueras en Itagüí (AFROI)</strong>.
                </p>
                <p>
                    AFROI nació como un <strong>proceso organizativo autónomo</strong> con el objetivo
                    de defender los derechos étnicos, fortalecer la identidad cultural y generar
                    oportunidades reales de desarrollo social para la población afrocolombiana.
                </p>
            </div>

            <!-- MISIÓN Y VISIÓN -->
            <div class="section">
                <h4><i class="bx bx-target-lock icon"></i> Misión, Visión y Principios</h4>
                <p>
                    <strong>Misión:</strong> Promover el reconocimiento, la dignificación y el desarrollo
                    integral de las comunidades afrodescendientes de Itagüí mediante procesos educativos,
                    culturales, organizativos y de gestión institucional con enfoque étnico.
                </p>
                <p>
                    <strong>Visión:</strong> Consolidarse como una organización afro referente en el Valle
                    de Aburrá, con incidencia social y política en la construcción de un municipio
                    más justo, incluyente y diverso.
                </p>
                <p class="subtle">
                    Principios: identidad, solidaridad, participación comunitaria, justicia social,
                    autonomía organizativa y enfoque diferencial.
                </p>
            </div>

            <!-- LÍNEAS DE ACCIÓN -->
            <div class="section">
                <h4><i class="bx bx-network-chart icon"></i> Líneas Estratégicas de Acción</h4>
                <ul>
                    <li><strong>Educación:</strong> orientación vocacional, acceso a educación superior,
                        acompañamiento académico.</li>
                    <li><strong>Cultura y memoria:</strong> fortalecimiento de saberes ancestrales,
                        celebraciones y procesos identitarios.</li>
                    <li><strong>Participación ciudadana:</strong> incidencia en espacios institucionales
                        y comunitarios.</li>
                    <li><strong>Gestión social:</strong> articulación con entidades públicas y privadas.</li>
                    <li><strong>Derechos humanos:</strong> promoción y defensa de los derechos étnicos.</li>
                </ul>
            </div>

            <!-- IMPACTO -->
            <div class="section">
                <h4><i class="bx bx-group icon"></i> Impacto Comunitario</h4>
                <p>
                    Durante más de dos décadas, AFROI ha acompañado a
                    <strong>cientos de familias afrodescendientes</strong>,
                    especialmente en las comunas <strong>3, 4 y 5</strong> de Itagüí.
                </p>
                <p>
                    Sus acciones han contribuido a:
                </p>
                <ul>
                    <li>Mayor acceso a educación superior.</li>
                    <li>Reconocimiento institucional de la población afro.</li>
                    <li>Fortalecimiento del tejido social comunitario.</li>
                    <li>Visibilización de la cultura afrocolombiana a nivel local.</li>
                </ul>
            </div>

            <!-- PARTICIPACIÓN INSTITUCIONAL -->
            <div class="section">
                <h4><i class="bx bx-award icon"></i> Reconocimiento y Participación Institucional</h4>
                <p>
                    AFROI integra el <strong>Comité Municipal Afrodescendiente de Itagüí</strong>,
                    creado mediante el <span class="highlight">Acuerdo Municipal 014 de 2017</span>,
                    como instancia formal de participación ciudadana.
                </p>
                <p>
                    Desde este espacio, la organización participa en la formulación,
                    seguimiento y evaluación de políticas públicas con enfoque étnico.
                </p>
            </div>

            <!-- ORGANIZACIÓN -->
            <div class="section">
                <h4><i class="bx bx-id-card icon"></i> Organización y Naturaleza Jurídica</h4>
                <ul>
                    <li><strong>Tipo:</strong> Organización social sin ánimo de lucro.</li>
                    <li><strong>Ámbito:</strong> Comunitario, cultural y educativo.</li>
                    <li><strong>Territorio:</strong> Municipio de Itagüí, Antioquia.</li>
                    <li><strong>Población:</strong> Comunidades negras, afrocolombianas,
                        raizales y palenqueras.</li>
                </ul>
                <p>
                    AFROI representa un proceso colectivo de
                    <strong>memoria histórica, resistencia cultural
                        y construcción de futuro</strong> para la población afrodescendiente.
                </p>
            </div>

            <!-- CONTACTO -->
            <div class="section">
                <h4><i class="bx bx-mail-send icon"></i> Información de Contacto</h4>
                <p>
                    La <strong>Asociación de Comunidades Negras, Afrocolombianas, Raizales y Palenqueras de Itagüí (AFROI)</strong>
                    mantiene sus canales de comunicación abiertos para la comunidad, entidades públicas, organizaciones
                    sociales y personas interesadas en procesos de participación, formación y trabajo comunitario.
                </p>

                <ul>
                    <li><strong>Tipo de organización:</strong> Entidad social sin ánimo de lucro.</li>
                    <li><strong>Ámbito de acción:</strong> Comunitario, cultural, educativo y social.</li>
                    <li><strong>Municipio:</strong> Itagüí, Antioquia.</li>
                    <li><strong>Representación comunitaria:</strong> Liderazgos afrocolombianos del municipio.</li>
                    <li><strong>Teléfono de contacto:</strong> <span class="highlight">322 434 4569</span></li>
                    <li><strong>Zona de trabajo:</strong> Comunas 3, 4 y 5 del municipio de Itagüí.</li>
                </ul>

                <p class="subtle">
                    AFROI promueve la participación activa de la comunidad afrodescendiente y el trabajo articulado
                    con instituciones públicas y privadas para el fortalecimiento del tejido social y cultural del territorio.
                </p>
            </div>

            <!-- BOTÓN VOLVER -->
            <div class="text-center mt-5 mb-3">
                <a href="index.php" class="btn btn-lg px-5 shadow"
                   style="background: linear-gradient(90deg, var(--mostaza), var(--terracota));
                   color: #3d2b1f; font-weight: 600; border-radius: 50px; letter-spacing: .5px; transition: all .3s ease;"
                   onmouseover="this.style.transform = 'translateY(-2px)';this.style.boxShadow = '0 10px 22px rgba(61,43,31,.35)'"
                   onmouseout="this.style.transform = 'translateY(0)';this.style.boxShadow = '0 4px 10px rgba(61,43,31,.25)'">
                    <i class='bx bx-arrow-back'></i> Volver al Inicio
                </a>
            </div>

        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
