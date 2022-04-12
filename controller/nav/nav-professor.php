<?php
if ($_SESSION['status'] == 'professor') {
    if ($opcao == 'visaoGeral') { ?>
        <ul class="navbar-nav ms-auto mt-2">
            <li class="nav-item ms-auto">
                <a href="../view/gerenciaAtividade" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Gerenciar Atividades</span>
                </a>
            </li>
        </ul>

    <?php } elseif ($opcao == 'gerenciaAtividade') { ?>
        <ul class="navbar-nav ms-auto mt-2">
            <li class="nav-item ms-auto">
                <a href="../view/visaoGeral" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Visao Geral</span>
                </a>
            </li>
        </ul>

    <?php } elseif ($opcao == 'adicionaAtividade') { ?>
        <ul class="navbar-nav ms-auto mt-2">
            <li class="nav-item ms-auto">
                <a href="../view/gerenciaAtividade" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Gerenciar Atividades</span>
                </a>
            </li>
        </ul>
    <?php } elseif ($opcao == 'menuDisciplina') { ?>
        <ul class="navbar-nav ms-auto mt-2">
            <li class="nav-item ms-auto">
                <a href="../view/visaoGeral" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Visao Geral</span>
                </a>
            </li>
        </ul>
<?php }
} ?>