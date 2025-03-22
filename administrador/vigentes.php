<!-- Se agrega Head -->
<?php include_once "head.php" ?>
<title>Listado Maestro de Documentos Vigentes</title>
<body class="bg-light d-flex flex-column min-vh-100">
    <!-- se agrega Menu -->
    <?php include_once "menu.php" ?>
    <!-- se Inicia Pagina Inicio  -->
    <main class="flex-grow-1 py-4">
        <div class="container">
            <nav class="mb-4">
                <div class="nav nav-pills" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-documentos-tab" data-bs-toggle="tab"
                        data-bs-target="#nav-documentos" type="button" role="tab" aria-controls="nav-documentos"
                        aria-selected="true">Listado Maestro de Documentos Vigentes</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-documentos" role="tabpanel"
                    aria-labelledby="nav-documentos-tab">
                    <div class="row">
                        <div class="col-12 border rounded p-3">
                            <h4 class="text-center mb-4"><b>Listado Maestro de Documentos Vigentes</b></h4>
                            <div class="card">
                                <div class="card-body">
                                    <div id="consulta"></div>
                                </div>
                            </div>
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