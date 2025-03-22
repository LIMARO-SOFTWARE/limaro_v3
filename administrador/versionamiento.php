<!-- Se agrega Head -->
<?php include_once "head.php" ?>
<title>Versionamiento</title>

<body class="bg-light d-flex flex-column min-vh-100">
    <!-- se agrega Menu -->
    <?php include_once "menu.php" ?>
    <!-- se Inicia Pagina Inicio  -->
    <main class="flex-grow-1 py-4">
        <div class="container">
            <nav class="mb-4">
                <div class="nav nav-pills" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-creacion1-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-creacion1" type="button" role="tab" aria-controls="nav-creacion1"
                        aria-selected="true">Versionamiento</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-creacion1" role="tabpanel" aria-labelledby="nav-creacion-tab">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center mb-4"><b>Versionamiento de Documentos</b></h2>
                            <form class="row g-3" id="frmVersionamiento"
                                action="../controladorAdministrador/documento/versionamiento.create.php" method="POST"
                                enctype="multipart/form-data">
                                <input type="text" name="idDocumento1" id="idDocumento1" hidden>
                                <input type="text" name="documentoNam" id="documentoNam" hidden>
                                <input type="text" name="macroproceso" id="macroproceso" hidden>
                                <input type="text" name="proceso1" id="proceso1" hidden>
                                <input type="text" name="tipo" id="tipo" hidden>
                                <input type="text" name="codigo1" id="codigo1" hidden>
                                <input type="text" name="documento" id="documento" hidden>
                                <input type="text" name="versionAnt" id="versionAnt" hidden>

                                <div class="col-md-9 col-sm-8">
                                    <label for="documentoAuto1" class="form-label"><b>Seleccionar Documento a Actualizar*</b></label>
                                    <input class="form-control" type="text" name="documentoAuto1" id="documentoAuto1">
                                </div>
                                <div class="col-md-3 col-sm-4">
                                    <label for="versionSig1" class="form-label"><b>Versión Siguiente*</b></label>
                                    <input class="form-control" type="text" name="versionSig1" id="versionSig1" readonly>
                                </div>
                                <div class="col-12">
                                    <label for="descriCambio1" class="form-label"><b>Descripción del Cambio*</b></label>
                                    <textarea class="form-control" rows="3" id="descriCambio1" name="descriCambio1" required></textarea>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                    <label for="usuarioCreacion" class="form-label"><b>Elaborado por*</b></label>
                                    <select class="form-select" id="usuarioCreacion" name="usuarioCreacion" required></select>
                                </div>
                                <div class="col-md-4 col-sm-5">
                                    <label for="fechaCreacion" class="form-label"><b>Fecha Elaboración*</b></label>
                                    <input class="form-control" type="date" name="fechaCreacion" id="fechaCreacion"
                                        onkeydown="return false"
                                        max="<?php echo date("Y-m-d"); ?>" required>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                    <label for="usuarioRevision" class="form-label"><b>Revisado por*</b></label>
                                    <select class="form-select" id="usuarioRevision" name="usuarioRevision" required></select>
                                </div>
                                <div class="col-md-4 col-sm-5">
                                    <label for="fechaRevision" class="form-label"><b>Fecha Revisión*</b></label>
                                    <input class="form-control" type="date" name="fechaRevision" id="fechaRevision"
                                        onkeydown="return false"
                                        max="<?php echo date("Y-m-d"); ?>" required>
                                </div>
                                <div class="col-md-8 col-sm-7">
                                    <label for="usuarioAprobacion" class="form-label"><b>Aprobado por*</b></label>
                                    <select class="form-select" id="usuarioAprobacion" name="usuarioAprobacion" required></select>
                                </div>
                                <div class="col-md-4 col-sm-5">
                                    <label for="fechaAprobacion" class="form-label"><b>Fecha Aprobación*</b></label>
                                    <input class="form-control" type="date" name="fechaAprobacion" id="fechaAprobacion"
                                        onkeydown="return false"
                                        max="<?php echo date("Y-m-d"); ?>" required>
                                </div>
                                <div class="col-12">
                                    <label for="fileDocumento" class="form-label"><b>Agregar Documento*</b></label>
                                    <input class="form-control" type="file" name="fileDocumento" id="fileDocumento" required>
                                </div>
                                <div class="col-12">
                                    <span class="text-muted">* Campo Obligatorio</span>
                                </div>
                                <div class="col-12 mt-3">
                                    <button class="btn btn-primary me-2" id="btnVersionamiento" type="submit">
                                        <i class="fas fa-check"></i> Actualizar Versión
                                    </button>
                                    <button type="reset" id="limpiar" name="limpiar" class="btn btn-secondary">
                                        <i class="fas fa-broom"></i> Limpiar
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include_once "footer.php" ?>
    <script src="../js/administrador/versionamiento.js"></script>
</body>
</html>