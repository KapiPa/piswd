<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="post">
        <label for="usuario">
            <p>usuario</p>
            <input type="text" name="usuario" id="usuario">
        </label>
        <label for="contrasena">
            <p>contraseña</p>
            <input type="password" name="contrasena" id="contrasena">
        </label>
        <label for="enviar">
        <input type="submit" value="LOGUEARSE" name="enviar">
        </label>
    </form>
    <?php
        if(isset($_POST['enviar'])){
            $nom=$_POST['usuario'];
            $con=$_POST['contrasena'];
            if($nom == "Kapi" && $con == "palito"){
                echo "<meta http-equiv='refresh' content='0; url=./nosotros.php' />";
            }
            else{
                ?>
                    <p>no ingreso el usuario o contraseña correctos</p>
                <?php
            }
        }
    ?>
</body>
</html>