<?php
    include('../model/database.php');

    $matricula_aluno = $_POST['aluno_matricula'];
    $disciplina = $_POST['aluno_disciplina'];

    $aluno_select = "select id as id_aluno, matricula from tb_aluno where matricula = '$matricula_aluno'";
    $disciplina_select = "select id as id_disciplina, nome from tb_disciplina where nome = '$disciplina'";

    $insert = "insert tb_disciplina_aluno (id_aluno,id_disciplina,acessou) values ('$matricula_aluno','$disciplina',0);";

    $query = mysqli_query($connection, $insert);

    header("location: ../view/visaoGeral");
?>