<?php

class Conexion {

    private $servidor = 'localhost';
    private $usuario = 'root';
    private $clave = '';
    private $bd = 'sistemaderegistro';
    protected $con;

    function __construct() {
        $this->con = new mysqli($this->servidor, $this->usuario, $this->clave,
                $this->bd);
    }

}

