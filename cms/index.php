<!DOCTYPE html>
<?php
session_start();
if (!isset($_SESSION['loggedin'])
) {
    header('Location: login.php');
    exit();
}

?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista zadataka</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css" type="text/css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

</head>

<body>
    <div class="vertical-nav bg-white" id="sidebar">
        <div class="py-4 px-3 mb-4 bg-light">
            <div class="media d-flex align-items-center"><img src="img/shop_logo.png" alt="..." width="85" class="mr-3  img-thumbnail shadow-sm">
                <div class="media-body">
                    <p class="font-weight-light text-muted mb-0">Ulogovan si kao:</p>
                    <h4 class="m-0">
                        <?php echo $_SESSION['name']; ?> </h4>

                </div>
            </div>
        </div>

        <p class="text-gray font-weight-bold text-uppercase px-3 small pb-4 mb-0">Rad sa artiklima</p>


        <ul class="nav flex-column bg-white mb-0 " id="myTab" role="tablist">
            <li class="nav-item">
                <a href="#artikli" class="nav-link text-dark font-italic" id="artikli-tab" data-toggle="tab" role="tab" aria-controls="artikli" aria-selected="true">
                    <i class="fa fa-th-large mr-3 text-primary fa-fw"></i> Artikli
                </a>
            </li>
            <li class="nav-item">
                <a href="#kategorije" class="nav-link text-dark font-italic" id="kategorije-tab" data-toggle="tab" role="tab" aria-controls="kategorije" aria-selected="true">
                    <i class="fa fa-address-card mr-3 text-primary fa-fw"></i> Kategorije
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-dark font-italic">
                    <i class="fa fa-cubes mr-3 text-primary fa-fw"></i> Akcije
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-dark font-italic">
                    <i class="fa fa-picture-o mr-3 text-primary fa-fw"></i> Export
                </a>
            </li>

            <p class="text-gray font-weight-bold text-uppercase px-3 small py-4 mb-0">Korisnici</p>


            <li class="nav-item">
                <a href="#" class="nav-link text-dark font-italic">
                    <i class="fa fa-area-chart mr-3 text-primary fa-fw"></i> Lista korisnika
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-dark font-italic">
                    <i class="fa fa-bar-chart mr-3 text-primary fa-fw"></i> Dodavanje korisnika
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link text-dark font-italic">
                    <i class="fa fa-pie-chart mr-3 text-primary fa-fw"></i> Export
                </a>
            </li>
        </ul>
    </div>
    <div class="page-content p-5 tab-content" id="content">
        <!-- Toggle button -->
        <button id="sidebarCollapse" type="button" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">MENI</small></button>
        <a href="php/logout.php" class="btn btn-light bg-white rounded-pill shadow-sm px-4 mb-4" role="button" aria-pressed="true"><i class="fa fa-bars mr-2"></i><small class="text-uppercase font-weight-bold">Logout</small></a>

        <!--main-->
        <div id="artikli" class="tab-pane fade show" role="tabpanel" aria-labelledby="artikli-tab">
            <p>artikli</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet atque neque necessitatibus tenetur temporibus vel nihil porro, assumenda totam cumque fugit aperiam molestias consectetur modi doloribus cupiditate labore qui ipsam!</p>
        </div>
        <!--kategorije-->
        <div id="kategorije" class="tab-pane fade show" role="tabpanel" aria-labelledby="kategorije-tab">
            <p>kategorije</p>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet atque neque necessitatibus tenetur temporibus vel nihil porro, assumenda totam cumque fugit aperiam molestias consectetur modi doloribus cupiditate labore qui ipsam!</p>
        </div>
        <div id="akcije" class="container tab-pane fade show" role="tabpanel" aria-labelledby="Akcije-tab">

            <div class="row text-center mt-3">
                <div class="">
                    <p class="h4"></p>
                </div>
            </div>
        </div>
    </div>

    <!--table-->

    <!---->
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

</body>

</html>