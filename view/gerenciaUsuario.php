<?php
$title = "Gerencia Usuários";
include('./components/head.php');
include('../model/database.php');
session_start();
?>

<body>
    <?php
    include('./components/nav.php');
    if ($_SESSION['status'] == 'aluno') {
        header('Location: visaoGeral');
    } elseif ($_SESSION['status'] == 'responsavel') {
        header('Location: alunosVinculados');
    }
    ?>

    <div class="container d-flex flex-column min-vh-100 justify-content-center">
        <div>
            <div class="container d-flex flex-column min-vh-100 justify-content-center">
                <div class="bg-pink rounded text-center p-3 mb-3 mx-2">
                    <span class="fw-bold">Usuários existentes</span>
                </div>

                <div class="m-2 rounded" style="background-color: #e4e4e4">
                    <div class="py-3 mx-5">
                        <span>Alunos</span>
                        <a class="link-dark link-underline-none dropdown-toggle float-end h3" data-toggle="collapse" href="#" role="button" data-target="#aluno"></a>

                        <div class="collapse" id="aluno">
                            <div class="card card-body mt-3" style="background-color: #e4e4e4">


                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                Matrícula
                                            </th>
                                            <th>
                                                Nome
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Ações
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php


                                        $select = "select id,matricula,nome,email from tb_aluno";
                                        $query  = mysqli_query($connection, $select);
                                        while ($row = mysqli_fetch_array($query)) {
                                            $id = $row["id"];
                                            echo "<tr>";
                                            echo "<th>" . $row['matricula'] . "</th>";
                                            echo "<th>" . $row['nome'] . "</th>";
                                            echo "<th>" . $row['email'] . "</th>";
                                            echo "<th><a class='mx-1' href='../controller/editaAluno.php?id=$id'><i class='fa-solid fa-pen-to-square'></a><a href='../controller/excluiAluno.php?id=$id'><i class='fa-solid fa-trash-can'></i></a></th>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="m-2 rounded" style="background-color: #e4e4e4">
                    <div class="py-3 mx-5">
                        <span>Professores</span>
                        <a class="link-dark link-underline-none dropdown-toggle float-end h3" data-toggle="collapse" href="#" role="button" data-target="#professor"></a>

                        <div class="collapse" id="professor">
                            <div class="card card-body mt-3" style="background-color: #e4e4e4">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                Matrícula
                                            </th>
                                            <th>
                                                Nome
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Ações
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php


                                        $select = "select id,matricula,nome,email from tb_professor";
                                        $query  = mysqli_query($connection, $select);
                                        while ($row = mysqli_fetch_array($query)) {
                                            $id = $row["id"];
                                            echo "<tr>";
                                            echo "<th>" . $row['matricula'] . "</th>";
                                            echo "<th>" . $row['nome'] . "</th>";
                                            echo "<th>" . $row['email'] . "</th>";
                                            echo "<th> <a class='mx-1' href='../controller/editaProfessor.php?id=$id'><i class='fa-solid fa-pen-to-square'></i></a><a href='../controller/excluiProfessor.php?id=$id'><i class='fa-solid fa-trash-can'></i></a></th>";
                                        }
                                        ?>
                                    </tbody>

                                </table>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="m-2 rounded" style="background-color: #e4e4e4">
                    <div class="py-3 mx-5">
                        <span>Responsáveis</span>
                        <a class="link-dark link-underline-none dropdown-toggle float-end h3" data-toggle="collapse" href="#" role="button" data-target="#responsavel"></a>

                        <div class="collapse" id="responsavel">
                            <div class="card card-body mt-3" style="background-color: #e4e4e4">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                Nome
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Ações
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php


                                        $select = "select id,nome,email from tb_responsavel";
                                        $query  = mysqli_query($connection, $select);
                                        while ($row = mysqli_fetch_array($query)) {
                                            $id = $row["id"];
                                            echo "<tr>";
                                            echo "<th>" . $row['nome'] . "</th>";
                                            echo "<th>" . $row['email'] . "</th>";
                                            echo "<th><a class='mx-1' href='../controller/editaResponsavel.php?id=$id'><i class='fa-solid fa-pen-to-square'></a><a href='../controller/excluiResponsavel.php?id=$id'><i class='fa-solid fa-trash-can'></i></a></th>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="m-2 rounded" style="background-color: #e4e4e4">
                    <div class="py-3 mx-5">
                        <span>Administradores</span>
                        <a class="link-dark link-underline-none dropdown-toggle float-end h3" data-toggle="collapse" href="#" role="button" data-target="#admin"></a>

                        <div class="collapse" id="admin">
                            <div class="card card-body mt-3" style="background-color: #e4e4e4">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>
                                                Nome
                                            </th>
                                            <th>
                                                Email
                                            </th>
                                            <th>
                                                Ações
                                            </th>
                                        </tr>
                                    </thead>
                                    <tbody>


                                        <?php


                                        $select = "select id,nome,email from tb_admin";
                                        $query  = mysqli_query($connection, $select);
                                        while ($row = mysqli_fetch_array($query)) {
                                            $id = $row["id"];
                                            echo "<tr>";
                                            echo "<th>" . $row['nome'] . "</th>";
                                            echo "<th>" . $row['email'] . "</th>";
                                            echo "<th><a class='mx-1' href='../controller/editaAdmin.php?id=$id'><i class='fa-solid fa-pen-to-square'></i></a><a href='../controller/excluiAdmin.php?id=$id'><i class='fa-solid fa-trash-can'></i></a></th>";
                                            echo "</tr>";
                                        }
                                        ?>
                                    </tbody>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center my-4">
                    <a href="adicionaUsuario" class="btn btn-pink rounded px-5" role="button" data-bs-toggle="button">Adicionar Usuário</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    set_include_path('./components/script');
    ?>

</body>