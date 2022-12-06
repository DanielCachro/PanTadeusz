<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <title>Pan Tadeusz</title>
</head>

<body>
    <header class="container-fluid text-center bg-dark text-white">
        <nav class="navbar navbar-dark bg-dark">
            <div class="container-fluid">
                <h1 class="fs-6 m-0 text-center">Pan Tadeusz, czyli Ostatni zajazd na Litwie. Historia szlachecka z
                    roku 1811 i 1812 we dwunastu księgach wierszem.</h1>
                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasDarkNavbar" aria-controls="offcanvasDarkNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasDarkNavbar"
                    aria-labelledby="offcanvasDarkNavbarLabel">
                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasDarkNavbarLabel">Spis treści</h5>
                        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>
                    <div class="offcanvas-body">
                        <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                        <?php 
                            for ($k=1; $k<=12; $k++) {
                                print("<li class='nav-item'>
                                <a class='nav-link' href='./k$k.html'>Księga $k</a>
                                </li>");
                                }
                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <div class="container mt-4">
        <div class="row align-items-center">
            <div class="col-12 col-md-3">
                <h2>Spis treści</h2>
                <ul class="list-group list-group-flush">
                    <li class='list-group-item'><a href="./" class='nav-link'>Strona główna</a></li>
                    <?php 
                        for ($k=1; $k<=12; $k++) {
                            print("<li class='list-group-item'><a href='./index.php?k=$k&name=Ala' class='nav-link'>Księga $k</a></li>");
                        }
                    ?>
                </ul>
            </div>
            <div class="col-3"></div>
            <div class="col-6">
                <?php
                    if (isset($_GET['k'])) {
                        $k = $_GET['k'];
                        include_once("k$k.html"); 
                    } else {
                        print("<img src='./imgs/2861c6c6c7545bf2-pan-tadeusz.jpg' alt='Pan Tadeusz okładka' style='height: 25rem;'>");
                    }
                ?>
            </div>
        </div>
    </div>
    <div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
        integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
        crossorigin="anonymous"></script>

    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
    </style>
</body>

</html>