<?php
session_start();
// (si luego deseas controlar acceso, aquí es donde iría la validación de sesión)
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8" />
<title>Emprendimientos AFROI</title>

<!-- Boxicons + Bootstrap -->
<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">

<style>
/* Paleta tonos tierra */
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
    background: linear-gradient(90deg, var(--mostaza), var(--terracota));
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

.card-link{ text-decoration:none; color:inherit; }

.card-custom{
    background: var(--card-bg);
    border-radius: 12px;
    overflow: hidden;
    box-shadow: 0 6px 20px rgba(50,30,20,0.06);
    transition: transform .22s ease, box-shadow .22s ease;
    border: 1px solid rgba(60,40,30,0.06);
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
    background: #f2ebe3;
}

.card-body{
    padding: 1rem 1.15rem;
    flex:1;
    display:flex;
    flex-direction:column;
}

.card-title{ font-weight:700; margin-bottom:.45rem; }
.card-desc{ flex:1; margin-bottom:1rem; }

.card-footer{
    padding:.8rem 1.15rem;
    border-top:1px solid rgba(60,40,30,0.04);
    display:flex;
    justify-content:space-between;
    align-items:center;
}

.btn-card{
    background: var(--verde-oliva);
    color:#fff;
    border-radius:8px;
    padding:.45rem .85rem;
    font-weight:600;
    border:none;
}
.btn-card:hover{ background: var(--marron-md); color:#fff; }
.meta{ font-size:.9rem; color:#6b584a; }
</style>
</head>

<body>

<div class="container py-4">

<div class="page-header d-flex justify-content-between align-items-center">
    <div>
        <h3 class="mb-0">Emprendimientos</h3>
        <small>Descubre las iniciativas de la comunidad AFROI</small>
    </div>
    <i class='bx bx-leaf' style="font-size:1.6rem;"></i>
</div>

<div class="cards-grid">

<?php
$cards = [
    ["Artesanías Raíces","Productos artesanales hechos a mano que preservan la cultura y tradiciones afrocolombianas.","imagenes/Emprendimiento3.png","Local Itagüí","emprendimiento1.php"],
    ["Gastronomía Ancestral","Sabores únicos con recetas tradicionales transmitidas de generación en generación.","imagenes/Emprendimiento1.jpg","Evento semanal","emprendimiento2.php"],
    ["Noticias & Eventos","Mantente informado de las últimas actividades, campañas y logros de la comunidad AFROI.","imagenes/Emprendimiento4.webp","Actualizado semanalmente","noticias.php"],
    ["Galería Fotográfica","Explora momentos destacados en imágenes que reflejan la cultura y el trabajo social.","imagenes/Emprendimiento5.jpg","+150 fotos disponibles","galeria.php"],
    ["Apoya nuestra causa","Con tu aporte ayudas a sostener proyectos sociales y comunitarios.","imagenes/Emprendimiento6.jpg","100% transparente","donaciones.php"],
    ["Moda Afro","Ropa y accesorios que combinan estilo moderno con identidad cultural.","imagenes/Emprendimiento2.jpeg","Tienda online","emprendimiento3.php"],
    
    // 🔥 TU EMPRENDIMIENTO
    ["Tecnología & Seguridad Electrónica",
     "Reparación y mantenimiento de computadores, instalación de cámaras CCTV, alarmas, redes y soluciones de seguridad tecnológica.",
     "imagenes/EmprendimientoTecnologia.jpg",
     "Servicio profesional",
     "tecnologia.php"]
    
    ];

foreach($cards as $c):
?>
<a class="card-link" href="<?= $c[4] ?>">
<article class="card-custom">
    <div class="card-media">
        <img src="<?= $c[2] ?>" style="width:100%; height:100%; object-fit:cover;">
    </div>
    <div class="card-body">
        <div class="card-title"><?= $c[0] ?></div>
        <p class="card-desc"><?= $c[1] ?></p>
        <div class="card-footer">
            <span class="meta"><?= $c[3] ?></span>
            <button class="btn-card">Ver más</button>
        </div>
    </div>
</article>
</a>
<?php endforeach; ?>

</div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
