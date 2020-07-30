<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <a href="../index.php">HOME</a>
        <form action="" method="POST">
            <h3> REGISTRO </h3>
            <input type="text" name="nombre" placeholder="Nombre"><br>
            <input type="number" name="telefono" placeholder="Telefono"><br>
            <input type="password" name="pass" placeholder="Contraseña"><br>
            <input type="password" name="confirmacionPass" placeholder="Confirmar contraseña"><br>
            <input type="submit" name="registro" value="Regitrarse"><br>
            <label>Ya estás registrado? </label>
            <a href="Login.php">Vuelve al login</a><br>
        </form>
        <?php
        require '../Controlador/ControladorUsuario.php';

        $usuario = new ModeloUsuario();
        $controlador = new ControladorUsuario();

        if (isset($_POST["registro"])) {
            if ($_POST["pass"] == $_POST["confirmacionPass"]) {
                if (!empty($_POST["nombre"]) && !empty($_POST["telefono"]) &&
                        !empty($_POST["pass"]) && !empty($_POST["confirmacionPass"])) {
                    $usuario->setNombre($_POST["nombre"]);
                    $usuario->setTelefono($_POST["telefono"]);
                    $usuario->setPass($_POST["pass"]);
                    
                    $controlador->insertar($usuario);   
                } else {
                    echo 'ERROR';
                }
            } else {
                echo 'Las contraseñas no coinciden';
            }
        }
        ?>
    </body>
</html>

