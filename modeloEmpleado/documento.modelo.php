<?php
namespace modelo;

use PDO;
use Exception;

include_once '../entidadEmpleado/documento.entidad.php';
include_once '../entorno/conexionSingleton.php';

class Documento {
    private $id_documento;
    private $id_tipo_documento;
    private $id_proceso;
    private $codigo;
    private $nombre_documento;
    private $id_versionamiento;
    private $numero_version;
    private $descripcion_version;
    private $usuario_creacion;
    private $fecha_creacion;
    private $usuario_revision;
    private $fecha_revision;
    private $usuario_aprobacion;
    private $fecha_aprobacion;
    private $documento;
    private $estado;
    
    private $conexion;

    public function __construct(\entidad\documento $documentoE) {
        $this->id_documento = $documentoE->getIdDocumento();
        $this->id_tipo_documento = $documentoE->getIdTipoDocumento();
        $this->id_proceso = $documentoE->getIdProceso();
        $this->codigo = $documentoE->getCodigo();
        $this->nombre_documento = $documentoE->getNombreDocumento();
        $this->id_versionamiento = $documentoE->getIdVersionamiento();
        $this->numero_version = $documentoE->getNumeroVersion();
        $this->descripcion_version = $documentoE->getDescripcionVersion();
        $this->usuario_creacion = $documentoE->getUsuarioCreacion();
        $this->fecha_creacion = $documentoE->getFechaCreacion();
        $this->usuario_revision = $documentoE->getUsuarioRevision();
        $this->fecha_revision = $documentoE->getFechaRevision();
        $this->usuario_aprobacion = $documentoE->getUsuarioAprobacion();
        $this->fecha_aprobacion = $documentoE->getFechaAprobacion();
        $this->documento = $documentoE->getDocumento();
        $this->estado = $documentoE->getEstado();
        $this->conexion = \Conexion::singleton();
    }

    /**
     * Realiza la consulta de los documentos vigentes para mostrar en la vistaEmpleado/consultas.frm.php
     *
     * @return array|string Array of documents or error message
     */
    public function read() {
        try {
            $sql = "SELECT 
                doc.`id_documento`,
                mpr.`macroproceso`,
                doc.`codigo`,
                doc.`nombre_documento`,
                pr.`id_proceso`,
                pr.`proceso`,
                pr.`objetivo`,
                pr.`sigla_proceso`,
                tdoc.`id_tipo_documento`,
                tdoc.`tipo_documento`,
                tdoc.`sigla_tipo_documento`,
                vr.`id_versionamiento`,
                vr.`numero_version`,
                vr.`documento`,
                vr.`descripcion_version`,
                vr.`fecha_aprobacion`,
                vr.`estado_version`
            FROM documento AS doc
            INNER JOIN tipo_documento AS tdoc ON doc.`id_tipo_documento` = tdoc.`id_tipo_documento`
            INNER JOIN proceso AS pr ON doc.`id_proceso` = pr.`id_proceso`
            INNER JOIN macroproceso AS mpr ON pr.`id_macroproceso` = mpr.`id_macroproceso`
            INNER JOIN versionamiento AS vr ON doc.`id_documento` = vr.`id_documento`
            WHERE vr.`estado_version` = :estado
            ORDER BY LENGTH(doc.`codigo`), codigo";

            $stmt = $this->conexion->prepare($sql);
            $stmt->bindValue(':estado', 'VIGENTE', PDO::PARAM_STR);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            // Log the error here
            throw new Exception("Error reading documents: " . $e->getMessage());
        }
    }
}
?>