<?php include("../model/database.php");

$id = isset($_GET['id']) ? $_GET['id'] : null;

?>

<?php
$title = "Inserir Atividade";
include('../view/components/head.php');
?>

<body>
    <?php
    include('../view/components/nav.php')
    ?>
    <div class="container d-flex flex-column min-vh-100 justify-content-center">
        <div>
            <div class="container d-flex flex-column min-vh-100 justify-content-center">
                <div class="text-white rounded text-center p-3 mb-3 mx-2 mt-0" style="background-color: #115D8C; padding-top:15px;">
                    <span class="fw-bold">Inserir Atividade</span>
                </div>
                <?php
                $select = "select nome,enunciado,op_a,op_b,op_c,op_d,op_correta from tb_atividade where id ='$id'";
                $query  = mysqli_query($connection, $select);
                while ($row = mysqli_fetch_array($query)) {
                    $nome = $row['nome'];
                    $enunciado = $row['enunciado'];
                    $op_a = $row['op_a'];
                    $op_b = $row['op_b'];
                    $op_c = $row['op_c'];
                    $op_d = $row['op_d'];
                    $op_correta = $row['op_correta'];
                    if ($op_correta == 1) {
                        $op_correta = "Opção A";
                    } else if ($op_correta == 2) {
                        $op_correta = "Opção B";
                    } else if ($op_correta == 3) {
                        $op_correta = "Opção C";
                    } else if ($op_correta == 4) {
                        $op_correta = "Opção D";
                    }
                ?>
                    <form action="editaAtividade" method="post" class="form-floating" enctype="multipart/form-data">
                        <div class="m-2">
                            <div class="row g-2 mb-5">
                                <div class="col-md mx-4 mt-5">
                                    <div class="row g-2 mb-5">
                                        <div class="col-md mx-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0 border-bottom border-secondary w-75" name="titulo" id="titulo" value="<?php echo $nome; ?>">
                                                <label for="option-1">Título</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2 my-5">
                                        <div class="col-md mx-4 mt-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0 border-bottom border-secondary" name="enunciado" id="enunciado" value="<?php echo $enunciado; ?>">
                                                <label for="option-4">Enunciado</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-2 my-5">
                                        <div class="col-md mx-4 mt-5">
                                            <div>
                                                <label for="option-4" class="my-2">Adicione uma imagem</label>
                                                <input type="file" accept="image/*" class="form-control border-secondary w-75" name="imagem" id="imagem">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="text" name="id" style="display:none;" value="<?php echo $id; ?>">
                                <div class="col-md mx-4 mt-5">
                                    <div class="row g-2 mb-5">
                                        <div class="col-md mx-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0 border-bottom border-secondary" name="op_a" id="op_a" value="<?php echo $op_a; ?>">
                                                <label for="option-11">Opção A</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-2 mb-5">
                                        <div class="col-md mx-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0 border-bottom border-secondary" name="op_b" id="op_b" value="<?php echo $op_b; ?>">
                                                <label for="option-12">Opção B</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-2 mb-5">
                                        <div class="col-md mx-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0 border-bottom border-secondary" name="op_c" id="op_c" value="<?php echo $op_c ?>">
                                                <label for="option-13">Opção C</label>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-2 mb-5">
                                        <div class="col-md mx-4">
                                            <div class="form-floating">
                                                <input type="text" class="form-control border-0 border-bottom border-secondary" name="op_d" id="op_d" value="<?php echo $op_d; ?>">
                                                <label for="option-14">Opção D</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-2 mx-4">
                                    <div class="row g-2 mb-5">
                                        <div class="col-md mx-4">
                                            <div class="form-floating">
                                                <span>Correta</span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-2 mb-5">
                                        <div class="col-md mx-4">
                                            <div class="form-floating">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="op_correta" value="1">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-2 my-5">
                                        <div class="col-md mx-4 my-4">
                                            <div class="form-floating">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="op_correta" value="2">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-2 my-5">
                                        <div class="col-md mx-4 mt-3">
                                            <div class="form-floating">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="op_correta" value="3">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row g-2 my-5">
                                        <div class="col-md mx-4 mt-4">
                                            <div class="form-floating">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="op_correta" value="4">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="text-center my-4">
                            <button type="submit" class="btn btn-primary rounded px-5 my-3" name="salvar" style="background-color: #115D8C; border-color: #115D8C">Salvar</button>
                        </div>
                    </form>
            </div>
        </div>
    </div>

</body>


<?php } ?>
<?php

if (isset($_POST['salvar'])) {

    $nome1 = $_POST['titulo'];
    $enunciado1 = $_POST['enunciado'];
    $op_correta1 = $_POST['op_correta'];

    if ($op_correta1 == "Opção A") {
        $op_correta1 = 1;
    } else if ($op_correta1 == "Opção B") {
        $op_correta1 = 2;
    } else if ($op_correta1 == "Opção C") {
        $op_correta1 = 3;
    } else if ($op_correta1 == "Opção D") {
        $op_correta1 = 4;
    }

    $op_a1 = $_POST['op_a'];
    $op_b1 = $_POST['op_b'];
    $op_c1 = $_POST['op_c'];
    $op_d1 = $_POST['op_d'];

    // echo $op_a1;
    $id = $_POST['id'];
    // echo $id;
    $update = "update tb_atividade set nome = '$nome1', enunciado = '$enunciado1', op_correta = '$op_correta1'
        ,op_a = '$op_a1', op_b = '$op_b1', op_c = '$op_c1', op_d = '$op_d1' where id = '$id' ;";

    // echo $update;

    $query = mysqli_query($connection, $update);

    if ($query) {
        header('location: ../view/gerenciaAtividade');
    }
}

?>