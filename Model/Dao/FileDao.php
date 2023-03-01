<?php
require "../ConexionDB/Conexion.php";
require "../Entity/File.php";

class FileDao {
    //put your code here
    public function Create(File $objFile) {
        $create = "call SP_InsertFile(?)";
        try {
            $stmt = self::$con->getCon()->prepare($create);
            $stmt->bind_param('s',$objFile->getUrlFoto());
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
