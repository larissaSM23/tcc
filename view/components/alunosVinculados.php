<?php
include('.././controller/alunosVinculados.php');
?>

<div class="card card-body mt-3" style="background-color: #e4e4e4">
        <?php
        while($linha = mysqli_fetch_assoc($responsavel_query)){
            $id_aluno = $linha['id'];
            $nome_aluno = $linha['nome'];
        
        ?>
    <span>
        <?php echo $nome_aluno; ?>
        <a href="./notas?id=<?php echo $id_aluno; ?>" class="link-dark link-underline-none float-end">Visualizar notas</a>
    </span>
        <?php 
        }
        ?>
</div>