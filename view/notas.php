<?php
$title = "Notas";
include('./components/head.php');
include('../model/database.php');
?>

<body>
    <?php

    include('./components/nav.php')
    ?>
    <div class="container d-flex flex-column min-vh-100 justify-content-center">
        <?php
        if ($_SESSION['status'] == 'admin') {
            header('Location: visaoGeral');
        }else {
            if ($_SESSION['status'] == 'aluno') {
                $id_sessao = $_SESSION['id'];
                $resposta_select = "select b.id as id_atividade, a.nome as nome,b.op_aluno as op_aluno,c.op_correta as op_correta, c.nome as titulo from tb_aluno a, tb_aluno_atividade b, tb_atividade c where a.id=b.id_aluno and b.id_atividade=c.id and a.id='$id_sessao';";
                $query1  = mysqli_query($connection, $resposta_select);
                $query  = mysqli_query($connection, $resposta_select);
                while ($linha = mysqli_fetch_array($query)) {
                    $op_aluno = $linha['nome'];
                }

                if (isset($op_aluno)) {
        ?>
                    <div>
                        <table class="table text-center">


                            <tr class="border-pink">

                                <th class="col"></th>
                                <th class="col">Item</th>
                                <th class="col">Nota</th>

                            </tr>
                        <?php } else {
                        echo "Opa, parece que não temos nada aqui";
                    } ?>
                        <tbody class="text-center">
                            <?php while ($linha = mysqli_fetch_array($query1)) {
                                $id_atividade = $linha['id_atividade'];
                                $op_aluno = $linha['op_aluno'];
                                $op_atividade = $linha['op_correta'];
                                $titulo = $linha['titulo'];
                            ?>

                                <tr>
                                    <td class="border-0">
                                        <i class="fa-solid fa-file-lines" style="font-size: 30px; color: #d99b96"></i>
                                    </td>
                                    <td class="border-0">
                                        <p class="d-inline-block"><?php echo $titulo; ?></p>
                                    </td>
                                    <td class="border-0">
                                        <?php if ($op_aluno == $op_atividade) { ?>
                                            <p class="mx-5 d-inline-block" id="notas-<?php echo $id_atividade?>" data-content="Essa foi a nota que você obteve nesta atividade" rel="popover" data-placement="right" data-trigger="hover">10/10</p>
                                        <?php } else { ?>
                                            <p class="mx-5 d-inline-block" id="notas-<?php echo $id_atividade?>" data-content="Essa foi a nota que você obteve nesta atividade" rel="popover" data-placement="right" data-trigger="hover">0/10</p>
                                        <?php } ?>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        </table>
                    </div>
                    <?php   } else {
                    $id_sessao = $_GET['id'];
                    $resposta_select = "select a.nome as nome,b.op_aluno as op_aluno,c.op_correta as op_correta, c.nome as titulo from tb_aluno a, tb_aluno_atividade b, tb_atividade c where a.id=b.id_aluno and b.id_atividade=c.id and a.id='$id_sessao';";
                    $query1  = mysqli_query($connection, $resposta_select);
                    $query  = mysqli_query($connection, $resposta_select);
                    while ($linha = mysqli_fetch_array($query)) {
                        $op_aluno = $linha['nome'];
                    }

                    if (isset($op_aluno)) {
                    ?>
                        <div>
                            <table class="table text-center">


                                <tr class="border-pink">

                                    <th class="col"></th>
                                    <th class="col">Item</th>
                                    <th class="col">Nota</th>

                                </tr>
                            <?php } else {
                            echo "Opa, parece que não temos nada aqui";
                        } ?>
                            <tbody class="text-center">
                                <?php while ($linha = mysqli_fetch_array($query1)) {
                                    $op_aluno = $linha['op_aluno'];
                                    $op_atividade = $linha['op_correta'];
                                    $titulo = $linha['titulo'];
                                ?>

                                    <tr>
                                        <td class="border-0">
                                            <i class="fa-solid fa-file-lines" style="font-size: 30px; color: #d99b96"></i>
                                        </td>
                                        <td class="border-0">
                                            <p class="d-inline-block"><?php echo $titulo; ?></p>
                                        </td>
                                        <td class="border-0">
                                        <?php if ($op_aluno == $op_atividade) { ?>
                                            <p class="mx-5 d-inline-block" id="notas-<?php echo $id_atividade?>" data-content="Essa foi a nota que você obteve nesta atividade" rel="popover" data-placement="right" data-trigger="hover">10/10</p>
                                        <?php } else { ?>
                                            <p class="mx-5 d-inline-block" id="notas-<?php echo $id_atividade?>" data-content="Essa foi a nota que você obteve nesta atividade" rel="popover" data-placement="right" data-trigger="hover">0/10</p>
                                        <?php } ?>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                            </table>
                        </div>
                <?php }
            } ?>
    </div>


    <?php {
    }
    // include('./components/scripts.php');
    ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script>
        $('#menu-disciplina-1').popover();
        $('#menu-disciplina-2').popover();
        $('#menu-disciplina-3').popover();
        $('#menu-disciplina-4').popover();
    </script>
    <?php
    
    if ($_SESSION['status'] == 'aluno') {
        $id_sessao = $_SESSION['id'];
    $select = "select b.id as id_atividade from tb_aluno a, tb_aluno_atividade b, tb_atividade c where a.id=b.id_aluno and b.id_atividade=c.id and a.id='$id_sessao';";
        $query = mysqli_query($connection, $select);
        
        while($linha = mysqli_fetch_array($query)){
            $id_atividade = $linha['id_atividade'];
           ?> 
    <script>$('#notas-<?php echo $id_atividade?>').popover();</script>
    <?php
        }
    }else{
        $id_sessao = $_GET['id'];
        $select = "select b.id as id_atividade from tb_aluno a, tb_aluno_atividade b, tb_atividade c where a.id=b.id_aluno and b.id_atividade=c.id and a.id='$id_sessao';";
        $query = mysqli_query($connection, $select);
        while($linha = mysqli_fetch_array($query)){
            $id_atividade = $linha['id_atividade'];
           ?> 
    <script>$('#notas-<?php echo $id_atividade?>').popover();</script>
    <?php
        }
    }
    ?>
</body>