<?php
include('../model/database.php');

$aluno_select = "select id,matricula from tb_aluno";
$disciplina_select = "select id,nome from tb_disciplina";

$aluno_query = mysqli_query($connection, $aluno_select);
$disciplina_query = mysqli_query($connection, $disciplina_select);

?>