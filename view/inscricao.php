<?php
$title = "Inscrição na Disciplina";
include('./components/head.php');
include('../model/database.php');
?>

<body>
    <?php
    include('./components/nav.php');
    if(isset($_GET['id'])){
    $id_pagina = $_GET['id'];
    $id_acesso = $_SESSION['id'];

    $acesso_select = "select id_aluno,acessou from tb_disciplina_aluno where id_aluno='$id_acesso';";
    $acesso_query = mysqli_query($connection, $acesso_select);

    while ($linha = mysqli_fetch_array($acesso_query)) {
        $acesso = $linha['acessou'];
    }

    if ($acesso == 0) {
        if ($_SESSION['status'] == 'responsavel') {
            header('Location: alunosVinculados');
        }
    ?>
        <?php
        if(isset($_GET['id'])){
        $id_materia = $_GET['id'];
        $select = "select nome,chave_acesso from tb_disciplina where id='$id_materia'";
        $query  = mysqli_query($connection, $select);

        ?>
        <?php
        while ($row = mysqli_fetch_array($query)) {
            $nome = $row['nome'];
            $chave = $row['chave_acesso'];
        ?>
            <div class="container d-flex flex-column min-vh-100 justify-content-center">
                <div class="bg-pink rounded text-center p-3 mb-3 mx-5">
                    <span class="fw-bold"><?php echo $nome; ?></span>
                </div>

                <form action="../controller/inscricao?id=<?php echo $id_pagina?>" method="post">
                    <div class="text-center rounded mb-3 mx-5" style="background-color: #e4e4e4">
                        <div class="py-3">
                            <span>Chave de acesso</span>
                        </div>
                        <div class="input-group mb-4 mx-auto w-50">
                            <input type="text" name="nome" value="<?php echo $nome; ?>" style="display: none;">
                            <input type="text" name="chave" value="<?php echo $chave; ?>" style="display: none;">
                            <input type="text" name="chave_digitada" class="form-control rounded mx-5 my-4 bg-transparent border-dark" name="senha" placeholder="*******" id="senha-disciplina-<?php $id_materia; ?>" data-content="Aqui você deve digitar a chave da disciplina" rel="popover" data-placement="left" data-trigger="hover">
                        </div>
                    </div>

                    <div class="text-center my-4">
                        <button type="submit" class="btn btn-pink rounded px-5" id="botao-disciplina-<?php $id_materia; ?>" data-content="Clique aqui para se inscrever na disciplina" rel="popover" data-placement="left" data-trigger="hover">Logar</button>
                    </div>
                </form>
            </div>
    <?php }}
    } else {
        header("location: menuDisciplina?id=$id_pagina");
    }} ?>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $('#menu-disciplina-4').popover();
    </script>
    <?php
    
    if(isset($_GET['id'])){
        $id_materia = $_GET['id'];
        $select = "select nome,chave_acesso from tb_disciplina where id='$id_materia'";
        $query  = mysqli_query($connection, $select);
           ?> 
    <script>$('#senha-disciplina-<?php $id_materia; ?>').popover();</script>
    <script>$('#botao-disciplina-<?php $id_materia?>').popover();</script>
    
<?php
    }
    ?>

</body>