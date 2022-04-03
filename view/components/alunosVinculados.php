<?php
include('.././controller/alunosVinculados.php');
?>

<div class="card card-body mt-3" style="background-color: #e4e4e4">
    <span>
        <?php echo $nome_aluno; ?>
        <a href="./notas?id=<?php echo $id; ?>" class="link-dark link-underline-none float-end">Visualizar notas</a>
        <?php 
        ?>
    </span>
</div>