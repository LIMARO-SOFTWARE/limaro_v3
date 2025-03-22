<?php include_once "head.php" ?>
<title>Perfil</title>
<style>
    .card {
        max-width: 500px;
        margin: 0 auto;
    }
    .input-group {
        flex-wrap: nowrap;
    }
    .input-group-text {
        background-color: transparent;
        border-left: none;
    }
    .form-control:focus {
        box-shadow: none;
        border-color: #ced4da;
    }
    .input-group .form-control:not(:last-child) {
        border-right: none;
    }
    .input-group .form-control:focus + .input-group-text {
        border-color: #ced4da;
    }
    .btn-outline-secondary {
        border: 1px solid #ced4da;
        border-left: none;
    }
    .btn-outline-secondary:hover, .btn-outline-secondary:focus {
        background-color: #f8f9fa;
        border-color: #ced4da;
    }
</style>
</head>
<body class="bg-light d-flex flex-column min-vh-100">
    <?php include_once "menu.php" ?>
    <main class="flex-shrink-0">
        <div class="container py-4">
            <nav class="mb-4">
                <div class="nav nav-pills" id="nav-tab" role="tablist">
                    <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-perfil"
                        type="button" role="tab" aria-controls="nav-home" aria-selected="true">Contraseña</button>
                </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-perfil" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="card shadow">
                        <div class="card-body p-4">
                            <h5 class="card-title text-center mb-4"><b>Actualizar Contraseña</b></h5>
                            <form class="form-group" id="modifClaveUsu" method="POST">
                                <input class="form-control" type="number" name="numIdUsurioMoClave"
                                    id="numIdUsurioMoClave" hidden>
                                <div class="mb-3">
                                    <label for="txtNuevaClaveEmplA" class="form-label"><h5><b>Nueva Contraseña</b></h5></label>
                                    <div class="input-group">
                                        <input class="form-control" type="password"
                                            name="txtNuevaClaveEmplA" id="txtNuevaClaveEmplA"
                                            autocomplete="new-password" aria-label="Nueva contraseña">
                                        <button class="btn btn-outline-secondary" type="button" id="button-addon2"
                                            onclick="mostrarPassword2()">
                                            <i class="fa fa-eye-slash" aria-hidden="true"></i>
                                        </button>
                                    </div>
                                </div>
                                <div class="text-center mt-4">
                                    <button type="submit" id="btnModClavEmpl" class="btn btn-primary btn-lg">
                                        <i class="far fa-edit me-2"></i>Modificar
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
    <script src="../js/empleado/perfil.js"></script>
</body>
</html>