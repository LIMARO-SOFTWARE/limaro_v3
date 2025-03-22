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
                        <li><a class="dropdown-item text-primary" href="macroprocesos.php"><i class="fas fa-cogs"></i> Macroprocesos</a></li>
                        <li><a class="dropdown-item text-primary" href="procesos.php"><i class="fas fa-cog"></i> Procesos</a></li>
                        <li><a class="dropdown-item text-primary" href="documentos.php"><i class="fas fa-book"></i> Tipo de Documentos</a></li>
                        <li><a class="dropdown-item text-primary" href="registro.php"><i class="far fa-address-book"></i> Documentos Registrados</a></li>
                        <li><a class="dropdown-item text-primary" href="vigentes.php"><i class="fas fa-list"></i> Listado Maestro de Documentos Vigentes</a></li>
                        <li><a class="dropdown-item text-primary" href="obsoletos.php"><i class="far fa-times-circle"></i> Listado Maestro de Documentos Obsoletos</a></li>
                        <li><a class="dropdown-item text-primary" href="versionamiento.php"><i class="far fa-plus-square"></i> Versionamiento</a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownSolicitudes" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-th-list"></i> Solicitudes
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownSolicitudes">
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle text-primary" href="#"><i class="far fa-calendar-alt"></i> Gestion De Solicitudes</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-primary" href="solicitudes.php"><i class="far fa-calendar-check"></i> Solicitudes Radicadas</a></li>
                                <li><a class="dropdown-item text-primary" href="solicitudesAs.php"><i class="fas fa-calendar-alt"></i> Solicitudes Asignadas</a></li>
                                <li><a class="dropdown-item text-primary" href="solicitudesDe.php"><i class="fas fa-hourglass-end"></i> Solicitudes En Desarrollo</a></li>
                                <li><a class="dropdown-item text-primary" href="solicitudesFI.php"><i class="far fa-calendar-times"></i> Solicitudes Finalizadas</a></li>
                            </ul>
                        </li>
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
                            <a class="dropdown-item dropdown-toggle text-primary" href="#"><i class="far fa-calendar-alt"></i> Gestion de Tareas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-primary" href="tareasAsig.php"><i class="fas fa-clipboard-list"></i> Tareas Iniciadas</a></li>
                                <li><a class="dropdown-item text-primary" href="tareasDes.php"><i class="far fa-edit"></i> Tareas En Desarrollo</a></li>
                                <li><a class="dropdown-item text-primary" href="tareasDev.php"><i class="fas fa-reply-all"></i> Tareas Devueltas</a></li>
                                <li><a class="dropdown-item text-primary" href="tareasFin.php"><i class="fas fa-times-circle"></i> Tareas Finalizadas</a></li>
                            </ul>
                        </li>
                        <li class="dropdown-submenu">
                            <a class="dropdown-item dropdown-toggle text-primary" href="#"><i class="fas fa-file-signature"></i> Tareas</a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item text-primary" href="tareas.php"><i class="fas fa-clipboard-list"></i> Solicitudes Asignadas</a></li>
                                <li class="dropdown-submenu">
                                    <a class="dropdown-item dropdown-toggle text-primary" href="#"><i class="far fa-edit"></i> Tareas En Desarrollo</a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item text-primary" href="tareasDesa.php"><i class="far fa-clipboard"></i> Elaborar Documento</a></li>
                                        <li><a class="dropdown-item text-primary" href="tareasRevi.php"><i class="fas fa-check"></i> Revisar Documento</a></li>
                                        <li><a class="dropdown-item text-primary" href="tareasApr.php"><i class="fas fa-check-double"></i> Aprobar Documento</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item text-primary" href="tareasFn.php"><i class="fas fa-times-circle"></i> Tareas Finalizadas</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle text-primary" href="#" id="navbarDropdownUsuarios" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-users"></i> Usuarios
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdownUsuarios">
                        <li><a class="dropdown-item text-primary" href="usuarios.php"><i class="fas fa-users"></i> Usuarios</a></li>
                        <li><a class="dropdown-item text-primary" href="cargo.php"><i class="fas fa-user-plus"></i> Cargos</a></li>
                        <li><a class="dropdown-item text-primary" href="funciones.php"><i class="fas fa-user-plus"></i> Manual de Funciones</a></li>
                        <li><a class="dropdown-item text-primary" href="rol.php"><i class="fas fa-user-tag"></i> Roles</a></li>
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
</style>

<script>
document.addEventListener("DOMContentLoaded", function() {
    function handleSubmenu(e) {
        if (window.innerWidth < 992) {
            const item = e.currentTarget;
            const submenu = item.querySelector('.dropdown-menu');
            if (submenu) {
                e.preventDefault();
                e.stopPropagation();
                submenu.classList.toggle('show');
                item.classList.toggle('show');
            }
        }
    }

    function setupSubmenus(items) {
        items.forEach(item => {
            item.addEventListener('click', handleSubmenu);
            const nestedSubmenu = item.querySelector('.dropdown-menu');
            if (nestedSubmenu) {
                setupSubmenus(nestedSubmenu.querySelectorAll('.dropdown-submenu'));
            }
        });
    }

    const topLevelDropdowns = document.querySelectorAll('.navbar-nav > .dropdown-submenu');
    setupSubmenus(topLevelDropdowns);

    document.addEventListener('click', function(e) {
        if (window.innerWidth < 992) {
            const openDropdowns = document.querySelectorAll('.dropdown-submenu.show');
            openDropdowns.forEach(dropdown => {
                if (!dropdown.contains(e.target)) {
                    dropdown.classList.remove('show');
                    const nestedMenus = dropdown.querySelectorAll('.dropdown-menu.show');
                    nestedMenus.forEach(menu => menu.classList.remove('show'));
                }
            });
        }
    });

    document.getElementById('btnCerrar').addEventListener('click', function() {
        console.log('Cerrar sesión');
    });
});
</script>