<?php
namespace modelo;

use PDO;
use Exception;

include_once '../entidadEmpleado/solicitudes.entidad.php';
include_once '../entorno/conexionSingleton.php';

class Solicitudes {
    private $id_solicitud;
    private $solicitud;
    private $id_empleado;
    private $prioridad;
    private $id_tipo_documento;
    private $tipo_documento;
    private $estado_solicitud;
    private $tipo_solicitud;
    private $documento;
    private $codigo;
    private $ruta;
    private $funcionario_asignado;
    private $id_comentarios_solicitud;
    private $comentario;
    private $usuario_comentario;
    private $fecha_comentario;

    private $conexion;

    public function __construct(\entidad\Solicitudes $solicitudesE) {
        $this->id_solicitud = $solicitudesE->getIdSolicitud();
        $this->solicitud = $solicitudesE->getSolicitud();
        $this->id_empleado = $solicitudesE->getIdEmpleado();
        $this->prioridad = $solicitudesE->getPrioridad();
        $this->id_tipo_documento = $solicitudesE->getIdTipoDocumento();
        $this->tipo_documento = $solicitudesE->getTipoDocumento();
        $this->estado_solicitud = $solicitudesE->getEstadoSolicitud();
        $this->tipo_solicitud = $solicitudesE->getTipoSolicitud();
        $this->documento = $solicitudesE->getDocumento();
        $this->codigo = $solicitudesE->getCodigo();
        $this->ruta = $solicitudesE->getRuta();
        $this->funcionario_asignado = $solicitudesE->getFuncionarioAsignado();
        $this->id_comentarios_solicitud = $solicitudesE->getIdComentariosSolicitud();
        $this->comentario = $solicitudesE->getComentario();
        $this->usuario_comentario = $solicitudesE->getUsuarioComentario();
        $this->fecha_comentario = $solicitudesE->getFechaComentario();

        $this->conexion = \Conexion::singleton();
    }

    /**
     * Realiza la consulta de las solicitudes creadas por el usuario vigentes para mostrar en la vistaEmpleado/consultas.frm.php
     *
     * @return array|string Array of solicitudes or error message
     */
    public function read() {
        try {
            $sql = "SELECT
                sl.`id_solicitud`,
                sl.`prioridad`,
                sl.`tipo_solicitud`,
                td.`tipo_documento`,
                sl.`codigo_documento`,
                sl.`solicitud`,
                sl.`fecha_solicitud`,
                sl.`fecha_asignacion`,
                sl.`documento`,
                sl.`funcionario_asignado`,
                sl.`estado_solicitud`,
                sl.`ruta`
            FROM solicitud AS sl
            INNER JOIN tipo_documento AS td ON sl.`id_tipo_documento` = td.`id_tipo_documento`
            WHERE sl.`id_empleado` = :id_empleado";

            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':id_empleado', $this->id_empleado, PDO::PARAM_INT);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception("Error reading solicitudes: " . $e->getMessage());
        }
    }

    public function tipoDocumento() {
        try {
            $sql = "SELECT * FROM tipo_documento";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception("Error fetching documento types: " . $e->getMessage());
        }
    }

    public function solicitudCreacion() {
        return $this->createSolicitud('CREACION', '0000');
    }

    public function solicitudActualizacion() {
        return $this->createSolicitud('ACTUALIZACION', $this->codigo);
    }

    public function solicitudEliminacion() {
        return $this->createSolicitud('ELIMINACION', $this->codigo);
    }

    private function createSolicitud($tipo, $codigo) {
        try {
            $sql = "CALL create_comentario_sol(1, :id_empleado, :prioridad, :id_tipo_documento, :tipo, 'CREADA', :codigo,
                :solicitud, :ruta, :documento, CURRENT_TIMESTAMP(),
                'Sin Asignar', NULL, NULL, NULL, '1', 'Se crea la solicitud', :usuario_comentario, CURRENT_TIMESTAMP(), 'ACTIVO')";
            
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':id_empleado', $this->id_empleado, PDO::PARAM_INT);
            $stmt->bindParam(':prioridad', $this->prioridad, PDO::PARAM_STR);
            $stmt->bindParam(':id_tipo_documento', $this->id_tipo_documento, PDO::PARAM_INT);
            $stmt->bindParam(':tipo', $tipo, PDO::PARAM_STR);
            $stmt->bindParam(':codigo', $codigo, PDO::PARAM_STR);
            $stmt->bindParam(':solicitud', $this->solicitud, PDO::PARAM_STR);
            $stmt->bindParam(':ruta', $this->ruta, PDO::PARAM_STR);
            $stmt->bindParam(':documento', $this->documento, PDO::PARAM_STR);
            $stmt->bindParam(':usuario_comentario', $this->usuario_comentario, PDO::PARAM_STR);
            
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception("Error creating $tipo solicitud: " . $e->getMessage());
        }
    }

    public function comentarios() {
        try {
            $sql = "SELECT * FROM solicitud_comentario WHERE id_solicitud = :id_solicitud";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':id_solicitud', $this->id_solicitud, PDO::PARAM_INT);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            throw new Exception("Error fetching comments: " . $e->getMessage());
        }
    }
}
?>