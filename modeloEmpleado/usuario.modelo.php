<?php
namespace modelo;
use PDO;
use Exception;
include_once '../entidadEmpleado/usuario.entidad.php';
include_once '../entorno/conexionSingleton.php';

class Usuario {
    private $id_empleado;
    private $nombre_completo;
    private $img_empleado;
    private $correo_empleado;
    private $id_cargo;
    private $id_empresa;
    private $estado_empleado;
    private $id_usuario;
    private $usuario;
    private $clave;
    private $id_rol;
    private $estado;
    
    private $conexion;

    public function __construct(\entidad\Usuario $usuarioE) {
        $this->id_empleado = $usuarioE->getIdEmpleado();
        $this->nombre_completo = $usuarioE->getNombreCompleto();
        $this->img_empleado = $usuarioE->getImgEmpleado();
        $this->correo_empleado = $usuarioE->getCorreoEmpleado();
        $this->id_cargo = $usuarioE->getIdCargo();
        $this->id_empresa = $usuarioE->getIdEmpresa();
        $this->estado_empleado = $usuarioE->getEstadoEmpleado();
        $this->id_usuario = $usuarioE->getIdUsuario();
        $this->usuario = $usuarioE->getUsuario();
        $this->clave = $usuarioE->getClave();
        $this->id_rol = $usuarioE->getIdRol();
        $this->estado = $usuarioE->getEstado();
        $this->conexion = \Conexion::singleton();
    }

    public function newpass() {
        try {
            $sql = "UPDATE usuario SET clave = AES_ENCRYPT(:clave, 'kddbjw8b3d') WHERE id_usuario = :id_usuario";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':clave', $this->clave, PDO::PARAM_STR);
            $stmt->bindParam(':id_usuario', $this->id_usuario, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            // Consider logging the error here
            throw new Exception("Error updating password: " . $e->getMessage());
        }
    }

    public function updateImg() {
        try {
            $sql = "UPDATE empleado SET img_empleado = :img_empleado WHERE id_empleado = :id_empleado";
            $stmt = $this->conexion->prepare($sql);
            $stmt->bindParam(':img_empleado', $this->img_empleado, PDO::PARAM_STR);
            $stmt->bindParam(':id_empleado', $this->id_empleado, PDO::PARAM_INT);
            $stmt->execute();
            return true;
        } catch (Exception $e) {
            // Consider logging the error here
            throw new Exception("Error updating image: " . $e->getMessage());
        }
    }
}
?>