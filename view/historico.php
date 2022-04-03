<?php
$title = "Histórico de Atividades";
include('./components/head.php');
?>

<body>
<?php
    include('./components/nav.php')
    ?>
<div class="container d-flex flex-column min-vh-100 justify-content-center">
    <div>
        <div class="border-pink mb-3 p-3">
            <i class="bi bi-file-earmark-text rounded-circle p-2 bg-pink text-primary"></i>
            <span class="mx-5">Exercicíos sobre os substantivos</span>
            <a class="link-dark link-underline-none dropdown-toggle float-end" data-toggle="collapse" href="#" role="button" data-target="#answer-1" id="exercicio-1" data-content="Clique aqui para ver sua resposta" rel="popover" data-placement="right" data-trigger="hover">Ver resposta</a>
            <div class="collapse" id="answer-1">
                <div class="card card-body mt-3">
                    <span></span>
                </div>
            </div>
        </div>

        <div class="border-pink mb-3 p-3">
            <i class="bi bi-file-earmark-text rounded-circle p-2 bg-pink text-primary"></i>
            <span class="mx-5">Complete o texto preenchendo as lacunas</span>
            <a class="link-dark link-underline-none dropdown-toggle float-end" data-toggle="collapse" href="#" role="button" data-target="#answer-2" id="exercicio-2" data-content="Clique aqui para ver sua resposta" rel="popover" data-placement="right" data-trigger="hover">Ver resposta</a>
            <div class="collapse" id="answer-2">
                <div class="card card-body mt-3">
                    <span></span>
                </div>
            </div>
        </div>

        <div class="border-pink mb-3 p-3">
            <i class="bi bi-file-earmark-text rounded-circle p-2 bg-pink text-primary"></i>
            <span class="mx-5">Troque as palavras sublinhadas por um adjetivo</span>
            <a class="link-dark link-underline-none dropdown-toggle float-end" data-toggle="collapse" href="#" role="button" data-target="#answer-3" id="exercicio-3" data-content="Clique aqui para ver sua resposta" rel="popover" data-placement="right" data-trigger="hover">Ver resposta</a>
            <div class="collapse" id="answer-3">
                <div class="card card-body mt-3">
                    <span></span>
                </div>
            </div>
        </div>

        <div class="border-pink p-3">
            <i class="bi bi-file-earmark-text rounded-circle p-2 bg-pink text-primary"></i>
            <span class="mx-5">Exercício sobre adjetivos</span>
            <a class="link-dark link-underline-none dropdown-toggle float-end" data-toggle="collapse" href="#" role="button" data-target="#answer-4" id="exercicio-4" data-content="Clique aqui para ver sua resposta" rel="popover" data-placement="right" data-trigger="hover">Ver resposta</a>
            <div class="collapse" id="answer-4">
                <div class="card card-body mt-3">
                    <span></span>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('./components/scripts.php');
?>

</body>