<?php
$title = "Histórico de Atividades";
include('./components/head.php');
include('../model/database.php');
?>

<body>
    <?php
    include('./components/nav.php');

    if ($_SESSION['status'] == 'responsavel') {
        header('Location: alunosVinculados');
    }
    ?>
    <div class="container d-flex flex-column min-vh-100 justify-content-center">
        <div>


            <?php
            $id_sessao = $_SESSION['cpf'];
            if ($id_sessao) {
                $resposta_select = "select b.id as id_aluno_atividade, a.nome as nome,b.op_aluno as op_aluno,c.op_correta as op_correta, c.nome as titulo from tb_aluno a, tb_aluno_atividade b, tb_atividade c where a.id=b.id_aluno and b.id_atividade=c.id and a.cpf='$id_sessao';";
                $query  = mysqli_query($connection, $resposta_select);

                if (mysqli_num_rows($query) > 0) {

                    while ($linha = mysqli_fetch_array($query)) {
                        $op_aluno = $linha['op_aluno'];
                        $op_correta = $linha['op_correta'];
                        $titulo = $linha['titulo'];
                        $nome_aluno = $linha['nome'];
                        $id_aluno_atividade = $linha['id_aluno_atividade'];
            ?>

                        <div class="border-pink mb-3 p-3">
                            <i class="fa-solid fa-file-lines" style="font-size: 30px; color: #d99b96"></i>
                            <span class="mx-5"><?php echo $titulo; ?></span>
                            <a class="link-dark link-underline-none dropdown-toggle float-end" data-toggle="collapse" href="#" role="button" data-target="#answer-<?php echo $id_aluno_atividade; ?>" id="exercicio-3" data-content="Clique aqui para ver sua resposta" rel="popover" data-placement="right" data-trigger="hover">Ver resposta</a>
                            <div class="collapse" id="answer-<?php echo $id_aluno_atividade; ?>">
                                <div class="card card-body mt-3">
                                    <span><?php echo "Opção correta: " . $op_correta; ?></span>
                                    <span><?php echo "Opção escolhida: " . $op_aluno . "<br>" . "Aluno:" . $nome_aluno . ""; ?></span>
                                </div>
                            </div>
                        </div>


            <?php }
                } else {
                    echo "Opa, parece que não temos nada aqui";
                }
            } ?>

        </div>
    </div>

    <?php
    include('./components/scripts.php');
    ?>

</body>