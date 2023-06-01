<?php

require "../../Model/ConexionDB/Conexion.php";
require "../../Model/Entity/Producto.php";

class ProductoDao {

    private static $con;

    function __construct() {
        self::$con = Conexion::saberEstado();
    }

    public function Create(Producto $objProducto) {
        $create = "call SP_InsertProducto(?,?,?,?,?)";
        $Nombre=$objProducto->getNombre();
        $Descripcion=$objProducto->getDescripcion();
        $Precio=$objProducto->getPrecio();
        $IdCategoria=$objProducto->getIdCategoria();
        $ImagenPortada=$objProducto->getImagenPortada();
        try {
            $stmt = self::$con->getCon()->prepare($create);
            $stmt->bind_param('sssss',$Nombre,$Descripcion,$Precio,$IdCategoria,$ImagenPortada);
            //$stmt->execute();
            if (!$stmt->execute()) {
                echo 'error al insertar datos';
            } else {
                $result=$stmt->get_result();
                $objeto=$result->fetch_object();
                $IdProductoRegistrado=$objeto->IdProductoRegistrado;
                 
            }
        } catch (Exception $ex) {
            echo 'error: ' . $ex->getMessage();
        } finally {
            $stmt->close();
            self::$con->cerrarConexion();
        }

        return $IdProductoRegistrado;
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
            $objProducto->setImagenPortada($row['ImagenPortada']);
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
            $objProducto->setImagenPortada($row['ImagenPortada']);
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
                    $objProducto->getIdCategoria(),
                    $objProducto->getImagenPortada());
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
