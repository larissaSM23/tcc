<?php
    session_start();
    include('../model/database.php');

    $email = $_POST['email'];
    $senha     = $_POST['senha'];
    
    $admin_select       = "select id,nome,cpf from tb_admin where email = '$email' and senha = md5('$senha')";
    $aluno_select       = "select id,nome,cpf from tb_aluno where email = '$email' and senha = md5('$senha')";
    $professor_select   = "select id,nome,cpf from tb_professor where email = '$email' and senha = md5('$senha')";
    $responsavel_select = "select id,nome,cpf from tb_responsavel where email = '$email' and senha = md5('$senha')";

    $adm_query         = mysqli_query($connection, $admin_select);
    $aluno_query       = mysqli_query($connection, $aluno_select);
    $professor_query   = mysqli_query($connection, $professor_select);
    $responsavel_query = mysqli_query($connection, $responsavel_select);



    if(mysqli_num_rows($adm_query) > 0){

        while($linha = mysqli_fetch_assoc($adm_query)){
            $usuario = $linha['nome'];
            $id = $linha['id'];
            $cpf = $linha['cpf'];
        }

        $_SESSION['session'] = $usuario;
        $_SESSION['status'] = 'admin';
        $_SESSION['id'] = $id;
        $_SESSION['cpf'] = $cpf;
        header('Location: ../view/VisaoGeral');
        exit();
        
    } else if(mysqli_num_rows($aluno_query) > 0){

        while($linha = mysqli_fetch_assoc($aluno_query)){
            $usuario = $linha['nome'];
            $id = $linha['id'];
            $cpf = $linha['cpf'];
        }

        $_SESSION['session'] = $usuario;
        $_SESSION['status'] = 'aluno';
        $_SESSION['id'] = $id;
        $_SESSION['cpf'] = $cpf;
        header('Location: ../view/visaoGeral');
        exit();
        
    } else if(mysqli_num_rows($professor_query) > 0){

        while($linha = mysqli_fetch_assoc($professor_query)){
            $usuario = $linha['nome'];
            $cpf = $linha['cpf'];
            $id = $linha['id'];

        }

        $_SESSION['session'] = $usuario;
        $_SESSION['status'] = 'professor';
        $_SESSION['cpf'] = $cpf;
        $_SESSION['id'] = $id;
        header('Location: ../view/visaoGeral');
        exit();
        
    } else if(mysqli_num_rows($responsavel_query) > 0){

        while($linha = mysqli_fetch_assoc($responsavel_query)){
            $usuario = $linha['nome'];
            $id = $linha['id'];
            $cpf = $linha['cpf'];
        }

        $_SESSION['session'] = $usuario;
        $_SESSION['status'] = 'responsavel';
        $_SESSION['id'] = $id;
        $_SESSION['cpf'] = $cpf;
        header('Location: ../view/alunosVinculados');
        exit();
        
    } else{
        echo '<script>
        alert("Dados de login incorretos");
        window.location.href="../view/login?erro";
        </script>';
    }