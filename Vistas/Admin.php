<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="../index.php">HOME</a>
        <form action="" method="POST">
            <h3> ADMIN </h3>
            <label> Mostrar usuario registrados</label>
            <input type="submit" name="buscar" value="Buscar"><br>
            <input type="number" name="id" placeholder="id">
            <input type="submit" name="borrar" value="Borrar"><br>
        </form>
        <?php
        require_once  '../Controlador/ControladorUsuario.php';

        $controlador = new ControladorUsuario();
        //$controlador = ControladorUsuario::obtenerInstancia();

        if (isset($_POST["buscar"])) {
            $controlador->buscar();
        }

        if (isset($_POST["borrar"])) {
            $controlador->eliminar($_POST["id"]);
            echo 'Usuario [', $_POST["id"],'] eliminado correctamente' ;
        }
        ?>
    </body>
</html>
