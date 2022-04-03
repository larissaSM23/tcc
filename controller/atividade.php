<?php

include('../model/database.php');

$nome = $_POST['titulo'];
$enunciado = $_POST['enunciado'];
$op_a = $_POST['op_a'];
$op_b = $_POST['op_b'];
$op_c = $_POST['op_c'];
$op_d = $_POST['op_d'];
$op_correta = $_POST['op_correta'];
$id_disciplina = $_POST['disciplina'];
$titulo_imagem = ($_FILES['imagem']['name']);
$extensao_imagem = ($_FILES['imagem']['type']);

$insert = "insert tb_atividade (nome,enunciado,op_a,op_b,op_c,op_d,op_correta,id_disciplina,titulo_imagem,extensao_imagem) values ('$nome','$enunciado','$op_a','$op_b','$op_c','$op_d','$op_correta','$id_disciplina','$titulo_imagem','$extensao_imagem');";

$query = mysqli_query($connection, $insert);

header("location: ../view/adicionaAtividade");


?>