<!-- Se agrega Head -->
<?php include_once "head.php" ?>
<title>Mi Perfil</title>

<body class="bg-light d-flex flex-column min-vh-100">
    <!-- se agrega Menu -->
    <?php include_once "menu.php" ?>
    <!-- se Inicia Pagina Inicio  -->
    <main class="flex-grow-1">
        <div class="container py-4">
            <nav class="mb-4">
                <div class="nav nav-pills" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-perfil"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Mi Perfil</button>
                </div>
            </nav>
            <div class="tab-content mt-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-perfil" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row g-4">
                        <div class="col-md-4 col-lg-3">
                            <div class="card text-center h-100">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><b>Foto de Perfil</b></h5>
                                    <img src="../documentos/usuarios/<?php echo $_SESSION['usuario']; ?>/imagen/<?php echo $_SESSION['img_empleado']; ?>"
                                        class="card-img-top img-fluid rounded-circle mx-auto d-block" style="max-width: 200px;" alt="Foto de perfil">
                                    <button type="button" class="btn btn-primary mt-auto" data-bs-toggle="modal" data-bs-target="#modalImg">Modificar Imagen</button>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-lg-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title"><b>Nombre Funcionario</b></h5>
                                    <p class="card-text"><?php echo $_SESSION['nombre_completo']; ?></p>
                                    <h5 class="card-title"><b>Cargo</b></h5>
                                    <p class="card-text"><?php echo $_SESSION['cargo']; ?></p>
                                    <h5 class="card-title"><b>Correo Electrónico</b></h5>
                                    <p class="card-text"><?php echo $_SESSION['correo_empleado']; ?></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-lg-4">
                            <div class="card text-center h-100">
                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><b>Manual de Funciones</b></h5>
                                    <?php if ($_SESSION['manual_funciones'] != null): ?>
                                    <a class="btn btn-primary mt-auto" href="../documentos/cargos/<?php echo $_SESSION['cargo']; ?>/<?php echo $_SESSION['manual_funciones']; ?>">
                                        Descargar Manual de Funciones <i class="fas fa-download"></i>
                                    </a>
                                    <?php else: ?>
                                    <h5 class="mt-auto">No se ha cargado el manual de funciones</h5>
                                    <?php endif ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal para cambio de foto de perfil-->
    <div class="modal fade" id="modalImg" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Cambiar Imagen de Perfil</b></h5>
                    <button type="button" id="btnCerrarModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="row g-3 form-group" action="../controladorEmpleado/imagen.update.php" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="mb-3">
                            <h5><b>Nueva Imagen</b></h5>
                            <input class="form-control" type="file" name="fileImagenPerfilUs" id="fileImagenPerfilUs" accept="image/*">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary"><i class="far fa-edit"></i> Modificar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-undo"></i> Volver</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include_once "footer.php" ?>

    <script src="../js/empleado/perfil.js"></script>
</body>

</html>