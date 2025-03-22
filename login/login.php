<!DOCTYPE html>
<html lang="en" class="h-100">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/buttons/2.2.2/js/dataTables.buttons.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
<script src="https://cdn.datatables.net/colreorder/1.5.6/js/dataTables.colReorder.min.js"></script>
<link rel="stylesheet" href="https://cdn.datatables.net/colreorder/1.5.6/css/colReorder.dataTables.min.css">
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <script type="text/javascript" language="javascript" src="../js/proyecto/global.js"></script>
    <script type="text/javascript" language="javascript" src="../js/Login/logueo.js"></script>
    
    <style>
        .container1 {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            padding: 20px;
        }
        .cardIndex {
            width: 100%;
            max-width: 500px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
            background-color: #fff;
        }
        @media (max-width: 768px) {
            .cardIndex {
                padding: 15px;
            }
        }
    </style>
    <title>Iniciar Sesión</title>
</head>
<body class="bg-light d-flex flex-column h-100">    
    <main class="flex-shrink-0">
        <div class="container1">
            <div class="cardIndex">
                <h1 class="card-title text-center mb-4">INICIAR SESIÓN</h1>
                <div class="text-center mb-4">
                    <i class="fas fa-user-circle fa-5x"></i>
                </div>
                <form class="form-group" id="LoginF">
                    <div class="mb-3">
                        <label for="txtUsuario" class="form-label">Usuario</label>
                        <input class="form-control form-control-lg bg-light" type="text" placeholder="Usuario" id="txtUsuario" name="txtUsuario">
                    </div>
                    <div class="mb-3">
                        <label for="txtClave" class="form-label">Contraseña</label>
                        <div class="input-group">
                            <input class="form-control form-control-lg bg-light login" type="password" autocomplete="off" placeholder="Contraseña" id="txtClave" name="txtClave" pattern="[A-Z]{1}[0-9]{2}" maxlength="50">
                            <button id="show_password" class="btn btn-primary" type="button" onclick="mostrarPassword1()">
                                <span class="fa fa-eye-slash icons"></span>
                            </button>
                        </div>
                    </div>
                    <div class="d-grid gap-2">
                        <button class="btn btn-primary btn-lg" type="button" id="btnLogin">Iniciar Sesión</button>
                        <button class="btn btn-primary btn-lg" type="button" data-bs-toggle="modal" data-bs-target="#exampleModal">Activar Usuario</button>
                    </div>
                </form>
                <div class="text-muted text-center mt-3">
                    <small>En caso de Olvido de la Contraseña Comuníquese con el Administrador del Sitio</small>
                </div>
            </div>
        </div>
        
        <!-- Modal Activar Usuario -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Activar Usuario</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form class="row g-3 form-group" id="actUsu" method="POST">
                        <div class="modal-body">
                            <div class="col-md-12 col-xs-12 col-sm-12">
                                <h5>Usuario</h5>
                                <input class="form-control" type="text" name="txtUsuarioAct" id="txtUsuarioAct"
                                    autocomplete="off" aria-label="E" aria-describedby="basic-addon1">
                                <h5>Nueva Contraseña</h5>
                                <input class="form-control" type="password" name="txtClaveAct" id="txtClaveAct"
                                    autocomplete="off" aria-label="E" aria-describedby="basic-addon1">
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" id="btnActUsu" class="btn btn-primary"><i class="far fa-edit"></i>
                                Modificar</button>
                            <button type="button" class="btn btn-primary" data-bs-dismiss="modal"><i
                                    class="fas fa-undo"></i> Volver</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </main>
    
    <?php include_once "footer.frm.php" ?>
    
    <script src="../js/Login/login.js"></script>
</body>
</html>