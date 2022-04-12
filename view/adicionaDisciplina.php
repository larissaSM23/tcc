<?php
$title = "Inserir Disciplina";
include('./components/head.php');
include('../model/database.php')
;?>

<body>
    <?php
    include('./components/nav.php');
    if ($_SESSION['status'] == 'aluno' || $_SESSION['status'] == 'professor') {
        header('Location: visaoGeral');
    } elseif ($_SESSION['status'] == 'responsavel') {
        header('Location: alunosVinculados');
    }
    ?>
    <div class="container d-flex flex-column min-vh-100 justify-content-center">
        <div>
            <div class="container d-flex flex-column min-vh-100 justify-content-center">
                <div class="text-white rounded text-center p-3 mb-3 mx-2 mt-0" style="background-color: #115D8C">
                    <span class="fw-bold">Inserir Disciplina</span>
                </div>

                <form action="../controller/disciplina" method="post" class="form-floating" enctype="multipart/form-data">

                    <div class="m-2">
                        <div class="row g-2 mb-5">
                            <div class="col-md mx-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 border-bottom border-secondary" name="nome_disciplina" id="nome_disciplina" required>
                                    <label for="option-1">Nome</label>
                                </div>
                            </div>

                            <div class="col-md mx-4">
                                <div class="form-floating">
                                    <input type="text" class="form-control border-0 border-bottom border-secondary" name="chave_acesso" id="chave_acesso">
                                    <label for="chave_acesso">Chave de acesso</label>
                                </div>
                            </div>
                        </div>
                        <div class="row g-2 mb-5">
                            <div class="col-md mx-4">
                                <div>
                                    <label for="option-3" class="my-2">Adicione uma imagem</label>
                                    <input type="file" accept="image/*" class="form-control border-secondary" name="imagem_disciplina" id="imagem_disciplina">
                                </div>
                            </div>
                            <div class="col-md mx-4">
                                <div>
                                    <label for="option-3" class="my-2">Selecione um Professor</label>
                                    <select name="professor" id="setor" class="form-control shadow-sm">
                                    <option value="null">Selecione</option>
                                    <?php


                                    $select = "SELECT id, nome from tb_professor;";
                                    $query  = mysqli_query($connection, $select);
                                    while ($row = mysqli_fetch_array($query)) {
                                    ?>
                                        <option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>
                                    <?php
                                    }
                                    ?>
                                </select>
                                </div>
                            </div>
                            <div class="col-md mx-4">
                                <div class="form-floating">
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="text-center my-4">
                        <button type="submit" class="btn btn-primary rounded px-5 my-3" style="background-color: #115D8C; border-color: #115D8C">Adicionar</button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <?php
    include('./components/scripts.php');
    ?>

</body>