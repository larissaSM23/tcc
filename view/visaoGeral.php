<?php
session_start();
$title = "Visão Geral";
include('./components/head.php');
?>

<body>
<?php
    include('./components/nav.php');
    include('../model/database.php');
?>
    <div class="container d-flex flex-column min-vh-100 justify-content-center ">
    <div class="row row-cols-1 row-cols-md-3 g-4 py-4">

<?php
    $id_pagina= $_SESSION['id'];

    if($_SESSION['status'] == 'admin'){
    $disciplina_select = "select * from tb_disciplina";
    $query = mysqli_query($connection, $disciplina_select);
    while($linha = mysqli_fetch_array($query)){
        $nome_disciplina = $linha['nome'];
        $imagem_disciplina = $linha['imagem'];
        $id_disciplina = $linha['id'];
    
    ?>

            <div class="col">
                <div class="card h-100">
                    <img src="../public/img/<?php echo $imagem_disciplina; ?>" class="card-img-top" height=200px width=20%>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-5 fw-bold"><?php echo $nome_disciplina; ?></h5>
                        <a href="menuDisciplina?id=<?php echo $id_disciplina ?>" id="visao-geral-1" class="d-flex justify-content-center btn btn-primary fw-bold border-white" style="background-color: #115D8C" data-content="Clique aqui para acessar a disciplina" rel="popover" data-placement="left" data-trigger="hover">Acessar</a>
                    </div>
                </div>
            </div>
<?php
        } 
    }elseif($_SESSION['status'] == 'aluno'){
    $disciplina_select = "select c.nome as nome_disciplina,c.imagem as imagem_disciplina, c.id as id_disciplina from tb_disciplina_aluno a, tb_aluno b, tb_disciplina c where a.id_aluno=b.id and a.id_disciplina=c.id and a.id_aluno='$id_pagina';";
    $query = mysqli_query($connection, $disciplina_select);
    while($linha = mysqli_fetch_array($query)){
        $nome_disciplina = $linha['nome_disciplina'];
        $imagem_disciplina = $linha['imagem_disciplina'];
        $id_disciplina = $linha['id_disciplina'];
    
    ?>

            <div class="col">
                <div class="card h-100">
                    <img src="../public/img/<?php echo $imagem_disciplina; ?>" class="card-img-top" height=200px width=20%>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-5 fw-bold"><?php echo $nome_disciplina; ?></h5>
                        <a href="menuDisciplina?id=<?php echo $id_disciplina ?>" id="visao-geral-1" class="d-flex justify-content-center btn btn-primary fw-bold border-white" style="background-color: #115D8C" data-content="Clique aqui para acessar a disciplina" rel="popover" data-placement="left" data-trigger="hover">Acessar</a>
                    </div>
                </div>
            </div>


<?php
    }}elseif($_SESSION['status'] == 'professor'){
        $disciplina_select = "select * from tb_disciplina where id_professor='$id_pagina'";
        $query = mysqli_query($connection, $disciplina_select);
        while($linha = mysqli_fetch_array($query)){
            $nome_disciplina = $linha['nome'];
            $imagem_disciplina = $linha['imagem'];
            $id_disciplina = $linha['id'];
?>

<div class="col">
                <div class="card h-100">
                    <img src="../public/img/<?php echo $imagem_disciplina; ?>" class="card-img-top" height=200px width=20%>
                    <div class="card-body">
                        <h5 class="card-title text-center mb-5 fw-bold"><?php echo $nome_disciplina; ?></h5>
                        <a href="menuDisciplina?id=<?php echo $id_disciplina ?>" id="visao-geral-1" class="d-flex justify-content-center btn btn-primary fw-bold border-white" style="background-color: #115D8C" data-content="Clique aqui para acessar a disciplina" rel="popover" data-placement="left" data-trigger="hover">Acessar</a>
                    </div>
                </div>
            </div>

<?php
}}else{
        echo "<span>teste</span>";
    }
include('./components/scripts.php');
?>
<script src="../../public/js/balao.js"></script>

</body>