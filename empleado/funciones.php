<!-- Se agrega Head -->
<?php include_once "head.php" ?>
<title>Manual de Funciones</title>
<body class="bg-light d-flex flex-column min-vh-100">
    <!-- se agrega Menu -->
    <?php include_once "menu.php" ?>
    <!-- se Inicia Pagina Inicio  -->
    <main class="flex-shrink-0 py-4">
        <div class="container">
            <nav class="mb-4">
                <div class="nav nav-pills" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-cargo-tab" data-bs-toggle="tab" data-bs-target="#nav-cargo"
                        type="button" role="tab" aria-controls="nav-cargo" aria-selected="true">Manual De Funciones</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <!-- Modulo para el manejo de cargos-->
                <div class="tab-pane fade show active" id="nav-cargo" role="tabpanel" aria-labelledby="nav-cargo-tab">
                    <div class="row">
                        <div class="col-12 border rounded p-3">
                            <h5 class="card-title text-center mb-4"><b>Manual de Funciones</b></h5>
                        <div class="col-12">
                            <div class="card mb-4" id="cargosRegistradoss">
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-4"><b>Manual de Funciones Registrados</b></h5>
                                    <div id="cargos"></div>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Modulo para el manejo de cargo-->
            </div>
        </div>
    </main>
    <?php include_once "footer.php" ?>
    <script src="../js/empleado/funciones.js"></script>
</body>
</html>