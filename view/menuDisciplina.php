<?php
$title = "Menu da Disciplina";
include('./components/head.php');
?>

<body>
<?php
    include('./components/nav.php')
    ?>
<div class="container d-flex flex-column min-vh-100 justify-content-center">
        <div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item border-0 mb-3">
                    <a href="#" class="link-dark link-underline-none">
                        <i class="bi bi-skip-end-fill rounded-circle p-2 bg-pink text-primary"></i>
                        <p class="mx-5 d-inline-block" id="menu-disciplina-1" data-content="Clique aqui para acessar o video" rel="popover" data-placement="right" data-trigger="hover">Vídeo sobre os adjetivos</p>
                    </a>
                </li>
                <li class="list-group-item border-0 mb-3">
                    <a href="#" class="link-dark link-underline-none">
                        <i class="bi bi-file-earmark-text rounded-circle p-2 bg-pink text-primary"></i>
                        <p class="mx-5 d-inline-block" id="menu-disciplina-2" data-content="Clique aqui para acessar a atividade" rel="popover" data-placement="right" data-trigger="hover">Complete o texto preenchendo as lacunas</p>
                    </a>

                </li>
                <li class="list-group-item border-0 mb-3">
                    <a href="#" class="link-dark link-underline-none">
                        <i class="bi bi-skip-end-fill rounded-circle p-2 bg-pink text-primary"></i>
                        <p class="mx-5 d-inline-block" id="menu-disciplina-3" data-content="Clique aqui para acessar o video" rel="popover" data-placement="right" data-trigger="hover">Vídeo sobre substantivos</p>
                    </a>
                </li>
                <li class="list-group-item border-0 mb-3">
                    <a href="#" class="link-dark link-underline-none">
                        <i class="bi bi-file-earmark-text rounded-circle p-2 bg-pink text-primary"></i>
                        <p class="mx-5 d-inline-block" id="menu-disciplina-4" data-content="Clique aqui para acessar a atividade" rel="popover" data-placement="right" data-trigger="hover">Exercícios sobre adjetivos</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>  

    <?php
    include('./components/scripts.php');
    ?>
</body>