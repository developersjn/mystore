<?php

class ProductoFile {

    private $IdProducto;
    private $IdFile;

    public function __construct() {
        
    }

    public function getIdProducto() {
        return $this->IdProducto;
    }

    public function getIdFile() {
        return $this->IdFile;
    }

    public function setIdProducto($IdProducto): void {
        $this->IdProducto = $IdProducto;
    }

    public function setIdFile($IdFile): void {
        $this->IdFile = $IdFile;
    }

}
