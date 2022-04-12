<?php
session_start();
include('../model/database.php');


if($_POST['nome']){
$sessao = $_SESSION['id'];
$id_disciplina = $_GET['id'];
$chave = $_POST["chave"];
$chave_digitada = $_POST["chave_digitada"];

if($chave == $chave_digitada){
    $acessou="UPDATE tb_disciplina_aluno SET acessou=1 WHERE id_aluno='$sessao';";
    $query=mysqli_query($connection,$acessou);
    header("Location: ../view/menuDisciplina?id=$id_disciplina");
}else{
    echo '<script>
    alert("Senha errada, tente novamente");
    window.location.href="../view/inscricao?erro";
    </script>';

}
}else{
    echo '<script>
    alert("Erro");
    window.location.href="../view/inscricao?erro";
    </script>';
}

?>