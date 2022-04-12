<?php
if ($_SESSION['status'] == 'aluno') {
    if ($opcao == 'menuDisciplina') { ?>
        <ul class="navbar-nav ms-auto mt-2">
            <li class="nav-item ms-auto">
                <a href="../view/notas" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5" id="menu-disciplina-1" data-content="Clique aqui para acessar suas notas" rel="popover" data-placement="right" data-trigger="hover">Notas</span>
                </a>
            </li>

            <li class="nav-item ms-auto">
                <a href="../view/historico" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5" id="menu-disciplina-2" data-content="Clique aqui para acessar suas atividades feitas" rel="popover" data-placement="right" data-trigger="hover">Historico de Atividades</span>
                </a>
            </li>
            <li class="nav-item ms-auto">
                <a href="../view/visaoGeral" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5" id="menu-disciplina-3" data-content="Clique aqui para voltar ao menu das disciplinas" rel="popover" data-placement="right" data-trigger="hover">Visão Geral</span>
                </a>
            </li>
        </ul>

    <?php } elseif ($opcao == 'resolucaoAtividade') { ?>
        <ul class="navbar-nav ms-auto mt-2">
            <li class="nav-item ms-auto">
                <a href="../view/notas" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5" id="menu-disciplina-1" data-content="Clique aqui para acessar suas notas" rel="popover" data-placement="right" data-trigger="hover">Notas</span>
                </a>
            </li>

            <li class="nav-item ms-auto">
                <a href="../view/historico" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5" id="menu-disciplina-2" data-content="Clique aqui para acessar suas atividades feitas" rel="popover" data-placement="right" data-trigger="hover">Historico de Atividades</span>
                </a>
            </li>
            <li class="nav-item ms-auto">
                <a href="../view/visaoGeral" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5" id="menu-disciplina-3" data-content="Clique aqui para voltar ao menu das disciplinas" rel="popover" data-placement="right" data-trigger="hover">Visão Geral</span>
                </a>
            </li>
        </ul>

    <?php } elseif ($opcao == 'notas') { ?>
        <ul class="navbar-nav ms-auto mt-2">
            <li class="nav-item ms-auto">
                <a href="../view/historico" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5" id="menu-disciplina-2" data-content="Clique aqui para acessar suas atividades feitas" rel="popover" data-placement="right" data-trigger="hover">Historico de Atividades</span>
                </a>
            </li>
            <li class="nav-item ms-auto">
                <a href="../view/visaoGeral" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5" id="menu-disciplina-3" data-content="Clique aqui para voltar ao menu das disciplinas" rel="popover" data-placement="right" data-trigger="hover">Visão Geral</span>
                </a>
            </li>
        </ul>

    <?php } elseif ($opcao == 'historico') { ?>
        <ul class="navbar-nav ms-auto mt-2">
            <li class="nav-item ms-auto">
                <a href="../view/notas" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5" id="menu-disciplina-1" data-content="Clique aqui para acessar suas notas" rel="popover" data-placement="right" data-trigger="hover">Notas</span>
                </a>
            </li>
            <li class="nav-item ms-auto">
                <a href="../view/visaoGeral" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5" id="menu-disciplina-3" data-content="Clique aqui para voltar ao menu das disciplinas" rel="popover" data-placement="right" data-trigger="hover">Visão Geral</span>
                </a>
            </li>
        </ul>

<?php }
} ?>