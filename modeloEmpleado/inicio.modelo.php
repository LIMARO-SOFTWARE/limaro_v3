<?php
namespace modelo;

use PDO;
use Exception;

include_once '../entidadEmpleado/inicio.entidad.php';
include_once '../entorno/conexionSingleton.php';

class Inicio {
    private $id_empresa;
    private $nombre_empresa;
    private $logo;
    private $mision;
    private $vision;
    private $politica_calidad;
    private $objetivos_calidad;
    private $organigrama;
    
    private $conexion;

    public function __construct(\entidad\Inicio $inicioE) {
        $this->id_empresa = $inicioE->getIdEmpresa();
        $this->nombre_empresa = $inicioE->getNombreEmpresa();
        $this->logo = $inicioE->getLogo();
        $this->mision = $inicioE->getMision();
        $this->vision = $inicioE->getVision();
        $this->politica_calidad = $inicioE->getPoliticaCalidad();
        $this->objetivos_calidad = $inicioE->getObjetivosCalidad();
        $this->organigrama = $inicioE->getOrganigrama();
        $this->conexion = \Conexion::singleton();
    }

    public function read() {
        try {
            $sql = "SELECT * FROM empresa";
            $stmt = $this->conexion->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (Exception $e) {
            // Consider logging the error here
            throw new Exception("Error reading from database: " . $e->getMessage());
        }
    }
}
?>