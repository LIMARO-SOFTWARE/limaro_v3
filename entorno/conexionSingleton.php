<?php

class Conexion extends PDO
{
    public $conn = null;
    private $ultimoId = null;
    private static $instancia = null;

    public function __construct()
    {
        $dsn = 'mysql:dbname=limarocloud_sop;host=localhost;charset=utf8';
        parent::__construct($dsn, 'limarocloud_user', 'iXAlb2OUN0Lk');
        $this->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->setAttribute(PDO::ATTR_EMULATE_PREPARES, false); // Mejor seguridad
    }

    public function ultimoId()
    {
        $sql = "SELECT LAST_INSERT_ID() as lastid";
        $this->ultimoId = $this->query($sql);
        $respuesta = $this->ultimoId->fetchAll(PDO::FETCH_ASSOC);
        return $respuesta[0]['lastid'];
    }

    public static function singleton()
    {
        if (!self::$instancia) {
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    public static function cerrar()
    {
        self::$instancia = null;
    }
}


?>