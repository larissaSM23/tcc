<?php
$title = "Histórico de Atividades";
include('./components/head.php');
include('../model/database.php');
?>

<body>
<?php
    include('./components/nav.php')
    ?>
<div class="container d-flex flex-column min-vh-100 justify-content-center">
    <div>
       

        <?php
            $select = "select id,nome,op_correta from tb_atividade";
            $query  = mysqli_query($connection, $select);
        ?>


        
            
         
    
    <?php while($row = mysqli_fetch_array($query)) {  $nome = $row['nome'];$id = $row['id'];$op_correta = $row['op_correta'];?>
        <?php
            $select_op_aluno = "select c.nome, b.op_aluno as op from tb_atividade a, tb_aluno_atividade b, tb_aluno c where a.id = b.id_atividade and c.id = b.id_aluno and a.id = '$id';";
            $query_op_aluno = mysqli_query($connection, $select_op_aluno);
            while($row_op_aluno = mysqli_fetch_array($query_op_aluno)) {
                $op_aluno = $row_op_aluno['op'];
                $nome_aluno = $row_op_aluno['nome'];
            }
        ?>
        <div class="border-pink mb-3 p-3">
            <i class="bi bi-file-earmark-text rounded-circle p-2 bg-pink text-primary"></i>
            <span class="mx-5"><?php echo $nome;?></span>
            <a class="link-dark link-underline-none dropdown-toggle float-end" data-toggle="collapse" href="#" role="button" data-target="#answer-<?php echo $id;?>" id="exercicio-3" data-content="Clique aqui para ver sua resposta" rel="popover" data-placement="right" data-trigger="hover">Ver resposta</a>
            <div class="collapse" id="answer-<?php echo $id;?>">
                <div class="card card-body mt-3">
                    <span><?php echo "Opção correta: ". $op_correta;?></span>
                    <span><?php echo "Opção escolhida: ". $op_aluno."<br>"."Aluno:".$nome_aluno."";?></span>
                </div>
            </div>
        </div>
    <?php } ?>
        
    </div>
</div>

<?php
include('./components/scripts.php');
?>

</body>