<?php
    include('../model/database.php');

    $aluno_select = "select id as id_aluno,matricula,nome from tb_aluno";
    $disciplina_select = "select id as id_disciplina,nome from tb_disciplina";

    $aluno_query = mysqli_query($connection, $aluno_select);
    $disciplina_query = mysqli_query($connection, $disciplina_select);
?>