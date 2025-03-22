<!-- Se agrega Head -->
<?php include_once "head.php" ?>
<title>Inicio</title>
</head>

<body class="d-flex flex-column min-vh-100 bg-light">
    <!-- se agrega Menu -->
    <?php include_once "menu.php" ?>
    <!-- se Inicia Pagina Inicio  -->
    <main class="flex-shrink-0 py-4">
        <div class="container">
            <nav>
                <div class="nav nav-pills nav-fill mb-4" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-inicio-tab" data-bs-toggle="tab" data-bs-target="#nav-inicio" type="button" role="tab" aria-controls="nav-inicio" aria-selected="true">Misión y Visión</button>
                    <button class="nav-link" id="nav-politica-tab" data-bs-toggle="tab" data-bs-target="#nav-politica" type="button" role="tab" aria-controls="nav-politica" aria-selected="false">Política y Objetivos de Calidad</button>
                    <button class="nav-link" id="nav-organigrama-tab" data-bs-toggle="tab" data-bs-target="#nav-organigrama" type="button" role="tab" aria-controls="nav-organigrama" aria-selected="false">Organigrama</button>
                    <button class="nav-link" id="nav-mapaProcesos-tab" data-bs-toggle="tab" data-bs-target="#nav-mapaProcesos" type="button" role="tab" aria-controls="nav-mapaProcesos" aria-selected="false">Mapa de Procesos</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-inicio" role="tabpanel" aria-labelledby="nav-inicio-tab">
                    <div class="row gy-4 justify-content-center">
                        <div class="col-md-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3"><b>Misión</b></h5>
                                    <p class="card-text" id="mision"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3"><b>Visión</b></h5>
                                    <p class="card-text" id="vision"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-politica" role="tabpanel" aria-labelledby="nav-politica-tab">
                    <div class="row gy-4 justify-content-center">
                        <div class="col-md-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3"><b>Política de Calidad</b></h5>
                                    <p class="card-text" id="politica"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="card h-100">
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3"><b>Objetivo de Calidad</b></h5>
                                    <p class="card-text" id="objetivo"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-organigrama" role="tabpanel" aria-labelledby="nav-organigrama-tab">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3"><b>Organigrama</b></h5>
                                    <img id="organigrama" class="img-fluid rounded mx-auto d-block zoom" alt="Organigrama de la empresa">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="nav-mapaProcesos" role="tabpanel" aria-labelledby="nav-mapaProcesos-tab">
                    <div class="row justify-content-center">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title text-center mb-3"><b>Mapa de Procesos</b></h5>
                                    <img id="mapaProcesos" class="img-fluid rounded mx-auto d-block zoom" alt="Mapa de procesos de la empresa">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <?php include_once "footer.php" ?>
    <script src="../js/empleado/inicio.js"></script>
</body>
</html>