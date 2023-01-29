<!DOCTYPE html>

<html lang="pt">
    <head>
    <link rel="icon" href="./favicon.png" type="image/ico">
        <title>Projeto Modulate | Início</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php 
            session_start();

            if(!$_SESSION['connected']['email']) header("location: ../index.php");
        ?>

        <header class="p-3 text-bg-dark">
            <div class="container">
                <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                    <a href="../view/home.php" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
                        <img src="../favicon.png" class="bi me-2" width="40" height="40">
                    </a>

                    <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
                        <li><a href="../view/home.php" class="nav-link px-2 text-secondary">Início</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Meus produtos</a></li>
                        <li><a href="#" class="nav-link px-2 text-white">Pedidos</a></li>
                    </ul>

                    <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3" role="search">
                        <input type="search" class="form-control form-control-dark text-bg-dark" placeholder="Buscar produtos" aria-label="Search">
                    </form>

                    <div class="dropdown text-end">
                        <a href="#" class="d-block text-white text-decoration-none dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            <?php echo $_SESSION['connected']['name'] ?>
                        </a>
                        <ul class="dropdown-menu text-small" style="">
                            <li><a class="dropdown-item" href="#">Perfil</a></li>
                            <li><hr class="dropdown-divider"></li>
                            <li><a class="dropdown-item" href="../controller/logout.php">Sair</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>
    </body>
</html>