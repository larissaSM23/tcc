<?php
if($_SESSION['status'] == 'admin'){
    if($opcao == 'gerenciaAtividade'){?>
        <ul class="navbar-nav ms-auto mt-2">
            <li class="nav-item ms-auto">
                <a href="../view/gerenciaUsuario" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Gerenciar Usuários</span>
                </a>
            </li>
            <li class="nav-item ms-auto">
                <a href="../view/gerenciaDisciplina" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Gerenciar Disciplinas</span>
                </a>
            </li>
            <li class="nav-item ms-auto">
                <a href="../view/cadastroAlunoDisciplina" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Cadastrar Aluno em Disciplina</span>
                </a>
            </li>
        </ul>


        <?php } elseif($opcao == 'visaoGeral'){?>
        <ul class="navbar-nav ms-auto mt-2">
            <li class="nav-item ms-auto">
                <a href="../view/gerenciaUsuario" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Gerenciar Usuários</span>
                </a>
            </li>
            <li class="nav-item ms-auto">
                <a href="../view/gerenciaDisciplina" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Gerenciar Disciplinas</span>
                </a>
            </li>
            <li class="nav-item ms-auto">
                <a href="../view/gerenciaAtividade" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Gerenciar Atividades</span>
                </a>
            </li>
            <li class="nav-item ms-auto">
                <a href="../view/cadastroAlunoDisciplina" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Cadastrar Aluno em Disciplina</span>
                </a>
            </li>
        </ul>


    <?php } elseif($opcao == 'menuDisciplina'){?>
        <ul class="navbar-nav ms-auto mt-2">
            <li class="nav-item ms-auto">
                <a href="../view/notas" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Notas</span>
                </a>
            </li>
            <li class="nav-item ms-auto">
                <a href="../view/historico" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Histórico de Atividades</span>
                </a>
            </li>
            <li class="nav-item ms-auto">
                <a href="../view/visaoGeral" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Visão Geral</span>
                </a>
            </li>


            <?php } elseif($opcao == 'notas'){?>
        <ul class="navbar-nav ms-auto mt-2">
            <li class="nav-item ms-auto">
                <a href="../view/menuDisciplina" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Atividades</span>
                </a>
            </li>
            <li class="nav-item ms-auto">
                <a href="../view/historico" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Histórico de Atividades</span>
                </a>
            </li>
            <li class="nav-item ms-auto">
                <a href="../view/visaoGeral" class="nav-link menu-item">
                    <span class="d-inline-block fw-bold h5">Visão Geral</span>
                </a>
            </li>





    


    <?php } else {

    }
} else {

}?>