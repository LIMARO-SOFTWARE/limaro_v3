// Funciones de utilidad
const comentario = (codigo) => {
    $("#numIdSolicitud").val(codigo);
};

const actualizacion = (codigo, tipo_documento, id_tipo_documento) => {
    $("#codigo").val(codigo);
    $("#tipoDoc1").val(tipo_documento);
    $("#idTipoDoc1").val(id_tipo_documento);
};

const eliminacion = (codigo, tipo_documento, id_tipo_documento) => {
    $("#codigo2").val(codigo);
    $("#tipoDoc2").val(tipo_documento);
    $("#idTipoDoc2").val(id_tipo_documento);
};

// Contador de caracteres para áreas de texto
$(document).on('input', "textarea[maxlength]", function () {
    const $this = $(this);
    const maxlength = parseInt($this.attr('maxlength'), 10);
    const longitudActual = $this.val().length;
    const caracteresRestantes = maxlength - longitudActual;
    
    $this.prev('label').find('span').text(caracteresRestantes);
    $this.toggleClass("borderojo bordegris", longitudActual >= maxlength);
});

// Función principal
$(document).ready(function() {
    const obtenerDatos = async (url, datos = null) => {
        try {
            const respuesta = await $.ajax({
                url,
                type: 'POST',
                dataType: 'json',
                data: datos
            });
            return respuesta;
        } catch (error) {
            console.error('Error al obtener datos:', error);
            return null;
        }
    };

    const crearTablaData = (idTabla, datos, columnas, columnaAgrupacion = null) => {
        const tabla = $(`#${idTabla}`).DataTable({
            destroy: true,
            data: datos,
            columns: columnas,
            autoWidth: true,
            responsive: true,
            searching: true,
            info: true,
            ordering: true,
            lengthMenu: [[5, 10, 20, 25, 50, 100, -1], [5, 10, 20, 25, 50, "Todos"]],
            language: {"url": "../componente/libreria/idioma/es-mx.json"},
            dom: 'Bflrtip',
            buttons: [
                'pdfHtml5', 'print', 'excelHtml5', 'copyHtml5',
                {
                    extend: 'searchBuilder',
                    config: {
                        depthLimit: 2,
                        columns: [0, 1, 2],
                        conditions: {
                            string: {
                                '!=': null,
                                '!null': null,
                                'null': null,
                                'contains': null,
                                '!contains': null,
                                'ends': null,
                                '!ends': null,
                                'starts': null,
                                '!starts': null
                            }
                        }
                    }
                }
            ]
        });

        if (columnaAgrupacion !== null) {
            tabla.order([columnaAgrupacion, 'asc']).draw();
            tabla.rowGroup({
                dataSrc: columnaAgrupacion
            });
        }
    };

    const cargarSolicitudes = async () => {
        const json = await obtenerDatos('../controladorEmpleado/solicitudes.read.php');
        if (json) {
            const datosTablaSolicitudes = json.map(item => [
                item.id_solicitud,
                item.fecha_solicitud,
                item.prioridad,
                item.estado_solicitud,
                item.tipo_solicitud,
                item.tipo_documento,
                item.codigo_documento !== "0000" ? item.codigo_documento : "No aplica",
                item.solicitud,
                item.funcionario_asignado,
                item.fecha_asignacion || "Sin Asignar",
                `<button type="button" class="btn btn-primary" onclick="comentario(${item.id_solicitud})" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="far fa-comment-dots"></i></button>`
            ]);

            crearTablaData('tableSolicitudes', datosTablaSolicitudes, [
                { title: "CÓDIGO SOLICITUD" },
                { title: "FECHA DE LA SOLICITUD" },
                { title: "PRIORIDAD" },
                { title: "ESTADO DE LA SOLICITUD" },
                { title: "TIPO DE SOLICITUD" },
                { title: "TIPO DE DOCUMENTO" },
                { title: "CÓDIGO DE DOCUMENTO" },
                { title: "DESCRIPCIÓN DE LA SOLICITUD" },
                { title: "ASIGNADO A" },
                { title: "FECHA DE ASIGNACIÓN" },
                { title: "COMENTARIOS" }
            ], 2);
        }
    };

    const cargarComentarios = async () => {
        const json = await obtenerDatos('../controladorEmpleado/solicitudes.comentarios.read.php', $('#buscar').serialize());
        if (json) {
            if (json === 0) {
                $('#comentarios').html("<h5>Aún no hay comentarios</h5>");
            } else {
                const datosTablaComentarios = json.map(item => [
                    item.fecha_comentario,
                    item.usuario_comentario,
                    item.comentario
                ]);

                crearTablaData('tableComentarios', datosTablaComentarios, [
                    { title: "FECHA COMENTARIO" },
                    { title: "USUARIO" },
                    { title: "COMENTARIO" }
                ]);
            }
        }
    };

    const cargarTipoDocumento = async () => {
        const json = await obtenerDatos('../controladorEmpleado/solicitudes.tipoDocumento.read.php');
        if (json) {
            const opciones = json.map(item => `<option value="${item.id_tipo_documento}">${item.tipo_documento}</option>`);
            $('#tipoDocumento').html('<option disabled selected> - Seleccione Un Tipo De Documento -</option>' + opciones.join(''));
        }
    };

    const cargarDocumentos = async () => {
        const json = await obtenerDatos('../controladorEmpleado/documento.read.php');
        if (json) {
            const datosTablaActualizar = json.map(item => [
                item.macroproceso,
                item.proceso,
                item.tipo_documento,
                `${item.codigo} ${item.nombre_documento}`,
                item.numero_version,
                item.fecha_aprobacion,
                `<button type="button" class="btn btn-primary" onclick="actualizacion('${item.codigo}','${item.tipo_documento}',${item.id_tipo_documento})" data-bs-toggle="modal" data-bs-target="#exampleModal1"><i class="fas fa-file-signature"></i></button>`
            ]);

            const datosTablaEliminar = json.map(item => [
                item.macroproceso,
                item.proceso,
                item.tipo_documento,
                `${item.codigo} ${item.nombre_documento}`,
                item.numero_version,
                item.fecha_aprobacion,
                `<button type="button" class="btn btn-danger" onclick="eliminacion('${item.codigo}','${item.tipo_documento}',${item.id_tipo_documento})" data-bs-toggle="modal" data-bs-target="#exampleModal2"><i class="fas fa-trash-alt"></i></button>`
            ]);

            crearTablaData('tablaActualizar', datosTablaActualizar, [
                { title: "MACROPROCESO" },
                { title: "PROCESO" },
                { title: "TIPO DOCUMENTO" },
                { title: "CÓDIGO Y NOMBRE DEL DOCUMENTO" },
                { title: "VERSIÓN" },
                { title: "FECHA DE VIGENCIA" },
                { title: "SOLICITAR ACTUALIZACIÓN" }
            ], 1);

            crearTablaData('tablaEliminar', datosTablaEliminar, [
                { title: "MACROPROCESO" },
                { title: "PROCESO" },
                { title: "TIPO DOCUMENTO" },
                { title: "CÓDIGO Y NOMBRE DOCUMENTO" },
                { title: "VERSIÓN" },
                { title: "FECHA DE VIGENCIA" },
                { title: "SOLICITAR ELIMINACIÓN" }
            ], 1);
        }
    };

    // Carga inicial
    cargarSolicitudes();
    cargarTipoDocumento();
    cargarDocumentos();

    // Manejadores de eventos
    $(document).on('click', '#btnVerComentarios', cargarComentarios);
});