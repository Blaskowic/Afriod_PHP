<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>AFROI | Acceso y Registro</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <!-- Boxicons -->
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">

        <style>
            body{
                font-family: 'Poppins', sans-serif;
                min-height:100vh;
                background: linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)),
                    url("assets/img/InicioSesion.png") center/cover no-repeat;
                transition: background-image .5s ease-in-out;
            }

            .auth-card{
                background: rgba(255,255,255,.12);
                backdrop-filter: blur(14px);
                border-radius:20px;
                padding:40px;
                color:#fff;
                box-shadow:0 20px 50px rgba(0,0,0,.5);
            }

            .brand{
                text-align:center;
                margin-bottom:25px;
            }

            .brand img{
                max-height:70px;
                margin-bottom:10px;
            }

            label{
                font-size:.9rem;
                color:#f5d395;
            }

            .form-control,
            .form-select{
                background: rgba(255,255,255,.08);
                border: 1px solid rgba(255,255,255,.5);
                color:#fff;
            }

            .form-control::placeholder{
                color:rgba(255,255,255,.7);
            }

            .form-control:focus,
            .form-select:focus{
                background: rgba(255,255,255,.12);
                border-color:#ffb300;
                box-shadow:none;
                color:#fff;
            }

            .btn-custom{
                background:#ffb300;
                color:#3d2b1f;
                font-weight:600;
                border-radius:12px;
            }

            .btn-custom:hover{
                background:#e6a800;
            }

            .toggle-link{
                cursor:pointer;
                color:#ffb300;
                text-decoration:underline;
            }

            /* Transiciones */
            .fade{
                opacity:0;
                transform: translateY(10px);
                pointer-events:none;
                transition: all .4s ease;
                display:none;
            }

            .fade.show{
                opacity:1;
                transform: translateY(0);
                pointer-events:auto;
                display:block;
            }

            /*boton de volver al inicio*/
            .btn-volver{
                position: absolute;
                top: 20px;
                left: 20px;
                background: rgba(255,255,255,.15);
                backdrop-filter: blur(10px);
                color: #fff;
                border: 1px solid rgba(255,255,255,.4);
                border-radius: 30px;
                padding: 8px 18px;
                font-weight: 500;
                text-decoration: none;
                transition: all .3s ease;
                box-shadow: 0 8px 20px rgba(0,0,0,.3);
                z-index: 10;
            }

            .btn-volver i{
                margin-right: 6px;
            }

            .btn-volver:hover{
                background: rgba(255,255,255,.25);
                color: #ffb300;
                border-color: #ffb300;
                transform: translateY(-2px);
            }
        </style>
    </head>

    <body class="d-flex align-items-center justify-content-center">
        <a href="index.php" class="btn-volver">
            <i class='bx bx-arrow-back'></i> Volver al inicio
        </a>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">

                    <div class="auth-card">

                        <div class="brand">
                            <img src="assets/img/AFROI2.png" alt="AFROI">
                            <h5>Asociación Afrocolombiana de Itagüí</h5>
                        </div>

                        <!-- LOGIN -->
                        <div id="loginForm" class="fade show">
                            <h2 class="text-center mb-4">Iniciar Sesión</h2>

                            <?php if (isset($_GET['error'])): ?>
                                <div class="alert alert-danger text-center">
                                    Correo o contraseña incorrectos
                                </div>
                            <?php endif; ?>

                            <form action="InicioSesion/InicioSesion.php" method="post">
                                <div class="mb-3">
                                    <label>Correo electrónico</label>
                                    <input type="email" name="correo" class="form-control" placeholder="correo@ejemplo.com" required>
                                </div>

                                <div class="mb-4">
                                    <label>Contraseña</label>
                                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                                </div>

                                <button class="btn btn-custom w-100 mb-3">
                                    <i class='bx bx-log-in'></i> Ingresar
                                </button>
                            </form>

                            <p class="text-center">
                                ¿No tienes cuenta?
                                <span class="toggle-link" onclick="mostrarRegistro()">Regístrate aquí</span>
                            </p>
                        </div>

                        <!-- REGISTRO -->
                        <div id="registerForm" class="fade">
                            <h2 class="text-center mb-4">Registro</h2>

                            <form action="Registro/RegistrarUsuario.php" method="post">
                                <div class="mb-3">
                                    <label>Nombre completo</label>
                                    <input type="text" name="nombre" class="form-control" placeholder="Nombre completo" required>
                                </div>

                                <div class="row mb-3">
                                    <div class="col-md-6">
                                        <label>Tipo de documento</label>
                                        <select name="tipo_documento" class="form-select" required>
                                            <option disabled selected>Seleccione</option>
                                            <option value="CC">Cédula de Ciudadanía</option>
                                            <option value="TI">Tarjeta de Identidad</option>
                                            <option value="CE">Cédula de Extranjería</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mt-2 mt-md-0">
                                        <label>Número</label>
                                        <input type="text" name="documento" class="form-control" placeholder="Documento" required>
                                    </div>
                                </div>

                                <div class="mb-3">
                                    <label>Correo electrónico</label>
                                    <input type="email" name="correo" class="form-control" placeholder="correo@ejemplo.com" required>
                                </div>

                                <div class="mb-4">
                                    <label>Contraseña</label>
                                    <input type="password" name="password" class="form-control" placeholder="••••••••" required>
                                </div>

                                <button class="btn btn-custom w-100 mb-3">
                                    <i class='bx bx-user-plus'></i> Registrarme
                                </button>
                            </form>

                            <p class="text-center">
                                ¿Ya tienes cuenta?
                                <span class="toggle-link" onclick="mostrarLogin()">Inicia sesión</span>
                            </p>
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <script>
            function mostrarRegistro() {
                document.getElementById('loginForm').classList.remove('show');
                setTimeout(() => {
                    document.getElementById('loginForm').style.display = "none";
                    document.getElementById('registerForm').style.display = "block";
                    document.getElementById('registerForm').classList.add('show');
                }, 200);

                document.body.style.backgroundImage =
                        "linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)),url('assets/img/InicioSesion.png')";
            }

            function mostrarLogin() {
                document.getElementById('registerForm').classList.remove('show');
                setTimeout(() => {
                    document.getElementById('registerForm').style.display = "none";
                    document.getElementById('loginForm').style.display = "block";
                    document.getElementById('loginForm').classList.add('show');
                }, 200);

                document.body.style.backgroundImage =
                        "linear-gradient(rgba(0,0,0,.55),rgba(0,0,0,.55)),url('assets/img/InicioSesion.png')";
            }
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>
