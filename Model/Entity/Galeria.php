<?php

class Galeria {

    private $IdFile;
    private $UrlFoto;
    private $IdProducto;

    public function __construct() {
        
    }
    public function getIdProducto() {
        return $this->IdProducto;
    }

    public function setIdProducto($IdProducto): void {
        $this->IdProducto = $IdProducto;
    }

        public function getIdFile() {
        return $this->IdFile;
    }

    public function getUrlFoto() {
        return $this->UrlFoto;
    }

    public function setIdFile($IdFile): void {
        $this->IdFile = $IdFile;
    }

    public function setUrlFoto($UrlFoto): void {
        $this->UrlFoto = $UrlFoto;
    }

}
