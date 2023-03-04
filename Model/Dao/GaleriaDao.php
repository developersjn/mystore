<?php
require "Model/ConexionDB/Conexion.php";
require "Model/Entity/Galeria.php";

class GaleriaDao {
    //put your code here
    private static $con;

    function __construct() {
        self::$con = Conexion::saberEstado();
    }
    public function Create(Galeria $objGaleria) {
        $create = "call SP_InsertFile(?,?)";
        try {
            $stmt = self::$con->getCon()->prepare($create);
            $stmt->bind_param('ss',$objGaleria->getUrlFoto(),$objGaleria->getIdProducto());
            //$stmt->execute();
            if (!$stmt->execute()) {
                echo 'error al insertar datos';
            } else {
                echo 'DATOS GUARDADOS...';
            }
        } catch (Exception $ex) {
            echo 'error: ' . $ex->getMessage();
        } finally {
            $stmt->close();
            self::$con->cerrarConexion();
        }

        return;
    }
}
