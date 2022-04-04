<?php include("../model/database.php");

$id = isset($_GET['id']) ? $_GET['id'] : null;

?>

<?php
$title = "Editar Responsavel";
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
                    <span class="fw-bold">Editar Responsável</span>
                </div>
                <?php
                 $select = "select id,nome,email,senha from tb_responsavel where id ='$id'";
                 $query  = mysqli_query($connection, $select);
 
                 while ($row = mysqli_fetch_array($query)) {
                     $nome = $row['nome'];
                     $id = $row['id'];
                     $email = $row['email'];
                     $senha = $row['senha'];
                 ?>
 
 
                     <form action="editaResponsavel" method="post" class="form-floating">
 
                         <div class="m-2">
                             <div class="row g-2 mb-5">
                                 <div class="col-md mx-4">
                                     <div class="form-floating">
                                         <input type="text" class="form-control border-0 border-bottom border-secondary" name="nome" id="option-1" value="<?php echo $nome; ?>">
                                         <label for="option-1">Nome</label>
                                     </div>
                                 </div>
                                 <div class="col-md mx-4">
                                     <div class="form-floating">
                                         <input type="text" class="form-control border-0 border-bottom border-secondary" name="tipo" id="optionn-1" value="Responsavel" disabled>
                                         <label for="optionn-1">Tipo</label>
                                     </div>
                                 </div>
                             </div>
 
                             <div class="row g-2 mb-5">
                                 <div class="col-md mx-4">
                                     <div class="form-floating">
                                         <input type="email" class="form-control border-0 border-bottom border-secondary" name="email" id="email" value="<?php echo $email; ?>">
                                         <label for="email">Email</label>
                                     </div>
                                 </div>
                             </div>
                             <div class="row g-2 mb-5">
 
                                 <div class="form-floating">
                                     <input type="password" class="form-control border-0 border-bottom border-secondary" name="senha" id="senha">
                                     <label for="email">Senha</label>
                                 </div>
                             </div>
                         </div>
 
             </div>
 
             <div class="text-center my-4">
                 <button type="submit" class="btn btn-primary rounded px-5 my-3" name="salvar" style="background-color: #115D8C; border-color: #115D8C">Salvar</button>
             </div>
 
             <input type="text" name="id" id="id" value="<?php echo $id; ?>" style="display: none;">
             </form>
         </div>
     </div>
     </div>
 
 </body>
 
 
 <?php } ?>
 <?php
 
 if (isset($_POST['salvar'])) {
 
     $nome1 = $_POST['nome'];
     $email1 = $_POST['email'];
     $senha1 = md5($_POST['senha']);
 
     // echo $op_a1;
     $id = $_POST['id'];
     // echo $id;
     $update = "update tb_responsavel set nome = '$nome1', email = '$email1', senha = '$senha1' where id = '$id' ;";
 
    //  echo $update;
 
        $query = mysqli_query($connection, $update);
    
        if ($query) {
            header('location: ../view/gerenciaUsuario');
        }
 }
 
 ?>