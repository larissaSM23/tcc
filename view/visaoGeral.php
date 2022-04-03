<?php
$title = "Visão Geral";
include('./components/head.php');
?>

<body>
    <?php
    include('./components/nav.php')
    ?>
    <div class="container d-flex flex-column min-vh-100 justify-content-center">
        <div class="row row-cols-1 row-cols-md-3 g-4">

            <div class="col">
                <div class="card h-100">
                    <img src="../public/img/materiaCIE.jpg" class="card-img-top" height=200px width=20%>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-5 fw-bold"><!--Nome Materia do banco-->Ciências</h5>
                        <a href="#" id="visao-geral-1" class="d-flex justify-content-center btn btn-primary fw-bold border-white" style="background-color: #115D8C" data-content="Clique aqui para acessar a disciplina" rel="popover" data-placement="left" data-trigger="hover">Acessar</a>
                    </div>
                </div>
            </div>

            <div class="col">
            </div>

            <div class="col">
                <div class="card h-100">
                    <img src="../public/img/materiaPT.jpg" class="card-img-top" height=200px width=20%>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-5 fw-bold">Português</h5>
                        <a href="#" id="visao-geral-2" class="d-flex justify-content-center btn btn-primary fw-bold border-white" style="background-color: #115D8C" data-content="Clique aqui para acessar a disciplina" rel="popover" data-placement="left" data-trigger="hover">Acessar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php
include('./components/scripts.php');
?>
<script src="../../public/js/balao.js"></script>

</body>