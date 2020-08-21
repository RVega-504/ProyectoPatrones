<?php
require_once 'Conexion.php';
require_once '../Modelo/ModeloUsuario.php';

class ControladorUsuario extends Conexion {
    
    function __construct() {
        parent::__construct();
    }

    function insertar($usuario) {
        $sentencia = $this->con->prepare("INSERT INTO usuario (nombre, telefono, pass) VALUES(?,?,?)");

        $nombre = $usuario->getNombre();
        $telefono = $usuario->getTelefono();
        $pass = $usuario->getPass();

        $sentencia->bind_param("sis", $nombre, $telefono, $pass);
        $sentencia->execute();
    }

    public function buscar() {
        $sentencia = $this->con->prepare("SELECT * FROM usuario");

        $id = "";
        $nombre = "";
        $telefono = 0;
        $pass = "";

        $sentencia->bind_result($id, $nombre, $telefono, $pass);
        $sentencia->execute();

        while ($sentencia->fetch()) {
            echo $id, ' - ', $nombre, ' - ', $telefono, ' - ', $pass, '<br>';
        }
    }

    public function eliminar($id) {
        $sentencia = $this->con->prepare("DELETE FROM usuario WHERE (id) = '$id'");
        $sentencia->execute();
    }

    public function validarLogin($nombre, $pass) {
        $sentencia = $this->con->prepare("SELECT * FROM usuario WHERE (nombre) = '$nombre' AND (pass) = '$pass'");
        $sentencia->execute();
        $sentencia->store_result();

        if ($sentencia->num_rows()) {
            return true;
        } else {
            return false;
        }
    }
}
