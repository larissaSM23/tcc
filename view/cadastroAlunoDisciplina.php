<?php
$title = "Cadastrar Aluno em Disciplina";
include('./components/head.php');
?>

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
                <span class="fw-bold">Cadastrar Aluno</span>
            </div>
            <?php include('.././controller/alunoDisciplina.php') ?>
            <form action="../controller/cadastrarAlunoDisciplina.php" method="post" class="form-floating">
                <div class="m-2">
                    <div class="row g-2 mb-5">
                        <div class="col-md mx-4">
                            <div class="form-floating">
                                <select class="form-select border-0 border-bottom border-secondary" name="aluno_matricula" id="aluno_matricula">
                                    <?php
                                    while($linha = mysqli_fetch_array($aluno_query)){?>
                                        <option value="<?php echo $linha['id_aluno']; ?>"><?php echo $linha['matricula']; ?> - <?php echo $linha['nome']; ?></option>
                                    <?php } ?>
                                    ?>
                                </select>
                                <label for="aluno_matricula">Matrícula</label>
                            </div>
                        </div>

                        <div class="col-md mx-4">
                            <div class="form-floating">
                                <select class="form-select border-0 border-bottom border-secondary" name="aluno_disciplina" id="aluno_disciplina">
                                <?php
                                while($linha2 = mysqli_fetch_assoc($disciplina_query)){?>
                                    <option value="<?php echo $linha2['id_disciplina'] ?>"><?php echo $linha2['nome']; ?></option>
                                <?php } ?>
                                </select>
                                <label for="aluno_disciplina">Disciplinas</label>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center my-4">
                    <button type="submit" class="btn btn-primary rounded px-5 my-3" style="background-color: #115D8C; border-color: #115D8C">Cadastrar</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <?php
    set_include_path('./components/script');
    ?> 
</body>