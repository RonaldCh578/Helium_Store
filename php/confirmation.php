<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Confirmation of your purchase">
    <title>Confirmación de compra</title>
    <!--Bootstrap version-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <!--Google fonts Poppins-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600;700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Hind+Madurai&display=swap" rel="stylesheet">
    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!--Main stylesheet-->
    <link href="../css/style.min.css" rel="stylesheet">

</head>

<body>

    <!--Container fluid-->
    <div class="container-fluid">
        <header class="row justify-content-center dark_blue fixed-top">

            <div class="col col-sm-11 col-md-10 col-lg-8">
                <div class="row">
                    <nav class="top_nav" aria-label="navigator">
                        <a href="../index.php"><img class="logo" src="../img/svg/logo.svg"
                                alt="Logo de Helium Store"></a>
                        <input type="checkbox" id="nav_options">
                        <label class="mobile_menu_icon" for="nav_options">
                            <img src="../img/svg/mobile_menu.svg" alt="Opciones de navegacion">
                        </label>
                        <div>
                            <ul>
                                <li><a href="../index.php">Inicio</a></li>
                                <li>
                                    <a href="../php/category.php">Categorías<span class="fas fa-caret-down"></span></a>
                                    <ul class="children">
                                        <li><a href="#Conciertos">Conciertos</a></li>
                                        <li><a href="#Infantiles">Infantiles</a></li>
                                        <li><a href="#Familiares">Familiares</a></li>
                                        <li><a href="#Deportes">Deportes</a></li>
                                        <li><a href="#Festivales">Festivales</a></li>
                                        <li><a href="#TeatroCultura">Teatro y cultura</a></li>
                                    </ul>
                                </li>
                                <li><a href="#">Contáctenos</a></li>
                            </ul>
                        </div>

                    </nav>

                </div>
            </div>

        </header>

        <!--Start Page Content-->
        <div class="min_height_container" role="main" aria-label="main_content">

            <div class="row justify-content-center">
                <div class="col col-sm-11 col-md-10 col-lg-8">

                    <div class="row">
                        <div class="col-sm">
                            <h1 class="middle_h1 after">Si compra se ha procesado con éxito</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-sm">
                            <h2>Resumen</h2>
                            <div class="confirmation_detail">

                                <div class="row">
                                    <div class="col">
                                        <p>2X Adultos</p>
                                    </div>
                                    <div class="col">
                                        <p>₡0</p>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col">
                                        <p>Total: ₡0</p>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <a class="btn_backHome_confirmation" href="../index.php">Volver a inicio</a>
                    </div>
                </div>
            </div>

        </div>
        <!--End Page Content-->

        <footer class="row justify-content-center dark_blue">
            <div class="col col-sm-11 col-md-10 col-lg-8">
                <div class="row">
                    <div class="col-sm">
                        <nav>
                            <ul>
                                <li><a href="https://www.facebook.com/" aria-label="Facebook"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="https://www.instagram.com/" aria-label="Instagram"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://cr.linkedin.com/" aria-label="Linkedin"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://www.youtube.com/" aria-label="Youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-sm">
                        <p>Helium Store <br /> © Derechos reservados <br /> Designed by Ronald</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>