<!-- Inicio Menu -->
<header class="navbar navbar-expand-lg navbar-light fixed-top border-bottom" style="background-color: #f8f9fa; top: 5px;">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="../documentos/limaro/horizontal_on_white_by_logaster.png" alt="Limaro Logo" width="100" height="40" class="d-inline-block align-top">
            <img src="../documentos/empresa/logo/<?php echo $_SESSION['logo']; ?>" alt="Company Logo" width="100" height="40" class="d-inline-block align-top ms-2">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-primary" href="inicio.php"><i class="fas fa-home"></i> Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownDocs" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-indent"></i> Indice de Documentos
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownDocs">
                        <li><a class="dropdown-item text-primary" href="vigentes.php"><i class="fas fa-list"></i> Listado Maestro de Documentos Vigentes</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownSolicitudes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-th-list"></i> Solicitudes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownSolicitudes">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle text-primary" href="#"><i class="fas fa-file-signature"></i> Radicar Solicitudes</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-primary" href="solicitudes.Reg.php"><i class="fas fa-clipboard-list"></i> Mis Solicitudes Radicadas</a></li>
                                <li><a class="dropdown-item text-primary" href="solicitudesCr.php"><i class="far fa-edit"></i> Crear Documento</a></li>
                                <li><a class="dropdown-item text-primary" href="solicitudesAct.php"><i class="fas fa-sync-alt"></i> Actualizar Documento</a></li>
                                <li><a class="dropdown-item text-primary" href="solicitudesEli.php"><i class="fas fa-times-circle"></i> Eliminar Documento</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownTareas" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-tasks"></i> Tareas
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownTareas">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle text-primary" href="#"><i class="fas fa-file-signature"></i> Tareas</a>
                            <ul class="dropdown-menu">
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle text-primary" href="#"><i class="far fa-edit"></i> Tareas En Desarrollo</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item text-primary" href="tareasRevi.php"><i class="fas fa-check"></i> Revisar Documento</a></li>
                                        <li><a class="dropdown-item text-primary" href="tareasApr.php"><i class="fas fa-check-double"></i> Aprobar Documento</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownUsuarios" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-users"></i> Usuarios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownUsuarios">
                        <li><a class="dropdown-item text-primary" href="funciones.php"><i class="fas fa-user-plus"></i> Manual de Funciones</a></li>
                    </ul>
                </li>
            </ul>
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownProfile" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="../documentos/usuarios/<?php echo $_SESSION['usuario']; ?>/imagen/<?php echo $_SESSION['img_empleado']; ?>" alt="Profile" width="32" height="32" class="rounded-circle">
                        <?php echo $_SESSION['usuario']; ?>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownProfile">
                        <li><a class="dropdown-item text-primary" href="perfil.php"><i class="fas fa-user-alt"></i> Mi Perfil</a></li>
                        <li><a class="dropdown-item text-primary" href="clave.php"><i class="fas fa-user-lock"></i> Cambiar Clave</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <button class="btn btn-outline-primary" id="btnCerrar" type="button">
                    <i class="fas fa-sign-out-alt"></i> Cerrar Sesión
                </button>
            </form>
        </div>
    </div>
</header>

<style>
header {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1030;
    background-color: #fff;
}

body {
    padding-top: 56px;
}

.navbar-light .navbar-nav .nav-link {
    color: #0A58CD;
}

.navbar-light .navbar-nav .nav-link:hover,
.navbar-light .navbar-nav .nav-link:focus {
    color: #0A58CD;
}

.dropdown-item {
    color: #0A58CD !important;
}

.dropdown-item:hover,
.dropdown-item:focus {
    background-color: #f1f1f1;
}

@media (min-width: 992px) {
    .dropdown-menu .dropdown-toggle:after {
        border-top: .3em solid transparent;
        border-right: 0;
        border-bottom: .3em solid transparent;
        border-left: .3em solid;
    }
    .dropdown-menu .dropdown-menu {
        margin-left: 0;
        margin-right: 0;
    }
    .dropdown-menu li {
        position: relative;
    }
    .nav-item .submenu {
        display: none;
        position: absolute;
        left: 100%;
        top: -7px;
    }
    .nav-item .submenu-left {
        right: 100%;
        left: auto;
    }
    .dropdown-menu > li:hover {
        background-color: #f1f1f1;
    }
    .dropdown-menu > li:hover > .submenu {
        display: block;
    }
    .dropdown-submenu .dropdown-menu {
        top: 0;
        left: 100%;
        margin-top: -1px;
    }
    
    .dropdown-submenu:hover > .dropdown-menu {
        display: block;
    }
}

@media (max-width: 991.98px) {
    .dropdown-menu {
        position: static !important;
        background-color: #f8f9fa;
        border: none;
        box-shadow: none;
    }
    .dropdown-item {
        padding: .5rem 1.5rem;
    }
    .dropdown-toggle::after {
        float: right;
        margin-top: 8px;
    }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    function toggleSubmenu(e) {
        if (window.innerWidth < 992) {
            e.preventDefault();
            e.stopPropagation();
            let currentMenu = e.currentTarget.closest('.dropdown-menu');
            if (currentMenu) currentMenu.classList.add('show');
            
            let submenu = e.currentTarget.nextElementSibling;
            if (submenu && submenu.classList.contains('dropdown-menu')) {
                submenu.classList.toggle('show');
            }

            document.querySelectorAll('.dropdown-menu.show').forEach(openMenu => {
                if (!openMenu.contains(e.target) && openMenu !== submenu && openMenu !== currentMenu) {
                    openMenu.classList.remove('show');
                }
            });
        }
    }

    function setupSubmenus(container) {
        container.querySelectorAll('.dropdown-toggle').forEach(dropdown => {
            dropdown.addEventListener('click', toggleSubmenu);
        });
    }

    setupSubmenus(document.querySelector('.navbar-nav'));

    document.addEventListener('click', function(e) {
        if (window.innerWidth < 992) {
            if (!e.target.closest('.dropdown-menu')) {
                document.querySelectorAll('.dropdown-menu.show').forEach(openMenu => {
                    openMenu.classList.remove('show');
                });
            }
        }
    });

    document.getElementById('btnCerrar').addEventListener('click', function() {
        console.log('Cerrar sesión');
        // Aquí puedes agregar la lógica para cerrar la sesión
    });
});
</script>