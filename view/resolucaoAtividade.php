<?php
$title = "Resolver Atividade";
include('./components/head.php');
?>

<body>
    <?php
    include('./components/nav.php')
    ?>
<div class="container d-flex flex-column min-vh-100 justify-content-center">
    <div class="bg-pink rounded p-3 mb-3 mx-2">
        <span class="fw-bold mx-4">Português</span>
    </div>

    <form action="#" method="post">
        <div class="rounded p-4 mb-3 mx-2" style="background-color: #e4e4e4">
            <div class="row">
                <div class="col-5 mx-4">
                    <img src="../public/img/atividade1.PNG" style="width:90%; min-height:auto;">
                </div>
                    
                <div class="col">
                    <div class="mb-4">
                        <span class="fw-bold h4">Selecione a opção correta. Maça, menina, blusa casa, livro e gato respectivamente</span>
                    </div>
                    
                    <div id="atividade-1" data-content="Clique em uma bolinha para marcar sua resposta" rel="popover" data-placement="right" data-trigger="hover">
                        <div class="form-check py-2">
                            <input type="radio" name="option" id="option-1" class="form-check-input">
                            <label for="option-1" class="form-check-label" style="font-size:20px;">Feliz, feroz, engraçada, antiga, comprido e bonito</label>
                        </div>
                        <div class="form-check py-2">
                            <input type="radio" name="option" id="option-2" class="form-check-input">
                            <label for="option-2" class="form-check-label"style="font-size:20px;">Madura, feroz, nova, antiga, grosso e gelado</label>
                        </div>
                        <div class="form-check py-2">
                            <input type="radio" name="option" id="option-3" class="form-check-input">
                            <label for="option-3" class="form-check-label"style="font-size:20px;">Madura, feliz, nova, antiga, grosso e bonito</label>
                        </div>
                        <div class="form-check py-2">
                            <input type="radio" name="option" id="option-4" class="form-check-input">
                            <label for="option-4" class="form-check-label"style="font-size:20px;">Alto, gelada, nova, feliz, maduro e brilhante</label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="text-center my-4">
            <button type="submit" class="btn btn-pink rounded px-5" id="botao-atividade" data-content="Clique aqui para enviar sua resposta" rel="popover" data-placement="left" data-trigger="hover">Enviar</button>
        </div>
    </form>
</div>
<?php
include('./components/scripts.php');
?>

</body>