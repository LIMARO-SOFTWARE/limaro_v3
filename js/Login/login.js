$(document).ready(function () {
    // Constantes para mensajes y configuraciones
    const SWEET_ALERT_CONFIG = {
        showConfirmButton: false,
        timer: 2500
    };

    const MESSAGES = {
        EMPTY_FIELDS: '¡Campo usuario y contraseña vacío!',
        EMPTY_USER: '¡Campo usuario vacío!',
        EMPTY_PASSWORD: '¡Campo contraseña vacío!',
        INVALID_CREDENTIALS: '¡Usuario o contraseña incorrecta!',
        USER_NOT_ACTIVE: '¡Usuario No Activo!',
        USER_DISABLED: '¡Usuario Inhabilitado!',
        ROLE_DISABLED: '¡Rol Inhabilitado!',
        INVALID_FORM: '¡Por favor Ingrese La Información Correcta!',
        USER_ACTIVATED: 'Usuario Activado con Exito... Por Favor Inicie Sesion',
        USER_ALREADY_ACTIVE: 'Usuario ya se encuentra Activo o esta Inhabilitado',
        COMPLETE_FORM: 'Digite los campos completos del formulario'
    };

    const REDIRECTS = {
        1: "../administrador/inicio.php",
        2: "../empleado/inicio.php",
        3: "../visitante/inicio.php",
        login: "../login/login.php"
    };

    // Función para mostrar alertas
    function showAlert(icon, title, redirect = null) {
        Swal.fire({
            icon,
            title,
            ...SWEET_ALERT_CONFIG
        }).then(() => {
            if (redirect) {
                window.location = redirect;
            }
        });
    }

    // Función para validar campos vacíos
    function validateFields() {
        const usuario = $('#txtUsuario').val();
        const clave = $('#txtClave').val();

        if (!usuario && !clave) {
            showAlert('error', MESSAGES.EMPTY_FIELDS);
            return false;
        }
        if (!usuario) {
            showAlert('error', MESSAGES.EMPTY_USER);
            return false;
        }
        if (!clave) {
            showAlert('error', MESSAGES.EMPTY_PASSWORD);
            return false;
        }
        return true;
    }

    // Manejador del login
    function handleLoginResponse(response) {
        const data = JSON.parse(response);
        
        if (!data[0]) {
            showAlert('error', MESSAGES.INVALID_CREDENTIALS);
            return;
        }

        const { estadoUsuario, rolEstado, id_rol, nombre_completo } = data[0];

        switch(estadoUsuario) {
            case "ACTIVO":
                if (REDIRECTS[id_rol]) {
                    showAlert('success', `Te damos la bienvenida ${nombre_completo}`, REDIRECTS[id_rol]);
                }
                break;
            case "CREADO":
                showAlert('error', MESSAGES.USER_NOT_ACTIVE);
                break;
            case "INACTIVO":
                showAlert('error', MESSAGES.USER_DISABLED);
                break;
            default:
                if (rolEstado === "INACTIVO") {
                    showAlert('error', MESSAGES.ROLE_DISABLED);
                }
        }
    }

    // Event Listener para el botón de login
    $('#btnLogin').click(function(e) {
        e.preventDefault();
        
        if (!validateFields()) return;

        $.ajax({
            url: '../controladorLogin/login.read.php',
            type: 'POST',
            data: $('#LoginF').serialize(),
            success: handleLoginResponse,
            error: () => showAlert('error', MESSAGES.INVALID_FORM)
        });
    });

    // Event Listener para activación de usuario
    $('#btnActUsu').click(function(e) {
        e.preventDefault();
        
        $.ajax({
            url: '../controladorLogin/clave.update.php',
            type: 'POST',
            dataType: 'json',
            data: $('#actUsu').serialize(),
            success: function(response) {
                const message = response === '1' ? 
                    MESSAGES.USER_ACTIVATED : 
                    MESSAGES.USER_ALREADY_ACTIVE;
                    
                showAlert(response === '1' ? 'success' : 'error', message, REDIRECTS.login);
            },
            error: () => showAlert('error', MESSAGES.COMPLETE_FORM, REDIRECTS.login)
        });
    });
});