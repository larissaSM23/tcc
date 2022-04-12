<?php
$title = "Resolver Atividade";
include('./components/head.php');
include('../model/database.php');
?>

<body>
    <?php
    include('./components/nav.php');

    if ($_SESSION['status'] == 'responsavel') {
        header('Location: alunosVinculados');
    } elseif($_SESSION['status'] == 'admin' || $_SESSION['status'] == 'professor') {
        header('Location: visaoGeral');
    }

    ?>
    <div class="container d-flex flex-column min-vh-100 justify-content-center">
        <?php
        if (isset($_GET['id'])) {
            $id_pagina = ($_GET['id']);
            $select_disciplina = "select a.nome as nome_atividade,b.id as id_disciplina, b.nome as nome_disciplina from tb_atividade a,tb_disciplina b where a.id_disciplina=b.id and a.id='$id_pagina';";
            $query_disciplina = mysqli_query($connection, $select_disciplina);
            while ($linha = mysqli_fetch_array($query_disciplina)) {
                $id_disciplina = $linha['id_disciplina'];
                $nome_disciplina = $linha['nome_disciplina'];
                $nome_atividade = $linha['nome_atividade'];
            }

        ?>
            <div class="bg-pink rounded p-3 mb-3 mx-2">
                <span class="fw-bold mx-4"><?php echo $nome_disciplina ?> - <?php echo $nome_atividade ?></span>
            </div>
        <?php  } ?>
        <?php
        if (isset($_GET['id'])) {
            $id_pagina = ($_GET['id']);
            $select = "select id,nome,enunciado,op_a,op_b,op_c,op_d,op_correta,titulo_imagem from tb_atividade ";
            $query  = mysqli_query($connection, $select);
        ?>




            <?php while ($row = mysqli_fetch_array($query)) {
                $id = $row['id'];
                $enunciado = $row['enunciado'];
                $op_a = $row['op_a'];
                $op_b = $row['op_b'];
                $op_c = $row['op_c'];
                $op_d = $row['op_d'];
                $foto = $row['titulo_imagem'];

                if ($id == $id_pagina) {
            ?>
                    <form action="../controller/resolucaoAtividade?id=<?php echo $id_disciplina; ?>" method="post">
                        <div class="rounded p-4 mb-3 mx-2" style="background-color: #e4e4e4">
                            <div class="row">
                                <div class="col-5 mx-4">
                                    <img src="../public/img/<?php echo $foto; ?>" style="width:90%; min-height:auto;">
                                </div>

                                <div class="col">
                                    <div class="mb-4">
                                        <span class="fw-bold h4"><?php echo $enunciado; ?></span>
                                    </div>

                                    <div id="atividade-<?php $id_pagina ?>" data-content="Clique em uma bolinha para marcar sua resposta" rel="popover" data-placement="right" data-trigger="hover">
                                        <div class="form-check py-2">
                                            <input type="radio" name="op_aluno" id="option-<?php $id ?>" class="form-check-input" value="1">
                                            <label for="option-<?php $id ?>" class="form-check-label" style="font-size:20px;"><?php echo $op_a; ?></label>
                                        </div>
                                        <div class="form-check py-2">
                                            <input type="radio" name="op_aluno" id="option-<?php $id ?>" class="form-check-input" value="2">
                                            <label for="option-<?php $id ?>" class="form-check-label" style="font-size:20px;"><?php echo $op_b; ?></label>
                                        </div>
                                        <div class="form-check py-2">
                                            <input type="radio" name="op_aluno" id="option-<?php $id ?>" class="form-check-input" value="3">
                                            <label for="option-<?php $id ?>" class="form-check-label" style="font-size:20px;"><?php echo $op_c; ?></label>
                                        </div>
                                        <div class="form-check py-2">
                                            <input type="radio" name="op_aluno" id="option-<?php $id ?>" class="form-check-input" value="4">
                                            <label for="option-<?php $id ?>" class="form-check-label" style="font-size:20px;"><?php echo $op_d; ?></label>
                                        </div>
                                    </div>
                                    <input type="text" name="id_aluno" value="<?php echo $_SESSION['id'] ?>" style="display: none">
                                    <input type="text" name="id_atividade" value="<?php echo $id_pagina ?>" style="display: none">
                                </div>
                            </div>
                        </div>

                        <div class="text-center my-4">
                            <button type="submit" class="btn btn-pink rounded px-5" id="botao-atividade" data-content="Clique aqui para enviar sua resposta" rel="popover" data-placement="left" data-trigger="hover">Enviar</button>
                        </div>
                    </form>
                <?php } else { ?>

        <?php }
            }
        } else {
            echo 'Nenhum Registro encontrado';
        }
        ?>
    </div>
    <?php
    include('./components/scripts.php');
    ?>

</body>