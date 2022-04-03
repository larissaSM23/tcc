<?php

include('../model/database.php');

$op_aluno = $_POST['op_aluno'];
$id_aluno = $_POST['id_aluno'];
$id_atividade = $_POST['id_atividade'];

$insert = "insert tb_aluno_atividade (op_aluno,id_aluno,id_atividade) values ('$op_aluno','$id_aluno','$id_atividade');";

$query = mysqli_query($connection, $insert);

header("location: ../view/menuDisciplina");
?>