<?php
$title = "Gerenciar Atividades";
include('./components/head.php');
include('../model/database.php');
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
                    <span class="fw-bold">Atividades existentes</span>
                </div>

                <table class="table">
                    <thead>
                        <tr>
                            <th>
                                Nome
                            </th>
                            <th>
                                Enunciado
                            </th>
                            <th>
                                Opção correta
                            </th>
                            <th>
                                Ações
                            </th>
                        </tr>
                    </thead>
                    <tbody>


                        <?php


                        $select = "select id,nome,enunciado,op_correta from tb_atividade";
                        $query  = mysqli_query($connection, $select);
                        while ($row = mysqli_fetch_array($query)) {
                            $id = $row["id"];
                            echo "<tr>";
                            echo "<th>" . $row['nome'] . "</th>";
                            echo "<th>" . $row['enunciado'] . "</th>";
                            echo "<th>" . $row['op_correta'] . "</th>";
                            echo "<th><a class='mx-1' href='../controller/editaAtividade.php?id=$id'><i class='fa-solid fa-pen-to-square'></i></a><a href='../controller/excluiAtividade?id=$id'><i class='fa-solid fa-trash-can'></i></a></th>";
                            echo "</tr>";
                        }
                        ?>
                    </tbody>

                </table>
                <div class="text-center my-4">
                    <a href="./adicionaAtividade." class="btn btn-pink rounded px-5" role="button" data-bs-toggle="button">Adicionar Atividade</a>
                </div>
            </div>
        </div>
    </div>
    <?php
    set_include_path('./components/script');
    ?>
</body>