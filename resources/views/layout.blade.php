<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="This is an store to buy tickets for many different events">
    <title>Helium Store</title>
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

            <div class="col col-sm-11 col-md-10 col-lg-8">
                <div class="row">
                    <nav class="top_nav" aria-label="navigator">
                        <a href="/"><img class="logo" src="../img/svg/logo.svg" alt="Logo de Helium Store"></a>
                        <input type="checkbox" id="nav_options">
                        <label class="mobile_menu_icon" for="nav_options">
                            <img src="../img/svg/mobile_menu.svg" alt="Opciones de navegacion">
                        </label>
                        <div>
                            <ul>
                                <li><a href="/">Inicio</a></li>
                                <li>
                                    <a href="/category/Todos los eventos">Categorías<span class="fas fa-caret-down"></span></a>
                                    <ul class="children">
                                        <li><a href="/category/Conciertos">Conciertos</a></li>
                                        <li><a href="/category/Infantiles">Infantiles</a></li>
                                        <li><a href="/category/Familiares">Familiares</a></li>
                                        <li><a href="/category/Deportes">Deportes</a></li>
                                        <li><a href="/category/Festivales">Festivales</a></li>
                                        <li><a href="/category/Teatro y Cultura">Teatro y cultura</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>

                    </nav>

                </div>
            </div>

        </header>

        <!--Start Page Content-->
        <div class="min_height_container" role="main" aria-label="main_content">

            @yield('content')

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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js"
        integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous">
        </script>

    <script src="../js/main.js"></script>

</body>

</html>