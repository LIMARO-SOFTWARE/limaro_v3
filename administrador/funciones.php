<!-- Se agrega Head -->
<?php include_once "head.php" ?>
<title>Manual de Funciones</title>

<body class="bg-light d-flex flex-column h-100">
    <!-- se agrega Menu -->
    <?php include_once "menu.php" ?>
    <!-- se Inicia Pagina Inicio  -->
    <main class="flex-shrink-0">
        <div class="container">
            <nav class="">
                <div class="nav nav-pills " id="nav-tab" role="tablist">
                    <button class="nav-link active " id="nav-cargo-tab" data-bs-toggle="tab" data-bs-target="#nav-cargo"
                        type="button" role="tab" aria-controls="nav-cargo" aria-selected="true">Manual De Funciones</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <!-- Modulo para el manejo de cargos-->
                <div class="tab-pane fade show active" id="nav-cargo" role="tabpanel" aria-labelledby="nav-cargo-tab">
                    <div class="row ">
                        <div class="col-md-12 col-xs-12 col-sm-12">
                            <h2 class="card-title text-center"><b>Manual de Funciones</b></h2>
                            <br>
                        </div>
                        <div class="col-md-12 col-xs-12 col-sm-12 bordeado" id="cargosRegistradoss">
                            <h4 class="card-title text-center"><b>Manual de Funciones Registrados</b></h4>
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <br>
                                <h5 id="cargos"></h5>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Fin Modulo para el manejo de cargo-->
            </div>
        </div>
    </main>
    <?php include_once "footer.php" ?>
    <script src="../js/administrador/funciones.js"></script>

</body>

</html>