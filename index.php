<!DOCTYPE html>

<html lang="pt">
    <head>
    <link rel="icon" href="./favicon.png" type="image/ico">
        <title>Projeto Modulate</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php
            session_start();

            if(isset($_SESSION['connected']['email'])) header("location: ../view/home.php");

            if(!isset($_SESSION['errorLogin'])) $_SESSION['errorLogin'] = false;
            if(!isset($_SESSION['signUpSuccessful'])) $_SESSION['signUpSuccessful'] = false;
        ?>

        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-lg-7 text-center text-lg-start">
                    <img src="./logo.png" alt="" width="25%" height="25%">
                    <h1 class="display-4 fw-bold lh-1 mb-3">Projeto Modulate</h1>
                    <p class="col-lg-10 fs-4">O Projeto Modulate tem por finalidade ajudar na compra e venda de produtos em formato modular. O cliente escolhe cada detalhe da sua mercadoria e assim encontra o item desejado.</p>
                </div>
                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-light" action="./controller/login.php" method="POST">
                        <div class="form-floating mb-3">
                            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="password">
                            <label for="floatingPassword">Senha</label>
                        </div>

                        <?php
                            if($_SESSION['errorLogin']) {
                        ?>
                                <div class="alert alert-danger" role="alert">Usuário inválido</div>
                        <?php
                            }
                            $_SESSION['errorLogin'] = false;

                            if($_SESSION['signUpSuccessful']) {
                        ?>
                                <div class="alert alert-success" role="alert">Novo usuário cadastrado</div>
                        <?php
                            }
                                $_SESSION['signUpSuccessful'] = false;
                        ?>

                        <button class="w-100 btn btn-lg btn-primary" type="submit">Entrar</button>
                        <hr class="my-4">
                        <a href="">
                            <button class="w-100 btn btn-lg btn-outline-primary" formaction="./view/signup.php">Cadastre-se</button>
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>