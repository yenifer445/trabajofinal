<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
  </body>
</html>
<?php 
require_once 'Conexion.php';
    $conexion = new mysqli($hn, $un, $pw, $db,3306);

    if ($conexion->connect_error) die ("Fatal error");

    if (isset($_POST['delete']) && isset($_POST['stok']))
    {   
        $stok = get_post($conexion, 'stok');
        $query = "DELETE FROM regista WHERE stok='$stok'";
        $result = $conexion->query($query);
        if (!$result) echo "BORRAR falló"; 
    }

    if (isset($_POST['proveedor']) &&
        isset($_POST['producto']) &&
        isset($_POST['descripcion']) &&
        isset($_POST['precio']) &&
        isset($_POST['stok']) )
    {
        $proveedor = get_post($conexion, 'proveedor');
        $producto = get_post($conexion, 'producto');
        $descripcion = get_post($conexion, 'descripcion');
        $precio = get_post($conexion, 'precio');
        $stok = get_post($conexion, 'stok');
        $query = "INSERT INTO regista VALUE" .
            "('$proveedor', '$producto', '$precio', '$descripcion', '$stok')";
        $result = $conexion->query($query);
        if (!$result) echo "INSERT falló <br><br>";
    }

    echo <<<_END
    <html>
    <head>
        <title>Registros</title>
    </head>
    <body bgcolor=" silver">
    <a href="registroP.php"><input type="boton" value="regresar"  class="btn btn-success"></a>
    <a href="Login.php"><input type="boton" value="salir de la sesión"  class="btn btn-success"></a> 
    </body></html>
    _END;

    $query = "SELECT * FROM regista";
    $result = $conexion->query($query);
    if (!$result) die ("Falló el acceso a la base de datos");

    $rows = $result->num_rows;

    for ($j = 0; $j < $rows; $j++)
    {
        $row = $result->fetch_array(MYSQLI_NUM);

        $r0 = htmlspecialchars($row[0]);
        $r1 = htmlspecialchars($row[1]);
        $r2 = htmlspecialchars($row[2]);
        $r3 = htmlspecialchars($row[3]);
        $r4 = htmlspecialchars($row[4]);

        echo <<<_END
        <html><head>
        <link rel="stylesheet" href="tabla.css"></head>
        <body><div id="main-container">
        <table>
        <thead><tr>
        <th>Proveedor</th><th>Producto</th><th>Descripcion</th><th>Precio</th><th>Stok</th>
        </tr></thead>
        <tr>
        <td> $r0</td><td>$r1</td><td>$r3</td><td>$r2</td> <td>$r4</td>
        </tr>
        </tr></div></table>
        <form action='registroP.php' method='post'>
        <input type='hidden' name='delete' value='yes'>
        <input type='hidden' name='stok' value='$r4'>
        <input type='submit' value='BORRAR ' class="btn btn-danger">
        <a href="modifica.php"><input type="boton" value="Modificar" class="btn btn-danger" style="width:150px;height:40px" ></a>
        </form>
        </body>
        </html>
        _END;
    }

    $result->close();
    $conexion->close();

    function get_post($con, $var)
    {
        return $con->real_escape_string($_POST[$var]);
    }
?>