<?php include("../model/database.php");

$id = isset($_GET['id']) ? $_GET['id'] : null;

?>
<form action="editaAtividade" method="post">
    <?php 
    $select = "select nome,enunciado,op_a,op_b,op_c,op_d,op_correta from tb_atividade where id ='$id'";
    $query  = mysqli_query($connection, $select);
    while($row = mysqli_fetch_array($query)) {
        $nome = $row['nome'];
        $enunciado = $row['enunciado'];
        $op_a = $row['op_a'];
        $op_b = $row['op_b'];
        $op_c = $row['op_c'];
        $op_d = $row['op_d'];
        $op_correta = $row['op_correta'];
        if($op_correta == 1){
            $op_correta = "Opção A";
        }else if($op_correta == 2){
            $op_correta = "Opção B";
        }else if($op_correta == 3){
            $op_correta = "Opção C";
        }else if($op_correta == 4){
            $op_correta = "Opção D";
        }
        
        echo "<input type='text' name='nome' value='$nome' id=''>";
        echo "<input type='text' name='enunciado' value='$enunciado' id=''>";
        echo "<input type='text' name='op_correta' value='$op_correta' id=''>";
        echo "<input type='text' name='op_a' value='$op_a' id=''>";
        echo "<input type='text' name='op_b' value='$op_b' id=''>";
        echo "<input type='text' name='op_c' value='$op_c' id=''>";
        echo "<input type='text' name='op_d' value='$op_d' id=''>";

        echo "<input type='text' name='id' value='$id' id='' style='display: none;'>";
                                     
    }
    ?>
    <input type="submit" value="Salvar" name="salvar">
</form>
<?php

    if(isset($_POST['salvar'])){
       
        $nome1 = $_POST['nome'];
        $enunciado1 = $_POST['enunciado'];
        $op_correta1 = $_POST['op_correta'];

        if($op_correta1 == "Opção A"){
            $op_correta1 = 1;
        }else if($op_correta1 == "Opção B"){
            $op_correta1 = 2;
        }else if($op_correta1 == "Opção C"){
            $op_correta1 = 3;
        }else if($op_correta1 == "Opção D"){
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

        if($query){
            header('location: ../view/gerenciaAtividade');
        }
        

    }

?>
