<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Here you have to specify the amount of fields you want to buy">
    <title>Información de compra</title>
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
                                        <li><a href="#Conciertos">Conciertos</a></li>
                                        <li><a href="#Infantiles">Infantiles</a></li>
                                        <li><a href="#Familiares">Familiares</a></li>
                                        <li><a href="#Deportes">Deportes</a></li>
                                        <li><a href="#Festivales">Festivales</a></li>
                                        <li><a href="#Teatro y cultura">Teatro y cultura</a></li>
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
                            <h1 class="middle_h1 after">Compra de entradas</h1>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-8">
                    <div class="row">
                        <div class="col-sm">
                            <p class="subtitle_shop_info">Campos disponibles: 19</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-sm-8 shop_info">
                    <form action="../php/shop_info.php">

                        <div class="row">
                            <div class="col-sm">

                                <label class="subtitle_shop_info" for="qty_tickets_bought">Cantidad</label>
                                <span>
                                    <button class="minus_border_radius" aria-label="minus button" type="button"><i
                                            class="fas fa-minus"></i></button>
                                    <input name="qty_ticket" title="" id="qty_tickets_bought" value="0" min="0"
                                        type="text">
                                    <button class="plus_border_radius" aria-label="plus button" type="button"><i class="fas fa-plus"></i></button>
                                </span>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm">

                                <h2>Detalle de compra</h2>
                                <div class="shop_detail">

                                    <div class="row">
                                        <div class="col">
                                            <p>Título</p>
                                        </div>
                                        <div class="col">
                                            <p>Precio</p>
                                        </div>
                                        <div class="col">
                                            <p>Subtotal</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <p>2X adultos</p>
                                        </div>
                                        <div class="col">
                                            <p>0</p>
                                        </div>
                                        <div class="col">
                                            <p>0</p>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col">
                                            <p class="total_shop_info">Total: ₡0</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm">
                                <button id="btn_continue_shoping" aria-label="continue button" type="submit">Continuar</button>
                            </div>
                        </div>

                    </form>

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