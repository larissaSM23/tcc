<?php 

include("../model/database.php");

$id = $_GET['id'];

$delete = "delete from tb_atividade where id = '$id'";

$query = mysqli_query($connection, $delete);

header("location: ../view/gerenciaAtividade.php");