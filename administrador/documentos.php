<!-- Se agrega Head -->
<?php include_once "head.php" ?>
<title>Tipo de Documentos</title>

<body class="bg-light d-flex flex-column min-vh-100">
    <!-- se agrega Menu -->
    <?php include_once "menu.php" ?>
    <!-- se Inicia Pagina Inicio  -->
    <main class="flex-grow-1 ">
        <div class="container py-4">
            <nav class="mb-4">
                <div class="nav nav-pills" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-documentos-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-documentos" type="button" role="tab" aria-controls="nav-documentos"
                        aria-selected="true">Tipo de Documentos</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-documentos" role="tabpanel"
                    aria-labelledby="nav-documentos-tab">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="text-center mb-4"><strong>Tipo Documento</strong></h2>
                            <div class="d-flex flex-wrap justify-content-start mb-3">
                                <button type="button" class="btn btn-primary me-2 mb-2" id="btnCrearTipoDoc">
                                    <i class="fas fa-plus me-2"></i>Crear Tipo de Documento
                                </button>
                                <button type="button" id="volverRegistroTipoDoc" class="btn btn-primary mb-2" hidden>
                                    <i class="fas fa-eye me-2"></i>Ver Tipos de Documetos Registrados
                                </button>
                            </div>
                            <form class="row g-3 form-group border p-3 mb-4" hidden id="TipoDocumentos" method="POST">
                                <h4 class="text-center mb-3"><strong>Crear Tipo Documento</strong></h4>
                                <div class="col-md-6 col-12">
                                    <h5><strong>Nombre Tipo Documento*</strong></h5>
                                    <input class="form-control inicialM" type="text" name="txtTipoDocumento"
                                        id="txtTipoDocumento" required
                                        onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="col-md-3 col-12">
                                    <h5><strong>Siglas Tipo Documento*</strong></h5>
                                    <input class="form-control" type="text" name="txtSiglaTipoDocumento"
                                        id="txtSiglaTipoDocumento" maxlength="2" required
                                        onkeyup="javascript:this.value=this.value.toUpperCase();">
                                </div>
                                <div class="col-12">
                                    <span class="text-muted">* Campo Obligatorio</span>
                                </div>
                                <div class="col-12 mt-3">
                                    <button type="submit" class="btn btn-primary me-2" id="btnRegistrarTipoDocumento">
                                        <i class="fas fa-plus me-2"></i>Crear Tipo Documento
                                    </button>
                                    <button type="reset" class="btn btn-secondary">
                                        <i class="fas fa-broom me-2"></i>Limpiar
                                    </button>
                                </div>
                            </form>
                        </div>
                        <div class="col-12 border p-3" id="tipoDocumentosRes">
                            <h4 class="text-center mb-3"><strong>Tipo Documento Registrados</strong></h4>
                                <div class="card">
                                    <div class="card-body">
                                        <div id="tipoDocumentos"></div>
                                    </div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal para actualizaciones sobre Tipo Documento-->
    <div class="modal fade" id="actualizarTipoDocuento" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Actualizar el tipo de documento</strong></h5>
                    <button type="button" id="btnCerrarModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="row g-3 form-group" id="ModificarTipoDoc" method="POST" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="row">
                            <input class="form-control" type="number" name="numidTipoDocumentoMod" id="numidTipoDocumentoMod" hidden>
                            <div class="col-md-6 col-12 mb-3">
                                <h5><strong>Nombre Tipo Documento*</strong></h5>
                                <input class="form-control inicialM" type="text" name="txtTipoDocumentoMod" id="txtTipoDocumentoMod" required>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <h5><strong>Sigla Tipo Documento*</strong></h5>
                                <input class="form-control" type="text" name="txtSiglaTipoDocumentoMod" id="txtSiglaTipoDocumentoMod"
                                    maxlength="2" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                            </div>
                        </div>
                        <span class="text-muted">* Campo Obligatorio</span>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnModificarTipoDoc" class="btn btn-primary">
                            <i class="far fa-edit me-2"></i>Modificar
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fas fa-undo me-2"></i>Volver
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal para cambio de estado sobre Tipo Documento-->
    <div class="modal fade" id="cambiarEstadoTipoDoc" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><strong>Cambiar el estado al tipo documento</strong></h5>
                    <button type="button" id="btnCerrarModal" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="row g-3 form-group" id="inactivarTipoDoc" method="POST">
                    <div class="modal-body">
                        <div class="row">
                            <input class="form-control" type="number" name="numidTipDocElim" id="numidTipDocElim" hidden>
                            <div class="col-12 mb-3">
                                <h5><strong>Nombre Tipo Documento</strong></h5>
                                <input class="form-control" type="text" name="txtTipoDocElim" id="txtTipoDocElim" readonly>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <h5><strong>Estado actual del tipo documento</strong></h5>
                                <input class="form-control" type="text" name="txtSiglaTipDocElim" id="txtSiglaTipDocElim" readonly>
                            </div>
                            <div class="col-md-6 col-12 mb-3">
                                <h5><strong>Nuevo Estado del Proceso</strong></h5>
                                <select class="form-select" id="estadoModTipdoc" name="estadoModTipdoc">
                                    <option>- Seleccione el nuevo estado -</option>
                                    <option value="ACTIVO">Activo</option>
                                    <option value="INACTIVO">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnEliminarTipDoc" class="btn btn-primary">
                            <i class="fas fa-times me-2"></i>Cambiar Estado
                        </button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
                            <i class="fas fa-undo me-2"></i>Volver
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include_once "footer.php" ?>
    <script src="../js/administrador/documento.js"></script>

    <script>
    // ... (El resto del código JavaScript permanece igual)
    </script>

</body>

</html>