<?php

//require "../Model/ConexionDB/Conexion.php";
require "../Model/Entity/Galeria.php";

class GaleriaDao {

    //put your code here
    private static $con;

    function __construct() {
        self::$con = Conexion::saberEstado();
    }

    public function CreateWithProcedure(Galeria $objGaleria) {
        $create = "call SP_InsertGaleria(?,?)";
        $UrlFoto=$objGaleria->getUrlFoto();
        $IdProducto=$objGaleria->getIdProducto();
        try {
            $stmt = self::$con->getCon()->prepare($create);
            $stmt->bind_param('ss',$UrlFoto,$IdProducto);
            if (!$stmt->execute()) {
                echo 'error al insertar datos';
            } else {
//                $result=$stmt->get_result();//obtenemos el resultado devuelto por SP
//                $object=$result->fetch_object();//convertimos a objeto
//                $IdGaleriaRegistrada=$object->IdGaleriaRegistrado;//sacamos del objto el valor
//                echo 'GALERIA '.$IdGaleriaRegistrada." REGISTRADA";
                return "exito";
            }
        } catch (Exception $ex) {
            echo 'error: ' . $ex->getMessage();
        } finally {
            $stmt->close();
            self::$con->cerrarConexion();
        }

        return;
    }
    public function CreateProcedureQuery(Galeria $objGaleria) {
        
        $UrlFoto=$objGaleria->getUrlFoto();
        $IdProducto=$objGaleria->getIdProducto();
        $create = "call SP_InsertGaleria('{$UrlFoto}','{$IdProducto}')";
        try {
            $stmt = self::$con->getCon()->query($create);
            var_dump($stmt->fetch_object());
            
        } catch (Exception $ex) {
            echo 'error: ' . $ex->getMessage();
        } finally {
            $stmt->close();
            self::$con->cerrarConexion();
        }

        return;
    }
    public function Create(Galeria $objGaleria) {
        $create = "insert into galeria(UrlFoto,IdProducto)values(?,?)";
        $UrlFoto=$objGaleria->getUrlFoto();
        $IdProducto=$objGaleria->getIdProducto();
        try {
            $stmt = self::$con->getCon()->prepare($create);
            $stmt->bind_param('ss',$UrlFoto,$IdProducto);
            //$stmt->execute();
            if (!$stmt->execute()) {
                echo 'error al insertar datos';
            } else {
                echo 'DATOS GUARDADOS...'.$stmt->insert_id;
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


