<!-- Se agrega Head -->
<?php include_once "head.php" ?>
<title>Solicitudes</title>

<body class="bg-light d-flex flex-column min-vh-100">
    <!-- se agrega Menu -->
    <?php include_once "menu.php" ?>
    <!-- se Inicia Pagina Inicio  -->
    <main class="flex-shrink-0 py-4">
        <div class="container">
            <nav class="mb-4">
                <div class="nav nav-pills" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-crear-tab" data-bs-toggle="tab" data-bs-target="#nav-crear"
                        type="button" role="tab" aria-controls="nav-crear" aria-selected="false">Creación De
                        Documento</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-crear" role="tabpanel" aria-labelledby="nav-crear-tab">
                    <div class="row">
                        <div class="col-12">
                            <h5 class="card-title text-center mb-4"><b>Creación De Documento</b></h5>
                            <form class="row g-3 form-group card p-4"
                                action="../controladorEmpleado/solicitudes.crearDoc.create.php" method="POST"
                                enctype="multipart/form-data">
                                <div class="col-12">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5><b>Prioridad*</b></h5>
                                            <select class="form-select" id="prioridad" name="prioridad" required>
                                                <option disabled selected> - Seleccione Un Tipo De Documento -</option>
                                                <option value="IMPORTANTE - URGENTE"> IMPORTANTE - URGENTE</option>
                                                <option value="IMPORTANTE - NO URGENTE"> IMPORTANTE - NO URGENTE</option>
                                                <option value="NO IMPORTANTE - URGENTE"> NO IMPORTANTE - URGENTE</option>
                                                <option value="NO IMPORTANTE - NO URGENTE"> NO IMPORTANTE - NO URGENTE</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <h5><b>Tipo de Documento*</b></h5>
                                            <select class="form-select" id="tipoDocumento" name="tipoDocumento" required></select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <h5><b>Descripción*</b></h5>
                                    <label class="text-muted"> Caracteres restantes: <span id="charCount"></span></label>
                                    <textarea class="form-control" rows="4" id="solicitud" name="solicitud" maxlength="600" required></textarea>
                                </div>
                                <div class="col-12">
                                    <h5><b>Subir Documento*</b></h5>
                                    <input type="file" class="form-control" id="fileSolicitud" name="fileSolicitud" multiple>
                                    <small class="text-muted">Si se agrega más de un archivo, anexarlos en carpeta comprimida .zip</small>
                                </div>
                                <div class="col-12">
                                    <small class="text-muted">* Campo Obligatorio</small>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary me-2"><i class="fas fa-plus"></i> Crear Solicitud</button>
                                    <button type="reset" class="btn btn-secondary"><i class="fas fa-broom"></i> Limpiar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once "footer.php" ?>
    <script src="../js/empleado/solicitudes.js"></script>
</body>
</html>