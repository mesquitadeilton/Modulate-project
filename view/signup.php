<!DOCTYPE html>

<html lang="pt">
    <head>
        <link rel="icon" href="./favicon.png" type="image/ico">
        <title>Projeto Modulate | Cadastrar-se</title>

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    </head>

    <body>
        <?php
            session_start();
            if(!isset($_SESSION['errorEmptySignUp'])) $_SESSION['errorEmptySignUp'] = false;
            if(!isset($_SESSION['errorSignUp'])) $_SESSION['errorSignUp'] = false;
        ?>

        <div class="container col-xl-10 col-xxl-8 px-4 py-5">
            <div class="row align-items-center g-lg-5 py-5">
                <div class="col-md-10 mx-auto col-lg-5">
                    <form class="p-4 p-md-5 border rounded-3 bg-light" action="../controller/signup.php" method="POST">
                        <img class="d-block mx-auto mb-3" src="../logo.png" alt="" width="25%" height="25%">
                        <div class="form-floating mb-3">
                            <input name="name" type="name" class="form-control" id="floatingInput" placeholder="name">
                            <label for="floatingInput">Nome</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="email" type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                            <label for="floatingInput">Email</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input name="password" type="password" class="form-control" id="floatingPassword" placeholder="password">
                            <label for="floatingPassword">Senha</label>
                        </div>

                        <?php
                            if($_SESSION['errorEmptySignUp']) {
                        ?>
                                <div class="alert alert-danger" role="alert">Preencha os campos para continuar</div>
                        <?php
                            }
                            $_SESSION['errorEmptySignUp'] = false;

                            if($_SESSION['errorSignUp']) {
                        ?>
                                <div class="alert alert-danger" role="alert">Usuário já cadastrado</div>
                        <?php
                            }
                            $_SESSION['errorSignUp'] = false;
                        ?>

                        <button class="w-100 btn btn-lg btn-primary" type="submit">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>