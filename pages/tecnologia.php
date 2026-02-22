<?php
// tecnologia.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Servicios Tecnológicos y Seguridad Electrónica</title>

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
            padding:40px;
            border-radius:18px;
            margin-bottom:32px;
            box-shadow:0 10px 28px rgba(61,43,31,.35);
            text-align:center;
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
            font-size:1.6rem;
            margin-right:6px;
        }

        ul li{
            margin-bottom:8px;
        }

        .badge-tech{
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

        .btn-custom{
            background:var(--terracota);
            color:#fff;
            border-radius:30px;
            padding:10px 24px;
            font-weight:600;
        }

        .btn-custom:hover{
            background:var(--marron-md);
            color:#fff;
        }
    </style>
</head>

<body>
<div class="container py-4">

    <!-- ENCABEZADO -->
    <div class="header">
        <h2>Servicios Tecnológicos & Seguridad Electrónica</h2>
        <p class="mb-2">
            Reparación de computadores • Redes • CCTV • Alarmas • Soporte técnico integral
        </p>
        <span class="badge-tech">Tecnología • Confianza • Seguridad</span>
    </div>

    <!-- QUIÉNES SOMOS -->
    <div class="section">
        <h4><i class="bx bx-user-check icon"></i> ¿Quiénes Somos?</h4>
        <p>
            Somos un emprendimiento especializado en <strong>reparación, mantenimiento y soporte técnico de equipos
            de cómputo</strong>, así como en el <strong>diseño, instalación y mantenimiento de sistemas de seguridad
            electrónica</strong> para hogares, empresas y conjuntos residenciales.
        </p>
        <p>
            Brindamos soluciones confiables, seguras y eficientes, enfocadas en la
            <span class="highlight">protección de la información, los activos y la tranquilidad de nuestros clientes</span>.
        </p>
    </div>

    <!-- SERVICIOS DE COMPUTADORES -->
    <div class="section">
        <h4><i class="bx bx-laptop icon"></i> Reparación y Mantenimiento de Computadores</h4>
        <ul>
            <li>Diagnóstico y reparación de computadores de escritorio y portátiles.</li>
            <li>Mantenimiento preventivo y correctivo.</li>
            <li>Formateo e instalación de sistemas operativos (Windows / Linux).</li>
            <li>Optimización de rendimiento y eliminación de virus.</li>
            <li>Actualización de hardware (RAM, discos SSD, fuentes, tarjetas).</li>
            <li>Recuperación básica de información.</li>
            <li>Soporte técnico presencial y remoto.</li>
        </ul>
    </div>

    <!-- SEGURIDAD ELECTRÓNICA -->
    <div class="section">
        <h4><i class="bx bx-shield-quarter icon"></i> Seguridad Electrónica</h4>
        <ul>
            <li>Instalación de <strong>sistemas CCTV</strong> (cámaras análogas e IP).</li>
            <li>Configuración de grabadores DVR y NVR.</li>
            <li>Acceso remoto desde celular y computador.</li>
            <li>Mantenimiento y optimización de sistemas existentes.</li>
            <li>Instalación de alarmas y sensores de movimiento.</li>
            <li>Control de accesos y videoporteros.</li>
            <li>Soluciones para casas, locales, empresas y conjuntos residenciales.</li>
        </ul>
    </div>

    <!-- REDES Y OTROS SERVICIOS -->
    <div class="section">
        <h4><i class="bx bx-network-chart icon"></i> Redes y Servicios Complementarios</h4>
        <ul>
            <li>Instalación y configuración de redes cableadas y WiFi.</li>
            <li>Organización de cableado estructurado.</li>
            <li>Configuración de routers, switches y repetidores.</li>
            <li>Soporte tecnológico para oficinas y pequeños negocios.</li>
            <li>Asesoría en compra de equipos tecnológicos y de seguridad.</li>
        </ul>
    </div>

    <!-- POR QUÉ ELEGIRNOS -->
    <div class="section">
        <h4><i class="bx bx-star icon"></i> ¿Por Qué Elegirnos?</h4>
        <ul>
            <li>Atención personalizada y soluciones a la medida.</li>
            <li>Experiencia técnica en tecnología y seguridad electrónica.</li>
            <li>Trabajo responsable, limpio y garantizado.</li>
            <li>Soporte post-servicio.</li>
            <li>Compromiso con la seguridad y la confidencialidad.</li>
        </ul>
    </div>

    <!-- CONTACTO -->
    <div class="section">
        <h4><i class="bx bx-phone-call icon"></i> Contáctanos</h4>
        <p>
            ¿Necesitas soporte técnico o una solución de seguridad?
            Contáctanos y recibe asesoría profesional.
        </p>
        <ul>
            <li><strong>Atención:</strong> Hogares, empresas y conjuntos residenciales.</li>
            <li><strong>Zona:</strong> Valledupar y alrededores.</li>
            <li><strong>WhatsApp / Teléfono:</strong> <span class="highlight">322 434 4569</span></li>
        </ul>
        <a href="https://wa.me/573224344569" class="btn btn-custom mt-2" target="_blank">
            <i class="bx bxl-whatsapp"></i> Escríbenos por WhatsApp
        </a>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
