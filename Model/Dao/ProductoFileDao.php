<?php
require "../ConexionDB/Conexion.php";
require "../Entity/ProductoFile.php";
class ProductoFileDao {

    public function Create(ProductoFile $objProductoFile) {
        $create = "call SP_InsertProductoFile(?,?)";
        try {
            $stmt = self::$con->getCon()->prepare($create);
            $stmt->bind_param('s', $objProductoFile->getIdProducto());
            $stmt->bind_param('s', $objProductoFile->getIdFile());
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
