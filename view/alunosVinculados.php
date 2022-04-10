<?php
$title = "Alunos Vinculados";
include('./components/head.php');
session_start();
?>

<body>
<?php
    include('./components/nav.php');
    ?> 
<title>Estudantes Vinculados</title>

<div class="container d-flex flex-column min-vh-100 justify-content-center">
    <div>
        <div class="container d-flex flex-column min-vh-100 justify-content-center">
            <div class="bg-pink rounded text-center p-3 mb-3 mx-2">
                <span class="fw-bold">Estudantes vinculados</span>
            </div>

            <div class="m-2 rounded" style="background-color: #e4e4e4">
                <div class="m-2 rounded" style="background-color: #e4e4e4">
                <div class="py-3 mx-5">
                    <span>Alunos</span>
                    <a class="link-dark link-underline-none dropdown-toggle float-end h3" data-toggle="collapse" href="#" role="button" data-target="#drop-alunos"></a>
                    
                    <div class="collapse" id="drop-alunos">
                        <?php include('./components/alunosVinculados.php'); ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include('./components/scripts');
?>
</body>