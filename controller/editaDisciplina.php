<?php
$title = "Editar Disciplina";
include('../view/components/head.php');
include("../model/database.php");
session_start();
$id = isset($_GET['id']) ? $_GET['id'] : null;
?>


<body>
    <?php
    include('../view/components/nav.php')
    ?>
    <div class="container d-flex flex-column min-vh-100 justify-content-center">
        <div>
            <div class="container d-flex flex-column min-vh-100 justify-content-center">
                <div class="text-white rounded text-center p-3 mb-3 mx-2 mt-0" style="background-color: #115D8C">
                    <span class="fw-bold">Editar Disciplina</span>
                </div>
                <?php
                $select = "select id,nome,chave_acesso from tb_disciplina where id='$id'";
                $query  = mysqli_query($connection, $select);

                while ($row = mysqli_fetch_array($query)) {
                    $nome = $row['nome'];
                    $id = $row['id'];
                    $chave_acesso = $row['chave_acesso'];
                ?>
                    <form action="editaDisciplina" method="post" class="form-floating" enctype="multipart/form-data">

                        <div class="m-2">
                            <div class="row g-2 mb-5">
                                <div class="col-md mx-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 border-bottom border-secondary" name="nome_disciplina" id="nome_disciplina" value="<?php echo $nome ?>" required>
                                        <label for="option-1">Nome</label>
                                    </div>
                                </div>

                                <div class="col-md mx-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 border-bottom border-secondary" name="chave_acesso" id="chave_acesso" value="<?php echo $chave_acesso ?>">
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
                                    <input type="text" name="id_usuario_disciplina" value="<?php echo $id; ?>" style="display: none;">
                                    <div class="form-floating">
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="text-center my-4">
                            <button type="submit" name="salvar" class="btn btn-primary rounded px-5 my-3" style="background-color: #115D8C; border-color: #115D8C">Adicionar</button>
                        </div>
                    </form>
                <?php } ?>
            </div>
        </div>
    </div>


</body>

<?php
if (isset($_POST['salvar'])) {

$nome = $_POST['nome_disciplina'];
$foto = ($_FILES['imagem_disciplina']);
$chave_acesso = $_POST['chave_acesso'];
$id_admin = $_SESSION['cpf'];
$id_usuario_disciplina = $_POST['id_usuario_disciplina'];
$acessou = null;

$verify_select = "select id from tb_admin where cpf = '$id_admin'";
$verify_query = mysqli_query($connection, $verify_select);

if (mysqli_num_rows($verify_query) > 0) {
    while ($verify_row = mysqli_fetch_array($verify_query)) {
        $id = $verify_row["id"];
    } // Se a foto estiver sido selecionada


    // Pega extensão da imagem
    preg_match("/\.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);
    // Gera um nome único para a imagem
    $nome_imagem = md5(uniqid(time())) . "." . $ext[1];
    // Caminho de onde ficará a imagem
    $caminho_imagem = "../public/img/" . $nome_imagem;
    // Faz o upload da imagem para seu respectivo caminho
    move_uploaded_file($foto["tmp_name"], $caminho_imagem);

    $update = "UPDATE tb_disciplina SET nome = '$nome', imagem = '$nome_imagem', chave_acesso = '$chave_acesso' WHERE id = '$id_usuario_disciplina';";
    $query = mysqli_query($connection, $update);

    header('location: ../view/gerenciaDisciplina');
} else {
    echo 'Professor não encontrado';
}
}
?>