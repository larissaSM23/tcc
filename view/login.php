<?php
$title = "Login";
include('./components/head.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    
</head>


<body class="" style="background-color: #e4e4e4">

    <div class="triangle"></div>
    <div class="container d-flex flex-column min-vh-100 justify-content-center">
        <div class="row">
            <div class="col bg-white rounded-start pb-5">
                <div class="w-100 p-4"></div>
                <h2 class="fw-bold text-center p-5" style="color: #115D8C">Login</h2>

                <form action="../controller/login" method="post" class="mx-5">

                    <div class="input-group has-validation mb-4" id="email-login" data-content="Aqui você deve digitar seu email" rel="popover" data-placement="top" data-trigger="hover">
                        <i class="bi bi-envelope input-group-text"></i>
                        <input type="email" class="form-control" name="email" required autocomplete="email" placeholder="Email" id="email">

                        <span class="invalid-feedback">
                            <strong>Digite novamente seu email</strong>
                        </span>
                    </div>

                    <div class="input-group mb-4" id="senha-login" data-content="Aqui você deve digitar sua senha" rel="popover" data-placement="bottom" data-trigger="hover">
                        <i class="bi bi-lock input-group-text"></i>
                        <input type="password" class="form-control" required autocomplete="current-password" name="senha" placeholder="Senha" id="senha">
                    </div>

                    <div class="d-flex justify-content-center">
                        <a href="insira_um_link_aqui" class="link-dark link-underline-none">Esqueceu a senha?</a>
                    </div>

                    <div class="d-flex justify-content-center mt-3">
                        <button type="submit" id="botao-login" class="btn btn-primary rounded-pill w-50 p-3 fw-bold" style="background-color: #115D8C; border-color: #115D8C" data-content="Após preencher os campos clique aqui!" rel="popover" data-placement="left" data-trigger="hover">Logar</button>
                    </div>
                </form>
                <div class="w-100 p-3"></div>
            </div>
            <div class="col rounded-end" style="background-color: #115D8C">
                <h3 class="fw-bold text-white text-end mb-5 mt-3 mx-3">Help Autismo</h3>
                <div class="w-100 p-4"></div>
                <h2 class="fw-bold text-white text-center">Bem Vindo de Volta!</h2>
                <p class="fw-bold font-monospace text-white text-center mb-4 mt-4">Para se conectar novamente <br> coloque seus dados </p>

                <div class="d-flex justify-content-center">
                    <a href="#" type="submit" class="btn btn-primary w-50 p-2 mt-4 fw-bold border-white disabled" style="background-color: #115D8C">Login</a>
                </div>
            </div>
        </div>
    </div>
    <div class="circle"></div>

    <?php
include('./components/scripts');
    ?>

</html>