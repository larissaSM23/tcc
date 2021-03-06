<nav class="navbar navbar-expand-lg navbar-light bg-secondary-2 mb-1">
    <div class="container-fluid">
        <a href="../view/visaoGeral" class="navbar-brand fw-bold">Help Autismo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="myNavbar">
            <?php
            session_start();
            $_SESSION['status'];
            $opcao = basename($_SERVER["SCRIPT_FILENAME"], '.php');
            include('.././controller/nav/nav.php');
            ?>
            <ul class="navbar-nav ms-auto mt-2">
                <li class="nav-item ms-auto">
                    <a href="./../controller/logout" class="nav-link menu-item">
                        <i class="fa-solid fa-user" style="font-size: 15px"></i>
                        <span class="d-inline-block fw-bold h5" id="menu-disciplina-4" data-content="Clique aqui para sair" rel="popover" data-placement="right" data-trigger="hover"><?php echo $_SESSION['session']; ?> </span>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<?php
set_include_path('./components/script');
?>