<!DOCTYPE html>
<html> <!-- jqueryasyncget.htm -->
  <head>
    <script src='jquery-3.2.1.min.js'></script>
    <meta charset="utf-8"> 
    <link rel="stylesheet" href="estilo.css">
  </head>
  <body >
    <div id='info'></div>
    <script>
      $.get('urlget.php?url=registroP.php', function(data)
      {
        $('#info').html(data)
      } )
    </script>
<header>
    <div class="menu_bar">
        <a href="#" >Menú</a>
    </div>
    <nav>
    <ul>
        <div id="header">
            <ul class="nav">
            <img  src="imagen/loo.jpg" alt="" width="70px" height="60px";>
            <li><a href="menu.html">Inicio</a>
            <ul> 
            <li ><a href="info.php">Informacion</a></li>
            <li ><a href="cerrar.php">Cerrar Seccion</a></li>
            </ul>
            </li>
            <li ><a href="#">Productos</a>
            <ul> 
                <li ><h11><a href="ProPara.php">Nuevo Productos</a></h11></li>
                 <li ><a href="diseñoPrecio.php">Descuentos en Producto</a></li>
                    </ul></li>
                <li><a href="categoria.php">Categoria Productos</a>
                <ul> 
                <li ><a href="pintura.php">Pintura Vehiculares</a></li>  
                <li ><h11><a href="registroP.php">Registro de Productos</a></h11></li>
                    </ul>
            </li>
                <li><a href="servicio.php">Servicios</a></li>
           </ul>
</div>
</nav>
</header>
</body>
</html>

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
    <html><body>
    <form action="registroP.php" method="post"><pre>
    <center><h1>Registro de Producto</h1></center>
    <div class="container">  <img src="imagen/acei.jpg" width="350" height="300"align="right"/>
            <input type="text" name="proveedor"class="form-control" placeholder="Proveedor" style="width:400px;height:50px">
            <input type="text" name="producto" class="form-control" placeholder="producto" style="width:400px;height:50px">
            <input type="text" name="descripcion" class="form-control" placeholder="descripcion" style="width:400px;height:50px">
            <input type="text" name= "precio" class="form-control" placeholder="precio" style="width:400px;height:50px">
            <input type="text" name= "stok" class="form-control" placeholder="stok" style="width:400px;height:50px"></br>
    <input type="submit" class="btn btn-warning" value="Guardar"> <input type="reset" class="btn btn-warning" style="width:118px;height:40px"> <a href="mostraC.php"><input type="boton" value="Mostar Registro" class="btn btn-warning" style="width:170px;height:40px"></a>
             </div></pre></form></body></html>
    _END;

    $query = "SELECT * FROM regista";
    $result = $conexion->query($query);
    if (!$result) die ("Falló el acceso a la base de datos");

    $rows = $result->num_rows;

    //for ($j = 0; $j < $rows; $j++)
    //{
    //    $row = $result->fetch_array(MYSQLI_NUM);

     //   $r0 = htmlspecialchars($row[0]);
     //   $r1 = htmlspecialchars($row[1]);
     //   $r2 = htmlspecialchars($row[2]);
     //   $r3 = htmlspecialchars($row[3]);
     //   $r4 = htmlspecialchars($row[4]);

    //    echo <<<_END
    //   <html><head>
    //   <link rel="stylesheet" href="tabla.css"></head>
    //   <body><div id="main-container">
    //   <table>
    //   <thead><tr>
    //   <th>Proveedor</th><th>Producto</th><th>Descripcion</th><th>Precio</th><th>Stok</th>
    //    </tr></thead>
    //   <tr>
    //   <td> $r0</td><td>$r1</td><td>$r3</td><td>$r2</td> <td>$r4</td>
    //   </tr>
    //   </tr></div></table>
    //   <form action='registroP.php' method='post'>
    //   <input type='hidden' name='delete' value='yes'>
    //   <input type='hidden' name='stok' value='$r4'>
    //   <input type='submit' value='BORRAR ' class="btn btn-danger">
    //    </form>
    //    </body>
    //    </html>
    //   _END;
   // }

    $result->close();
    $conexion->close();

    function get_post($con, $var)
    {
        return $con->real_escape_string($_POST[$var]);
    }
?>