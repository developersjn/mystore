<?php

require "../ConexionDB/Conexion.php";
require "../Entity/Producto.php";

class ProductoDao {

    private static $con;

    function ProductoDAO() {
        self::$con = Conexion::saberEstado();
    }

    public function Create(Producto $objProducto) {
        $create = "call SP_InsertProducto(?,?,?,?,?)";
        try {
            $stmt = self::$con->getCon()->prepare($create);
            $stmt->bind_param('sssss',
                    $objProducto->getNombre(),
                    $objProducto->getDescripcion(),
                    $objProducto->getPrecio(),
                    $objProducto->getImagen(),
                    $objProducto->getIdCategoria());
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

    public function Delete(Producto $objProducto) {
        $delete = "call SP_DeleteProduct(?)";
        try {
            $stmt = self::$con->getCon()->prepare($delete);
            $stmt->bind_param('s', $objProducto->getIdProducto());
            //$stmt->execute();
            if (!$stmt->execute()) {
                echo 'error al eliminar datos';
            } else {
                echo 'DATOS BORRADOS...';
            }
        } catch (Exception $ex) {
            echo 'error: ' . $ex->getMessage();
        } finally {
            self::$con->cerrarConexion();
        }
    }

    public function Find(Producto $objProducto) {
        $find = "call SP_FindProduct(?)";
        $stmt = self::$con->getCon()->prepare($find);
        $stmt->bind_param('s', $objProducto->getIdProducto());
        $stmt->execute();
        $result = $stmt->get_result();
        while ($row = $result->fetch_assoc()) {
            $objProducto->setIdProducto($row['IdProducto']);
            $objProducto->setNombre($row['Nombre']);
            $objProducto->setDescripcion($row['Descripcion']);
            $objProducto->setPrecio($row['Precio']);
            $objProducto->setImagen($row['Imagen']);
            $objProducto->setIdCategoria($row['IdCategoria']);
        }
        $stmt->close();
        return $objProducto;
    }

    public function FindAll() {
        $SQL_READALL = "call SP_FindAllProduct()";
        $result = self::$con->getCon()->query($SQL_READALL);
        self::$con->cerrarConexion();
        $listaProducto = array();
        while ($row = mysqli_fetch_assoc($result)) {
            $objProducto = new Producto();
            $objProducto->setIdProducto($row['IdProducto']);
            $objProducto->setNombre($row['Nombre']);
            $objProducto->setDescripcion($row['Descripcion']);
            $objProducto->setPrecio($row['Precio']);
            $objProducto->setImagen($row['Imagen']);
            $objProducto->setIdCategoria($row['IdCategoria']);
            $listaProducto[] = $objProducto;
        }

        return $listaProducto;
    }

    public function Update(Producto $objProducto) {
        $create = "call SP_UpdateProducto(?,?,?,?,?,?)";
        try {
            $stmt = self::$con->getCon()->prepare($create);
            $stmt->bind_param('ssssss',
                    $objProducto->getIdProducto(),
                    $objProducto->getNombre(),
                    $objProducto->getDescripcion(),
                    $objProducto->getPrecio(),
                    $objProducto->getImagen(),
                    $objProducto->getIdCategoria());
            //$stmt->execute();
            if (!$stmt->execute()) {
                echo 'error al Actualizar  datos';
            } else {
                echo 'DATOS ACTUALIZADOS...';
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
