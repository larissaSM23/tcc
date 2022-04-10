<?php 
if($_SESSION['status'] == 'responsavel'){
    if($opcao == 'notas'){?>
        <ul class="navbar-nav ms-auto mt-2">
            <li class="nav-item ms-auto">
                <a href="../view/alunosVinculados" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Estudantes Vinculados</span>
                </a>
            </li>
        </ul>
    <?php }
}
?>