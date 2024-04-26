<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css.css">
</head>
<body>
    <header><h1>Formulario de registro</h1></header>
    <main>
    <form action="#" method="POST">
        <label for="Nombre" id="nombre">Nombre</label>
        <input type="text" value="Nombre" name="Nombre"><br>
        <label for="Apellido" id="apellido">Apellido</label>
        <input type="text" value="Apellido" name="Apellido"><br>
        <label for="sexo">Sexo</label>
        <input type="radio" id="masculino" name="Sexo" value="Masculino"><label for="Masculino">Masculino</label>
        <input type="radio" id="femenino" name="Sexo" value="Femenino"><label for="Femenino">Femenino</label><br>
        <label for="Correo">Correo</label>
        <input type="text" value="correo" name="Correo"><br>
        <label for="Poblacion">Poblacion</label>
        <label>
            <input type="text" list="Poblacion" name="Poblacion">
        </label>
        <datalist id="Poblacion">
            <option value="alicante"></option>
            <option value="otro"></option>
        </datalist><br>
        <label for="Descricion">Descripcion</label>
        <textarea name="Descripcion" id="descr" cols="30" rows="10" value="descripcion" name="Desc"></textarea><br>
        <input type="checkbox" name="terms" id="terms"><label for="terminos">Deseo recibir informacion sobre novedades y ofertas</label>
        <br>
        <input type="checkbox" name="conds" id="conds"><label for="condicionses">Declaro haber leido y aceptar las condiciones generales del programa y la normativa de datos</label>
        <br>
        <input type="submit">

    </form>

    </main>
    <?php
        
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $nombre = $_POST["Nombre"];
            $apellido = $_POST["Apellido"];
            $sexo = $_POST["Sexo"];
            $correo = $_POST["Correo"];
            $poblacion = $_POST["Poblacion"];
            $descripcion = $_POST["descripcion"];
            $terms = $_POST["terms"];
            $conds = $_POST["conds"];
            echo "Nombre:$nombre <br>";
            echo "Apellido:$apellido <br>";
            echo "Sexo:$sexo <br>";
            echo "Correo:$correo <br>";
            echo "Poblacion:$poblacion <br>";
            echo "Descripcion:$descripcion <br>";
            echo "terms:$terms <br>";
            echo "conds:$conds";

        }
    ?>
</body>
</html>