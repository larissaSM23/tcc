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
$foto = ($_FILES['imagem']);

// Se a foto estiver sido selecionada


// Pega extensão da imagem
preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
// Gera um nome único para a imagem
$nome_imagem = md5(uniqid(time())) . "." . $ext[1];
// Caminho de onde ficará a imagem
$caminho_imagem = "../public/img/" . $nome_imagem;
// Faz o upload da imagem para seu respectivo caminho
move_uploaded_file($foto["tmp_name"], $caminho_imagem);

$insert = "insert tb_atividade (nome,enunciado,op_a,op_b,op_c,op_d,op_correta,id_disciplina,titulo_imagem) values ('$nome','$enunciado','$op_a','$op_b','$op_c','$op_d','$op_correta','$id_disciplina','$nome_imagem');";

$query = mysqli_query($connection, $insert);

header("location: ../view/visaoGeral");
