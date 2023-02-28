<?php


class Producto {
    
    private $IdProducto;
    private $Nombre;
    private $Descripcion;
    private $Precio;
    private $Imagen;
    private $IdCategoria;
    public function __construct() {
        
    }

    public function getIdProducto() {
        return $this->IdProducto;
    }

    public function getNombre() {
        return $this->Nombre;
    }

    public function getDescripcion() {
        return $this->Descripcion;
    }

    public function getPrecio() {
        return $this->Precio;
    }

    public function getImagen() {
        return $this->Imagen;
    }

    public function getIdCategoria() {
        return $this->IdCategoria;
    }

    public function setIdProducto($IdProducto): void {
        $this->IdProducto = $IdProducto;
    }

    public function setNombre($Nombre): void {
        $this->Nombre = $Nombre;
    }

    public function setDescripcion($Descripcion): void {
        $this->Descripcion = $Descripcion;
    }

    public function setPrecio($Precio): void {
        $this->Precio = $Precio;
    }

    public function setImagen($Imagen): void {
        $this->Imagen = $Imagen;
    }

    public function setIdCategoria($IdCategoria): void {
        $this->IdCategoria = $IdCategoria;
    }


}
