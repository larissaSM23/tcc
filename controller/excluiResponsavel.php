<?php 

include("../model/database.php");

$id = $_GET['id'];

$delete = "delete from tb_responsavel where id = '$id'";

$query = mysqli_query($connection, $delete);

header("location: ../view/gerenciaUsuario.php");

?>