<?php
include('../model/database.php');

$nome = $_POST['nome_disciplina'];
$foto = ($_FILES['imagem_disciplina']);
$chave_acesso = $_POST['chave_acesso'];
$id_professor = $_POST['professor'];
$acessou = null;


        
 // Se a foto estiver sido selecionada

        
            // Pega extensão da imagem
            preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
            // Gera um nome único para a imagem
            $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
            // Caminho de onde ficará a imagem
            $caminho_imagem = "../public/img/" . $nome_imagem;
            // Faz o upload da imagem para seu respectivo caminho
            move_uploaded_file($foto["tmp_name"], $caminho_imagem);
        
$insert = "insert tb_disciplina (nome,imagem,chave_acesso,id_professor) values ('$nome','$nome_imagem','$chave_acesso','$id_professor');";

$query = mysqli_query($connection, $insert);

header("location: ../view/visaoGeral");
?>