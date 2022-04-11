<?php
$title = "Gerencia Disciplinas";
include('./components/head.php');
include('../model/database.php');
?>

<body>
    <?php
    include('./components/nav.php');
    include('../model/database.php');

    if ($_SESSION['status'] == 'aluno' ||  $_SESSION['status'] == 'professor') {
        header('Location: visaoGeral');
    } elseif ($_SESSION['status'] == 'responsavel') {
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
                        <a class="link-dark link-underline-none dropdown-toggle float-end h3" data-toggle="collapse" href="#" role="button" data-target="#disciplina"></a>

                        <div class="collapse" id="disciplina">
                            <div class="card card-body mt-3" style="background-color: #e4e4e4">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                Nome
                                            </th>
                                            <th>
                                                Ações
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php


                                        $select = "select id,nome from tb_disciplina";
                                        $query  = mysqli_query($connection, $select);
                                        while ($row = mysqli_fetch_array($query)) {
                                            $id = $row["id"];
                                            echo "<tr>";
                                            echo "<th>" . $row['nome'] . "</th>";
                                            echo "<th> <a class='mx-1' href='../controller/editaDisciplina.php?id=$id'><i class='fa-solid fa-pen-to-square'></i></a><a href='../controller/excluiDisciplina.php?id=$id'><i class='fa-solid fa-trash-can'></i></a></th>";
                                        }
                                        ?>
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
    include('./components/scripts.php');
    ?>
</body>