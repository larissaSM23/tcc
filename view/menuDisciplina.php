<?php
$title = "Menu da Disciplina";
include('./components/head.php');
include('../model/database.php');
?>

<body>
<?php
    include('./components/nav.php')
    ?>
<div class="container d-flex flex-column min-vh-100 justify-content-center">
        <?php $select = "select id,nome from tb_atividade";
        $query = mysqli_query($connection, $select);
        
        while($linha = mysqli_fetch_array($query)){
            $id_atividade = $linha['id'];
            $titulo_atividade = $linha['nome'];
            ?>
        <div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item border-0 mb-3">
                    <a href="resolucaoAtividade?id=<?php echo $id_atividade; ?>" class="link-dark link-underline-none">
                        <i class="bi bi-file-earmark-text rounded-circle p-2 bg-pink text-primary"></i>
                        <p class="mx-5 d-inline-block" id="menu-disciplina-<?php echo $id_atividade; ?>" data-content="Clique aqui para acessar o video" rel="popover" data-placement="right" data-trigger="hover"><?php echo $titulo_atividade; ?></p>
                    </a>
                </li>
                <?php } ?>
            </ul>
        </div>
    </div>  

    <?php
    include('./components/scripts.php');
    ?>
</body>