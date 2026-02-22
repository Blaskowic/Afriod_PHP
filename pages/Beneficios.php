<?php
/**
 * Página: Beneficios / Panel de Secciones
 * Proyecto: AFROI
 * Adaptación JSP → PHP
 * Autor original: User
 * Fecha: 16/09/2025
 */

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Panel de Proyectos - AFROI</title>

    <!-- Boxicons + Bootstrap -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        /* ===== Paleta tonos tierra ===== */
        :root{
            --beige:#f5f2ed;
            --marron-osc:#3d2b1f;
            --marron-md:#8b5e3c;
            --terracota:#a0522d;
            --mostaza:#d97706;
            --verde-oliva:#6b8e23;
            --card-bg:#ffffff;
        }

        body{
            background-color: var(--beige);
            color: var(--marron-osc);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .page-header{
            background: linear-gradient(90deg, var(--terracota), var(--marron-md));
            color: #fff;
            padding: 18px 24px;
            border-radius: 10px;
            margin-bottom: 24px;
            box-shadow: 0 6px 18px rgba(59,40,29,0.12);
        }

        .cards-grid{
            display: grid;
            grid-template-columns: repeat(1, 1fr);
            gap: 1.25rem;
        }

        @media(min-width: 576px){
            .cards-grid{ grid-template-columns: repeat(2, 1fr); }
        }

        @media(min-width: 992px){
            .cards-grid{ grid-template-columns: repeat(3, 1fr); }
        }

        .card-link{
            display: block;
            text-decoration: none;
            color: inherit;
        }

        .card-custom{
            background: var(--card-bg);
            border-radius: 12px;
            overflow: hidden;
            box-shadow: 0 6px 20px rgba(50,30,20,0.06);
            transition: transform .22s ease, box-shadow .22s ease;
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        .card-custom:hover{
            transform: translateY(-6px);
            box-shadow: 0 18px 36px rgba(60,40,30,0.12);
        }

        .card-media{
            width: 100%;
            height: 160px;
            object-fit: cover;
        }

        .card-body{
            padding: 1rem 1.15rem;
            flex: 1;
            display: flex;
            flex-direction: column;
        }

        .card-title{
            font-weight: 700;
            margin-bottom: .45rem;
        }

        .card-desc{
            font-size: .95rem;
            flex: 1;
        }

        .card-footer{
            padding: .8rem 1.15rem;
            border-top: 1px solid rgba(0,0,0,.05);
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .btn-card{
            background: var(--terracota);
            color: #fff;
            border-radius: 8px;
            padding: .45rem .85rem;
            border:none;
            font-weight:600;
        }

        .btn-card:hover{
            background: var(--marron-md);
        }

        .meta{
            font-size:.85rem;
            color:#6b584a;
        }
    </style>
</head>

<body>



<div class="container py-4">

    <div class="page-header d-flex justify-content-between align-items-center">
        <div>
            <h3 class="mb-0">Panel de Secciones</h3>
            <small>Accede rápidamente a las diferentes páginas y proyectos de AFROI</small>
        </div>
        <i class='bx bx-grid-alt bx-md'></i>
    </div>

    <!-- ===== CARDS ESTÁTICAS ===== -->
    <div class="cards-grid">

        <a class="card-link" href="proyectos.php">
            <article class="card-custom">
                <img class="card-media" src="../assets/img/Emp_Individual1.jpg" alt="Proyectos">
                <div class="card-body">
                    <div class="card-title">Proyectos Comunitarios</div>
                    <p class="card-desc">
                        Conoce los emprendimientos y proyectos sociales impulsados por AFROI.
                    </p>
                    <div class="card-footer">
                        <span class="meta">Actualizado 2025</span>
                        <button class="btn-card">Ver</button>
                    </div>
                </div>
            </article>
        </a>

        <a class="card-link" href="cursos.php">
            <article class="card-custom">
                <img class="card-media" src="../assets/img/Emprendimiento2.jpeg" alt="Cursos">
                <div class="card-body">
                    <div class="card-title">Cursos y Talleres</div>
                    <p class="card-desc">
                        Defensa personal, artes, capacitación en seguridad y más.
                    </p>
                    <div class="card-footer">
                        <span class="meta">Inscripciones abiertas</span>
                        <button class="btn-card">Ver</button>
                    </div>
                </div>
            </article>
        </a>

        <a class="card-link" href="MatriculaCero.php">
            <article class="card-custom">
                <img class="card-media" src="../assets/img/MatriculaCero.png" alt="Matrícula Cero">
                <div class="card-body">
                    <div class="card-title">Matrícula Cero</div>
                    <p class="card-desc">
                        Universidades con beneficio de matrícula cero por ser miembro AFROI.
                    </p>
                    <div class="card-footer">
                        <span class="meta">Beneficio activo</span>
                        <button class="btn-card">Ver</button>
                    </div>
                </div>
            </article>
        </a>

        <a class="card-link" href="FondoComunidadesNegras.php">
            <article class="card-custom">
                <img class="card-media" src="../assets/img/convocatoria-comunidades-negras.jpg" alt="Fondo Comunidades">
                <div class="card-body">
                    <div class="card-title">Fondo de Comunidades Negras</div>
                    <p class="card-desc">
                        Créditos condonables para estudios de pregrado y posgrado.
                    </p>
                    <div class="card-footer">
                        <span class="meta">Apoyo educativo</span>
                        <button class="btn-card">Ver</button>
                    </div>
                </div>
            </article>
        </a>

    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
