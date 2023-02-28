<?php

class Login {
    private $IdLogin;    
    private $Usuario;    
    private $Correo;    
    private $Password;  
    public function __construct() {
        
    }
    
    public function getIdLogin() {
        return $this->IdLogin;
    }

    public function getUsuario() {
        return $this->Usuario;
    }

    public function getCorreo() {
        return $this->Correo;
    }

    public function getPassword() {
        return $this->Password;
    }

    public function setIdLogin($IdLogin): void {
        $this->IdLogin = $IdLogin;
    }

    public function setUsuario($Usuario): void {
        $this->Usuario = $Usuario;
    }

    public function setCorreo($Correo): void {
        $this->Correo = $Correo;
    }

    public function setPassword($Password): void {
        $this->Password = $Password;
    }

}
