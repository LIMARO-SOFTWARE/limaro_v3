    <?php include_once "head.php" ?>
    <title>Procesos</title>
</head>

<body class="bg-light d-flex flex-column min-vh-100">
    <?php include_once "menu.php" ?>
    
    <main class="flex-shrink-0">
        <div class="container py-4">
            <nav class="mb-4">
                <div class="nav nav-pills" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-procesos" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Proceso</button>
                </div>
            </nav>
            
            <div class="tab-content mt-3" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-procesos" role="tabpanel" aria-labelledby="nav-home-tab">
                    <h2 class="text-center mb-4"><b>Procesos</b></h2>
                    
                    <div class="d-flex flex-wrap gap-2 mb-4">
                        <button type="button" class="btn btn-primary" id="btnCrearProce"><i class="fas fa-plus"></i> Crear Procesos</button>
                        <button type="button" id="volverRegistroProce" class="btn btn-primary" hidden><i class="fas fa-eye"></i> Ver Procesos Registrados</button>
                    </div>

                    <form class="border p-3 mb-4" id="proceso" method="POST" hidden>
                        <h4 class="text-center mb-3"><b>Crear Proceso</b></h4>
                        <div class="row g-3">
                            <div class="col-md-5">
                                <h5><b>Nombre macroproceso*</b></h5>
                                <select class="form-select inicialM" id="tipoMacroProceso" name="tipoMacroProceso" onchange='estafuncion(this);' required></select>
                                <input type="text" id="idInput" name="idInput" hidden>
                            </div>
                            <div class="col-md-5">
                                <h5><b>Nombre proceso*</b></h5>
                                <input class="form-control inicialM" type="text" name="txtProceso" id="txtProceso" onkeyup="javascript:this.value=this.value.toUpperCase();" required>
                            </div>
                            <div class="col-md-2">
                                <h5><b>Siglas proceso*</b></h5>
                                <input class="form-control" type="text" name="txtSiglaProceso" id="txtSiglaProceso" maxlength="2" required onkeyup="javascript:this.value=this.value.toUpperCase();">
                            </div>
                            <div class="col-12">
                                <h5><b>Objetivo principal del proceso*</b></h5>
                                <textarea class="form-control inicialM" name="txtObjetivoproceso" id="txtObjetivoproceso" maxlength="600" rows="4" required></textarea>
                                <div class="text-muted mt-1">
                                    Caracteres restantes: <span id="char-count-proceso">600</span>
                                </div>
                            </div>
                            <div class="col-12">
                                <span class="text-muted">* Campo Obligatorio</span>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-primary me-2" id="btnRegistrarProceso"><i class="fas fa-plus"></i> Crear Proceso</button>
                                <button type="reset" class="btn btn-secondary"><i class="fas fa-broom"></i> Limpiar</button>
                            </div>
                        </div>
                    </form>

                    <div class="border p-3" id="procesoRgis">
                        <h4 class="text-center mb-3"><b>Procesos Registrados</b></h4>
                            <div class="card">
                                <div class="card-body">
                                    <div id="procesos"></div>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Modal para actualizaciones sobre procesos -->
    <div class="modal fade" id="exampleModale" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Actualizar Proceso</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="row g-3" id="ModificarPro" method="POST">
                    <div class="modal-body">
                        <input type="number" name="numidProcesosMod" id="numidProcesosMod" hidden>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <h5><b>Macroproceso Actual*</b></h5>
                                <input type="text" id="idMacroAnt" name="idMacroAnt" hidden>
                                <input class="form-control inicialM" type="text" name="txtMacroActual" id="txtMacroActual" readonly>
                            </div>
                            <div class="col-md-6">
                                <h5><b>Nuevo Macroproceso*</b></h5>
                                <select class="form-select inicialM" id="macroproActuPro" name="macroproActuPro" onchange='estafuncion1(this);' required></select>
                                <input type="text" id="idInput1" name="idInput1" hidden>
                            </div>
                            <div class="col-md-6">
                                <h5><b>Nombre Proceso*</b></h5>
                                <input class="form-control" type="text" name="txtProcesoAnt" id="txtProcesoAnt" hidden>
                                <input class="form-control inicialM" type="text" name="txtProcesoMod" id="txtProcesoMod">
                            </div>
                            <div class="col-md-6">
                                <h5><b>Sigla Proceso*</b></h5>
                                <input class="form-control" type="text" name="txtSiglaProcesoMod" id="txtSiglaProcesoMod" maxlength="2" onkeyup="javascript:this.value=this.value.toUpperCase();">
                            </div>
                            <div class="col-12">
                                <h5><b>Objetivo del Proceso*</b></h5>
                                <textarea class="form-control inicialM" name="txtObjetiProMod" id="txtObjetiProMod" maxlength="600" rows="4" required></textarea>
                                <div class="text-muted mt-1">
                                    Caracteres restantes: <span id="char-count-mod">600</span>
                                </div>
                            </div>
                        </div>
                        <div class="mt-3">
                            <span class="text-muted">* Campo Obligatorio</span>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnModificarPro" class="btn btn-primary"><i class="far fa-edit"></i> Modificar</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-undo"></i> Volver</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Modal para actualizacion de estado procesos -->
    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"><b>Cambiar estado al proceso</b></h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form class="row g-3" id="inactivarProce" method="POST">
                    <div class="modal-body">
                        <input type="number" name="numidProcesosElim" id="numidProcesosElim" hidden>
                        <div class="row g-3">
                            <div class="col-12">
                                <h5><b>Nombre del proceso</b></h5>
                                <input class="form-control" type="text" name="txtProcesoElim" id="txtProcesoElim" readonly>
                            </div>
                            <div class="col-md-6">
                                <h5><b>Estado actual del proceso</b></h5>
                                <input class="form-control" type="text" name="txtEstadoActualPro" id="txtEstadoActualPro" readonly>
                            </div>
                            <div class="col-md-6">
                                <h5><b>Nuevo Estado del Proceso</b></h5>
                                <select class="form-select" id="estadoModProceso" name="estadoModProceso">
                                    <option selected disabled>- Seleccione el nuevo estado -</option>
                                    <option value="ACTIVO">Activo</option>
                                    <option value="INACTIVO">Inactivo</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" id="btnEliminarPro" class="btn btn-primary"><i class="fas fa-times"></i> Cambiar Estado</button>
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal"><i class="fas fa-undo"></i> Volver</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <?php include_once "footer.php" ?>
    <script src="../js/administrador/procesos.Adm.js"></script>
    <script>
    function estafuncion(inputSelect) {
        var indice = inputSelect.selectedIndex;
        var selectedOption = inputSelect.options[indice];
        document.getElementById("idInput").value = selectedOption.text;
    }

    function estafuncion1(inputSelect) {
        var indice = inputSelect.selectedIndex;
        var selectedOption = inputSelect.options[indice];
        document.getElementById("idInput1").value = selectedOption.text;
    }

    // Character count for textareas
    document.getElementById('txtObjetivoproceso').addEventListener('input', function() {
        var maxLength = this.getAttribute('maxlength');
        var currentLength = this.value.length;
        document.getElementById('char-count-proceso').textContent = maxLength - currentLength;
    });

    document.getElementById('txtObjetiProMod').addEventListener('input', function() {
        var maxLength = this.getAttribute('maxlength');
        var currentLength = this.value.length;
        document.getElementById('char-count-mod').textContent = maxLength - currentLength;
    });
    </script>
</body>
</html>