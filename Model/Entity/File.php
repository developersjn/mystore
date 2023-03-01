<?php

class File {

    private $IdFile;
    private $UrlFoto;

    public function __construct() {
        
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
