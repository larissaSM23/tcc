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
    $id_sessao = $_SESSION['id'];
    $resposta_select ="select a.nome as nome,b.op_aluno as op_aluno,c.op_correta as op_correta, c.nome as titulo from tb_aluno a, tb_aluno_atividade b, tb_atividade c where a.id=b.id_aluno and b.id_atividade=c.id and a.id='$id_sessao';";
    $query  = mysqli_query($connection, $resposta_select);
    while($linha = mysqli_fetch_array($query)){
        $op_aluno = $linha['nome'];
    }
    
    if(isset($op_aluno)){
    ?>
    <div>
        <table class="table text-center">      
            
            
            <tr class="border-pink">
                
                <th class="col"></th>
                <th class="col">Item</th>
                <th class="col">Nota</th>
                
            </tr>
    <?php }else{
        echo "Opa, parece que não temos nada aqui";

    } ?>
            <tbody class="text-center">
                <?php while($linha = mysqli_fetch_array($query)){
                    $op_aluno = $linha['op_aluno'];
                    $op_atividade = $linha['op_correta'];
                    $titulo = $linha['titulo'];
                ?>

                <tr>
                    <td class="border-0">
                        <i class="bi bi-file-earmark-text rounded-circle p-2 bg-pink text-primary"></i>
                    </td>
                    <td class="border-0">
                        <p class="d-inline-block"><?php echo $titulo; ?></p>
                    </td>
                    <td class="border-0">
                        <?php if($op_aluno == $op_atividade){ ?>
                        <p class="mx-5 d-inline-block" id="notas-1" data-content="Essa foi a nota que você obteve nesta atividade" rel="popover" data-placement="right" data-trigger="hover">10/10</p>
                            <?php } else { ?>
                                <p class="mx-5 d-inline-block" id="notas-1" data-content="Essa foi a nota que você obteve nesta atividade" rel="popover" data-placement="right" data-trigger="hover">0/10</p>
                            <?php } ?>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
</div>


<?php {}
include('./components/scripts.php');
?>

</body>