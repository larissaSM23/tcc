<?php
$title = "Gerencia Usuários";
include('./components/head.php');
include('../model/database.php');
?>

<body>
<?php
    include('./components/nav.php')
    ?>
<div class="container d-flex flex-column min-vh-100 justify-content-center">
    <div>
        <div class="container d-flex flex-column min-vh-100 justify-content-center">
            <div class="bg-pink rounded text-center p-3 mb-3 mx-2">
                <span class="fw-bold">Usuários existentes</span>
            </div>
                
            <div class="m-2 rounded" style="background-color: #e4e4e4">
                <div class="py-3 mx-5">
                <span>Alunos</span>
                <a class="link-dark link-underline-none dropdown-toggle float-end h3" data-toggle="collapse" href="#" role="button" data-target="#teacher"></a>
                    
                    <div class="collapse" id="teacher">
                        <div class="card card-body mt-3" style="background-color: #e4e4e4">
                    
                
                <table class="table">
                <thead>
                    <tr>
                        <th>
                            Matrícula
                        </th>
                        <th>
                            Nome
                        </th>
                        <th>
                            Email
                        </th>
                        <th>
                            Ações
                        </th>
                    </tr>
                </thead>
                <tbody>
                    
                    
                    <?php
                                        

                        $select = "select id,matricula,nome,email from tb_aluno";
                        $query  = mysqli_query($connection, $select);
                        while($row = mysqli_fetch_array($query)) 
                        {
                            $id = $row["id"];
                            echo "<tr>";
                            echo "<th>".$row['matricula']."</th>";
                            echo "<th>".$row['nome']."</th>";
                            echo "<th>".$row['email']."</th>"; 
                            echo "<th><a class='mx-1' href='../controller/editaAtividade.php?id=$id'>Editar</a><a href='../controller/excluiAtividade.php?id=$id'>Excluir</a></th>";    
                            echo "</tr>";          
                        }
                    ?>
                </tbody>
                
            </table>
            </div>
            </div>
            </div>
            </div>
            
            <div class="m-2 rounded" style="background-color: #e4e4e4">
                <div class="py-3 mx-5">
                    <span>Professores</span>
                    <a class="link-dark link-underline-none dropdown-toggle float-end h3" data-toggle="collapse" href="#" role="button" data-target="#teacher"></a>
                    
                    <div class="collapse" id="teacher">
                        <div class="card card-body mt-3" style="background-color: #e4e4e4">
                            <span>ddd</span>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="m-2 rounded" style="background-color: #e4e4e4">
                <div class="py-3 mx-5">
                    <span>Responsáveis</span>
                    <a class="link-dark link-underline-none dropdown-toggle float-end h3" data-toggle="collapse" href="#" role="button" data-target="#responsible"></a>
                    
                    <div class="collapse" id="responsible">
                        <div class="card card-body mt-3" style="background-color: #e4e4e4">
                            <span></span>
                        </div>
                    </div>
                </div>
            </div>
                
            <div class="text-center my-4">
                <a href="{{ route('disciplina.create') }}" class="btn btn-pink rounded px-5" role="button" data-bs-toggle="button">Adicionar Usuário</a>
            </div>
        </div>
    </div>
</div>
<?php
include('./components/scripts.php');
?>
</body>