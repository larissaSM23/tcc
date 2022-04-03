<?php 
    if($_SESSION['status'] == 'aluno'){
        if($opcao == 'menuDisciplina'){?>
            <ul class="navbar-nav ms-auto mt-2">
                <li class="nav-item ms-auto">
                    <a href="../view/notas" class="nav-link menu-item">
                        <span class="d-inline-block fw-bold h5">Notas</span>
                    </a>
                </li>
            
                <li class="nav-item ms-auto">
                    <a href="../view/historico" class="nav-link menu-item">
                        <span class="d-inline-block fw-bold h5">Historico de Atividades</span>
                    </a>
                </li>
            </ul>

        <?php } elseif($opcao == 'resolucaoAtividade'){?>
            <ul class="navbar-nav ms-auto mt-2">
                <li class="nav-item ms-auto">
                    <a href="../view/notas" class="nav-link menu-item">
                        <span class="d-inline-block fw-bold h5">Notas</span>
                    </a>
                </li>
                
                <li class="nav-item ms-auto">
                    <a href="../view/resolucaoAtividade" class="nav-link menu-item">
                        <span class="d-inline-block fw-bold h5">Atividades</span>
                    </a>
                </li>
            
                <li class="nav-item ms-auto">
                    <a href="../view/historico" class="nav-link menu-item">
                        <span class="d-inline-block fw-bold h5">Historico de Atividades</span>
                    </a>
                </li>
            </ul>

        <?php } elseif($opcao == 'notas'){?>
            <ul class="navbar-nav ms-auto mt-2">
                <li class="nav-item ms-auto">
                    <a href="../view/resolucaoAtividade" class="nav-link menu-item">
                        <span class="d-inline-block fw-bold h5">Atividades</span>
                    </a>
                </li>
            
                <li class="nav-item ms-auto">
                    <a href="../view/historico" class="nav-link menu-item">
                        <span class="d-inline-block fw-bold h5">Historico de Atividades</span>
                    </a>
                </li>
            </ul>

        <?php } elseif($opcao == 'historico'){?>
            <ul class="navbar-nav ms-auto mt-2">
                <li class="nav-item ms-auto">
                    <a href="../view/resolucaoAtividade" class="nav-link menu-item">
                        <span class="d-inline-block fw-bold h5">Atividades</span>
                    </a>
                </li>
            
                <li class="nav-item ms-auto">
                    <a href="../view/notas" class="nav-link menu-item">
                        <span class="d-inline-block fw-bold h5">Notas</span>
                    </a>
                </li>
            </ul>
        }
    }
<?php }
}?>