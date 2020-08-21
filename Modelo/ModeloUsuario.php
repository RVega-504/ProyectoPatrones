<?php
class ModeloUsuario {
    
    private $nombre;
    private $telefono;
    private $pass;
    
    function __construct() {
        
    }

    function getNombre() {
        return $this->nombre;
    }

    function getTelefono() {
        return $this->telefono;
    }

    function getPass() {
        return $this->pass;
    }

    function setNombre($nombre): void {
        $this->nombre = $nombre;
    }

    function setTelefono($telefono): void {
        $this->telefono = $telefono;
    }

    function setPass($pass): void {
        $this->pass = $pass;
    }
}

