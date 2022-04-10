<?php
$title = "Gerencia Disciplinas";
include('./components/head.php');
include('../model/database.php');
session_start();
?>

<body>
    <?php
    include('./components/nav.php');
    include('../model/database.php');

    if($_SESSION['status'] == 'aluno' ||  $_SESSION['status'] == 'professor'){
        header('Location: visaoGeral');
    } elseif($_SESSION['status'] == 'responsavel'){
        header('Location: alunosVinculados');
    }
    ?>
    <div class="container d-flex flex-column min-vh-100 justify-content-center">
        <div>
            <div class="container d-flex flex-column min-vh-100 justify-content-center">
                <div class="bg-pink rounded text-center p-3 mb-3 mx-2">
                    <span class="fw-bold">Disciplinas existentes</span>
                </div>

                <div class="m-2 rounded" style="background-color: #e4e4e4">
                    <div class="py-3 mx-5">
                        <span>Disciplinas</span>


                        <?php 
                        
                        $select = "select id,nome from tb_disciplina";
                        $query = mysqli_query($connection,$select);
?>



                        <a class="link-dark link-underline-none dropdown-toggle float-end h3" data-toggle="collapse" href="#" role="button" data-target="#discipline"></a>

                        <div class="collapse" id="discipline">
                            <div class="card card-body mt-3" style="background-color: #e4e4e4">
                                <table class="table">
                                    <tbody class="text-center">
                                    <?php while($linha = mysqli_fetch_array($query)){
                            $id_disciplina = $linha['id'];
                            $nome_disciplina = $linha['nome'];

                        ?>
                                        <tr class="border-bottom border-dark">
                                            <td>
                                                <span><?php echo $nome_disciplina; ?></span>
                                            </td>
                                            <td>
                                                <a href="../controller/editaDisciplina?id=<?php echo $id_disciplina; ?>" class="link-dark link-underline-none float-end">Editar</a>
                                            </td>
                                            <td>
                                                <a href="../controller/excluiDisciplina?id=<?php echo $id_disciplina; ?>" class="link-dark link-underline-none">Excluir</a>
                                            </td>
                                        </tr>
                        <?php } ?>
                                       
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="text-center my-4">
                    <a href="adicionaDisciplina" class="btn btn-pink rounded px-5" role="button" data-bs-toggle="button">Adicionar Disciplina</a>
                </div>
            </div>
        </div>
    </div>

    <?php
    set_include_path('./components/script');
    ?>
</body>