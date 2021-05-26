<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Page for category">
    <title>Categorías</title>
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
    <link href="../css/style.css" rel="stylesheet">

</head>

<body>

    <!--Container fluid-->
    <div class="container-fluid">
        <header class="row justify-content-center dark_blue fixed-top">

            <div class="col-sm-8">
                <div class="row">
                    <nav class="top_nav">
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
                                        <li><a href="#">Conciertos</a></li>
                                        <li><a href="#">Infantiles</a></li>
                                        <li><a href="#">Familiares</a></li>
                                        <li><a href="#">Deportes</a></li>
                                        <li><a href="#">Festivales</a></li>
                                        <li><a href="#">Teatro y cultura</a></li>
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
        <div class="min_height_container">

            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm">
                            <h1 class="category_title after">Conciertos</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="row">

                        <div class="col-sm-4">

                            <div class="card category_card">
                                <img src="../img/concierto01.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Lorem ipsum dolor sit amet.</h2>

                                    <h3 class="card-text">Gratis</h3>

                                    <p class="card-text">Lugar <br /> 17/05/21 - 1:00 p.m. <br /> Categoría</p>

                                    <a href="../php/event_detail.php" class=""><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-4">

                            <div class="card category_card">
                                <img src="../img/concierto01.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Lorem ipsum dolor sit amet.</h2>

                                    <h3 class="card-text">Gratis</h3>

                                    <p class="card-text">Lugar <br /> 17/05/21 - 1:00 p.m. <br /> Categoría</p>

                                    <a href="../php/event_detail.php" class=""><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-4">

                            <div class="card category_card">
                                <img src="../img/concierto01.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Lorem ipsum dolor sit amet.</h2>

                                    <h3 class="card-text">Gratis</h3>

                                    <p class="card-text">Lugar <br /> 17/05/21 - 1:00 p.m. <br /> Categoría</p>

                                    <a href="../php/event_detail.php" class=""><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>

                        <div class="col-sm-4">

                            <div class="card category_card">
                                <img src="../img/concierto01.jpg" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h2 class="card-title">Lorem ipsum dolor sit amet.</h2>

                                    <h3 class="card-text">Gratis</h3>

                                    <p class="card-text">Lugar <br /> 17/05/21 - 1:00 p.m. <br /> Categoría</p>

                                    <a href="../php/event_detail.php" class=""><i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>

                        </div>

                    </div>

                </div>
            </div>

        </div>
        <!--End Page Content-->

        <footer class="row justify-content-center dark_blue">
            <div class="col-sm-8">
                <div class="row">
                    <div class="col-sm">
                        <nav>
                            <ul>
                                <li><a href="https://www.facebook.com/"><i class="fab fa-facebook-square"></i></a></li>
                                <li><a href="https://www.instagram.com/"><i class="fab fa-instagram"></i></a></li>
                                <li><a href="https://cr.linkedin.com/"><i class="fab fa-linkedin"></i></a></li>
                                <li><a href="https://www.youtube.com/"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </nav>
                    </div>
                    <div class="col-sm">
                        <p>© Derechos reservados <br /> Designed by Ronald</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>