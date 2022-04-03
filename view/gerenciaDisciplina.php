<?php
$title = "Gerencia Disciplinas";
include('./components/head.php');
?>

<body>
<?php
    include('./components/nav.php')
    ?>
<div class="container d-flex flex-column min-vh-100 justify-content-center">
        <div>
        <div class="container d-flex flex-column min-vh-100 justify-content-center">
            <div class="bg-pink rounded text-center p-3 mb-3 mx-2">
                <span class="fw-bold">Disciplinas existentes</span>
            </div>

                <div class="m-2 rounded" style="background-color: #e4e4e4">
                    <div class="py-3 mx-5">
                        <span>Disciplinas</span>
                        <a class="link-dark link-underline-none dropdown-toggle float-end h3" data-toggle="collapse" href="#" role="button" data-target="#discipline"></a>
                        <div class="collapse" id="discipline">
                            <div class="card card-body mt-3" style="background-color: #e4e4e4">
                            <table class="table">
                        <tbody class="text-center">
                            <tr class="border-bottom border-dark">
                                <td>
                                    <span>Português</span>
                                </td>
                                <td>
                                    <a href="#" class="link-dark link-underline-none float-end">Editar</a>
                                </td>
                                <td>
                                    <a href="#" class="link-dark link-underline-none">Excluir</a>
                                </td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td>
                                    <span>Matemática</span>
                                </td>
                                <td>
                                    <a href="#" class="link-dark link-underline-none float-end">Editar</a>
                                </td>
                                <td>
                                    <a href="#" class="link-dark link-underline-none">Excluir</a>
                                </td>
                            </tr>
                            <tr class="border-bottom border-dark">
                                <td>
                                    <span>Ciências</span>
                                </td>
                                <td>
                                    <a href="#" class="link-dark link-underline-none float-end">Editar</a>
                                </td>
                                <td>
                                    <a href="#" class="link-dark link-underline-none">Excluir</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="text-center my-4">
                    <a href="{{ route('disciplina.create') }}" class="btn btn-pink rounded px-5" role="button" data-bs-toggle="button">Adicionar Atividade</a>
                </div>
            </div>
        </div>
    </div>

    <?php
    include('./components/scripts.php');
    ?>
</body>