<?php
$title = "Menu da Disciplina";
include('./components/head.php');
include('../model/database.php');
?>

<body>
<?php
    include('./components/nav.php');

    if ($_SESSION['status'] == 'responsavel') {
        header('Location: alunosVinculados');
    }

    ?>
<div class="container d-flex flex-column min-vh-100 justify-content-center">
    <?php 
    if(isset($_GET['id'])){
    $id_pagina = ($_GET['id']);
    $select = "select id,nome from tb_atividade where id_disciplina='$id_pagina'";
        $query = mysqli_query($connection, $select);
        
        while($linha = mysqli_fetch_array($query)){
            $id_atividade = $linha['id'];
            $titulo_atividade = $linha['nome'];
            ?>
        <div>
            <ul class="list-group list-group-flush" style="font-size: 20px;">
                <li class="list-group-item border-0 mb-3">
                    <a href="resolucaoAtividade?id=<?php echo $id_atividade; ?>" class="link-dark link-underline-none">
                        <i class="fa-solid fa-file-lines" style="font-size: 35px; color: #d99b96"></i>
                        <p class="mx-5 d-inline-block" id="menu-disciplina-<?php echo $id_atividade; ?>" data-content="Clique aqui para acessar a atividade" rel="popover" data-placement="right" data-trigger="hover"><?php echo $titulo_atividade; ?></p>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $('#menu-disciplina-1').popover();
        $('#menu-disciplina-2').popover();
        $('#menu-disciplina-3').popover();
        $('#menu-disciplina-4').popover();
    </script>
    <?php
    }
if(isset($_GET['id'])){
    $id_pagina = ($_GET['id']);
    $select = "select id,nome from tb_atividade where id_disciplina='$id_pagina'";
        $query = mysqli_query($connection, $select);
        
        while($linha = mysqli_fetch_array($query)){
            $id_atividade = $linha['id'];
           ?> 
    <script>$('#menu-disciplina-<?php  echo $id_atividade; ?>').popover();</script>
<?php
        }
    }
    ?>
</body>