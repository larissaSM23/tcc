<?php
session_start();
include('../model/database.php');

$nome = $_POST['nome_disciplina'];
$imagem = ($_FILES['imagem_disciplina']['name']);
$chave_acesso = $_POST['chave_acesso'];
$id_professor = $_SESSION['cpf'];
$acessou = null;

$verify_select = "select id from tb_professor where cpf = '$id_professor'";
$verify_query = mysqli_query($connection, $verify_select);

if(mysqli_num_rows($verify_query) > 0){
    while($verify_row = mysqli_fetch_array($verify_query)){
        $id = $verify_row["id"]; 
        echo $id;
    }

$insert = "insert tb_disciplina (nome,imagem,chave_acesso,id_professor,acessou) values ('$nome','$imagem','$chave_acesso','$id','$acessou');";

$query = mysqli_query($connection, $insert);

header("location: ../view/adicionaDisciplina");

}else{
    echo 'Professor não encontrado';
}
?>
