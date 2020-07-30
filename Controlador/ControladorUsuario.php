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
        $this->con->query("DELETE FROM usuario WHERE (id) = '$id'");
    }

    /*
      public function validarLogin($nombre, $pass) {
      if($this->con->query("SELECT * FROM usuario WHERE (nombre) = '$nombre' AND (pass) = '$pass'")){
      echo 'usuario válido';
      } else {
      echo 'usuario no válido';
      }
      }
    */
}

