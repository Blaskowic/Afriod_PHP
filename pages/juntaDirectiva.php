<?php
// juntaDirectiva.php
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Junta Directiva - Afroi</title>

    <!-- Boxicons + Bootstrap 4.6 -->
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

    <style>
        /* Colores tierra eléctricos */
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
            background-color: var(--beige);
            color: var(--marron-osc);
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            -webkit-font-smoothing:antialiased;
        }

        .page-header{
            background: linear-gradient(90deg, var(--terracota), var(--marron-md));
            color: #fff;
            padding: 24px;
            border-radius: 10px;
            margin-bottom: 30px;
            box-shadow: 0 6px 18px rgba(59,40,29,0.12);
            text-align: center;
        }

        .page-header h1{
            margin: 0;
            font-weight: 700;
        }

        .team-section{
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 2rem;
            margin-top: 2rem;
        }

        .team-card{
            background: var(--card-bg);
            border-radius: 12px;
            padding: 1.5rem;
            text-align: center;
            box-shadow: 0 6px 16px rgba(60,40,30,0.1);
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .team-card:hover{
            transform: translateY(-6px);
            box-shadow: 0 12px 24px rgba(60,40,30,0.2);
        }

        .team-card img{
            width: 120px;
            height: 120px;
            object-fit: cover;
            border-radius: 50%;
            border: 4px solid var(--terracota);
            margin-bottom: 1rem;
        }

        .team-card h5{
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: var(--marron-osc);
        }

        .team-card p{
            margin: 0;
            color: var(--marron-md);
            font-size: 0.95rem;
        }

        .highlight-role{
            color: var(--terracota);
            font-weight: 600;
        }

    </style>
</head>
<body>

<div class="container py-5">

    <div class="page-header">
        <h1>Junta Directiva - Afroi</h1>
        <p style="opacity:0.9; margin-top:0.5rem;">Conoce a nuestro equipo que lidera la asociación</p>
    </div>

    <div class="team-section">
        <!-- Presidenta -->
        <div class="team-card">
            <img src="../assets/ImagenesAfroi/IMG-20251111-WA0044.jpg" alt="Socorro"/>
            <h5>ANA DEL SOCORRO CORDOBA MORENO</h5>
            <p class="highlight-role">Presidenta</p>
        </div>

        <!-- Vicepresidenta -->
        <div class="team-card">
            <img src="../assets/ImagenesAfroi/Martha Garcia.jpeg" alt="Martha Abad García Moreno">
            <h5>MARTHA ABAD GARCIA MORENO</h5>
            <p class="highlight-role">Vicepresidenta</p>
        </div>

        <!-- Miembro 1 -->
        <div class="team-card">
            <img src="https://via.placeholder.com/120" alt="Miembro 1">
            <h5>Juan Pérez</h5>
            <p class="highlight-role">Secretario</p>
        </div>

        <!-- Miembro 2 -->
        <div class="team-card">
            <img src="https://via.placeholder.com/120" alt="Miembro 2">
            <h5>Ana Rodríguez</h5>
            <p class="highlight-role">Tesorera</p>
        </div>
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
