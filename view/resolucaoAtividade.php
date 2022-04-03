<?php
$title = "Resolver Atividade";
include('./components/head.php');
include('../model/database.php');
?>

<body>
    <?php
    include('./components/nav.php')
    ?>
<div class="container d-flex flex-column min-vh-100 justify-content-center">
    <div class="bg-pink rounded p-3 mb-3 mx-2">
        <span class="fw-bold mx-4">Português</span>
    </div>

    <?php
        $id_pagina = (isset($_GET['id']));
        $select = "select id,nome,enunciado,op_a,op_b,op_c,op_d,op_correta from tb_atividade";
        $query  = mysqli_query($connection, $select);
    ?>
        
            
            
    
    <?php while($row = mysqli_fetch_array($query)) {
        $id = $row['id'];
        $enunciado = $row['enunciado'];
        $op_a = $row['op_a'];
        $op_b = $row['op_b'];
        $op_c = $row['op_c'];
        $op_d = $row['op_d'];

        if($id == $id_pagina){
    ?>
    <form action="../controller/resolucaoAtividade" method="post">
        <div class="rounded p-4 mb-3 mx-2" style="background-color: #e4e4e4">
            <div class="row">
                <div class="col-5 mx-4">
                    <img src="../public/img/atividade1.PNG" style="width:90%; min-height:auto;">
                </div>
                    
                <div class="col">
                    <div class="mb-4">
                        <span class="fw-bold h4"><?php echo $enunciado; ?></span>
                    </div>
                    
                    <div id="atividade-<?php $id_pagina?>" data-content="Clique em uma bolinha para marcar sua resposta" rel="popover" data-placement="right" data-trigger="hover">
                        <div class="form-check py-2">
                            <input type="radio" name="op_aluno" id="option-<?php $id ?>" class="form-check-input">
                            <label for="option-<?php $id ?>" class="form-check-label" style="font-size:20px;"><?php echo $op_a;?></label>
                        </div>
                        <div class="form-check py-2">
                            <input type="radio" name="op_aluno" id="option-<?php $id ?>" class="form-check-input">
                            <label for="option-<?php $id ?>" class="form-check-label"style="font-size:20px;"><?php echo $op_b;?></label>
                        </div>
                        <div class="form-check py-2">
                            <input type="radio" name="op_aluno" id="option-<?php $id ?>" class="form-check-input">
                            <label for="option-<?php $id ?>" class="form-check-label"style="font-size:20px;"><?php echo $op_c;?></label>
                        </div>
                        <div class="form-check py-2">
                            <input type="radio" name="op_aluno" id="option-<?php $id ?>" class="form-check-input">
                            <label for="option-<?php $id ?>" class="form-check-label"style="font-size:20px;"><?php echo $op_d;?></label>
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
    <?php }else{?>

    <?php } }?>
</div>
<?php
include('./components/scripts.php');
?>

</body>