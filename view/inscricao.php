<?php
$title = "Inscrição na Disciplina";
include('./components/head.php');
?>

<body>
<?php
    include('./components/nav.php')
    ?>
<div class="container d-flex flex-column min-vh-100 justify-content-center">
    <div class="bg-pink rounded text-center p-3 mb-3 mx-5">
        <span class="fw-bold">Português</span>
    </div>

    <form action="#" method="post">
        <div class="text-center rounded mb-3 mx-5" style="background-color: #e4e4e4">
            <div class="py-3">
                <span>Chave de acesso</span>
            </div>
                <div class="input-group mb-4 mx-auto w-50">
                    <input type="password" class="form-control rounded mx-5 my-4 bg-transparent border-dark" name="senha" placeholder="*******" id="senha-disciplina" data-content="Aqui você deve digitar a chave da disciplina" rel="popover" data-placement="left" data-trigger="hover">
                </div>
        </div>

        <div class="text-center my-4">
            <button type="submit" class="btn btn-pink rounded px-5" id="botao-disciplina" data-content="Clique aqui para se inscrever na disciplina" rel="popover" data-placement="left" data-trigger="hover">Logar</button>
        </div>
    </form>
</div>

<?php
include('./components/scripts.php');
?>


</body>