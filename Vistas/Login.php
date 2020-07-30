<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="../index.php">HOME</a>
        <form action="" method="POST">
            <h3> LOGIN </h3>
            <input type="text" name="nombre" placeholder="Nombre"><br>
            <input type="password" name="pass" placeholder="Contraseña"><br>
            <input type="submit" name="ingresar" value="Ingresar"><br>
            <label>No estás registrado? </label>
            <a href="Registro.php">Registrate</a><br>
        </form>
        <?php
        /*
        require_once '../Controlador/ControladorUsuario.php';
        
        $controlador = new ControladorUsuario();
        
        if(isset($_POST["ingresar"])){
            $controlador->validarLogin($_POST["nombre"], $_POST["pass"]);
        }
        */
        ?>
    </body>
</html>

