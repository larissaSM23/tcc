<?php
$title = "Inserir Usuário";
include('./components/head.php');
?>

<body>
<?php
    include('./components/nav.php')
    ?>
<div class="container d-flex flex-column min-vh-100 justify-content-center">
    <div>
        <div class="container d-flex flex-column min-vh-100 justify-content-center">
            <div class="text-white rounded text-center p-3 mb-3 mx-2 mt-0" style="background-color: #115D8C">
                <span class="fw-bold">Cadastro de usuario</span>
            </div>
                
            <form action="../controller/cadastro" method="post" class="form-floating">

                <div class="m-2">
                    <div class="row g-2 mb-5">
                        <div class="col-md mx-4">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 border-bottom border-secondary" name="nome" id="option-1">
                                <label for="option-1">Nome</label>
                            </div>
                        </div>
                        
                        <div class="col-md mx-4">
                            <div class="form-floating">
                                <select class="form-select border-0 border-bottom border-secondary" name="tipo" id="tipo">
                                    <!-- <option value="id">dado</option> -->
                                    <option value="a">Aluno</option>
                                    <option value="p">Professor</option>
                                    <option value="r">Responsável</option>
                                    <option value="adm">Administrador</option>
                                </select>
                                <label for="tipo">Tipo</label>
                            </div>
                        </div>
                    </div>

                    <div class="row g-2 mb-5">
                        <div class="col-md mx-4">
                            <div class="form-floating">
                                <input type="email" class="form-control border-0 border-bottom border-secondary" name="email" id="email">
                                <label for="email">Email</label>
                            </div>
                        </div>

                        <div class="col-md mx-4">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 border-bottom border-secondary" name="cpf" id="cpf" maxlength="11">
                                <label for="cpf">CPF</label>
                            </div>  
                        </div>
                    </div>

                    <div class="row g-2 mb-5">
                        <div class="col-md mx-4" id="div_matricula">
                            <div class="form-floating">
                                <input type="password" class="form-control border-0 border-bottom border-secondary" name="senha" id="senha">
                                <label for="email">Senha</label>
                            </div>
                        </div>

                        <div class="col-md mx-4" id="div_cpf_responsavel">
                            <div class="form-floating">
                                <input type="text" class="form-control border-0 border-bottom border-secondary" name="cpf_responsavel" id="cpf_responsavel" maxlength="11">
                                <label for="cpf_responsavel">CPF do Responsável</label>
                            </div>  
                        </div>
                    </div>

                </div>

                <div class="text-center my-4">
                    <button type="submit" name="cadastro_usuario" class="btn btn-primary rounded px-5 my-3" style="background-color: #115D8C; border-color: #115D8C">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>

    <?php
    include('./components/scripts.php');
    ?>
    <script src="../public/js/home_adm.js"></script>
</body>