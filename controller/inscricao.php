<?php


if($_POST['nome']){
$chave = $_POST["chave"];
$chave_digitada = $_POST["chave_digitada"];

if($chave == $chave_digitada){
    header('Location: ../view/menuDisciplina');
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