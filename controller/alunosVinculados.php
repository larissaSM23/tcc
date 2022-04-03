<?php
include('../model/database.php');

if($_SESSION['status'] == 'responsavel') {
    $id = $_SESSION['id'];
    $cpf = $_SESSION['cpf'];

    $responsavel_select = "select a.id as id, a.nome as nome from tb_aluno a, tb_responsavel b where b.cpf = '$cpf' and a.id_responsavel= '$id' ";

    $responsavel_query = mysqli_query($connection, $responsavel_select);

    while($linha = mysqli_fetch_assoc($responsavel_query)){
        $id_aluno = $linha['id'];
        $nome_aluno = $linha['nome'];
    }

}
?>