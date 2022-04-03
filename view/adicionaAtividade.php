<?php
$title = "Inserir Atividade";
include('./components/head.php');
include('./../model/database.php');
?>

<body>
<?php
    include('./components/nav.php')
    ?>
<div class="container d-flex flex-column min-vh-100 justify-content-center">
    <div>
        <div class="container d-flex flex-column min-vh-100 justify-content-center">
        <div class="text-white rounded text-center p-3 mb-3 mx-2 mt-0" style="background-color: #115D8C; padding-top:15px;">
                <span class="fw-bold">Inserir Atividade</span>
            </div>

            <form action="../controller/atividade" method="post" class="form-floating" enctype="multipart/form-data">
                <div class="m-2">
                    <div class="row g-2 mb-5">
                        <div class="col-md mx-4 mt-5">
                            <div class="row g-2 mb-5">
                                <div class="col-md mx-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 border-bottom border-secondary w-75" name="titulo" id="titulo">
                                        <label for="option-1">Título</label>
                                    </div>
                                </div>
                            </div>

                            <select name="disciplina" id="setor" class="form-control shadow-sm">
                                    <option value="null">Selecione</option>
                                    <?php
                                       

                                        $select = "select id,nome from tb_disciplina";
                                        $query  = mysqli_query($connection, $select);
                                        while($row = mysqli_fetch_array($query)) 
                                        {
                                    ?>
                                            <option value="<?php echo $row['id']; ?>"><?php echo $row['nome']; ?></option>
                                    <?php
                                        }
                                    ?>
                            </select>
                            
                                
                           
                            
                            <div class="row g-2 my-5">
                                <div class="col-md mx-4 mt-3">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 border-bottom border-secondary" name="enunciado" id="enunciado">
                                        <label for="option-4">Enunciado</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2 my-5">
                                <div class="col-md mx-4 mt-5">
                                    <div>
                                        <label for="option-4" class="my-2">Adicione uma imagem</label>
                                        <input type="file" accept="image/*" class="form-control border-secondary w-75" name="imagem" id="imagem">
                                    </div>    
                                </div>
                            </div>
                        </div>

                        <div class="col-md mx-4 mt-5">
                            <div class="row g-2 mb-5">
                                <div class="col-md mx-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 border-bottom border-secondary" name="op_a" id="op_a">
                                        <label for="option-11">Opção A</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2 mb-5">
                                    <div class="col-md mx-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 border-bottom border-secondary" name="op_b" id="op_b">
                                        <label for="option-12">Opção B</label>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2 mb-5">
                                <div class="col-md mx-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 border-bottom border-secondary" name="op_c" id="op_c">
                                        <label for="option-13">Opção C</label>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row g-2 mb-5">
                                <div class="col-md mx-4">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 border-bottom border-secondary" name="op_d" id="op_d">
                                        <label for="option-14">Opção D</label>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-2 mx-4">
                            <div class="row g-2 mb-5">
                                <div class="col-md mx-4">
                                    <div class="form-floating">
                                        <span>Correta</span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="row g-2 mb-5">
                                <div class="col-md mx-4">
                                    <div class="form-floating">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="op_correta" value="1">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2 my-5">
                                <div class="col-md mx-4 my-4">
                                    <div class="form-floating">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="op_correta" value="2">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2 my-5">
                                <div class="col-md mx-4 mt-3">
                                    <div class="form-floating">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="op_correta" value="3">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row g-2 my-5">
                                <div class="col-md mx-4 mt-4">
                                    <div class="form-floating">
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="op_correta" value="4">
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                    
                <div class="text-center my-4">
                    <button type="submit" class="btn btn-primary rounded px-5 my-3" style="background-color: #115D8C; border-color: #115D8C">Adicionar</button>
                </div>
            </form>
        </div>
    </div>
</div>

</body>