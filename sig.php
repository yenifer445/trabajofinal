<html>
      <head> </head>
      <body background="imagen/lud.jpg">
      </body> 
      </html>
<?php 
    $hn = 'localhost';
    $db = 'tin';
    $un = 'root';
    $pw = '';
    $port = 3306;
?>
    <?php 
    $conexion = new mysqli($hn, $un, $pw, $db, 3306);
    if ($conexion->connect_error) die ("Fatal error");

    if(isset($_POST['username']) && isset($_POST['password']))
    {
        $nombre = mysql_entities_fix_string($conexion, $_POST['nombre']);
        $apellido = mysql_entities_fix_string($conexion, $_POST['apellido']);
        $username = mysql_entities_fix_string($conexion, $_POST['username']);
        $pw_temp = mysql_entities_fix_string($conexion, $_POST['password']);
        $email = mysql_entities_fix_string($conexion, $_POST['email']);

        $password = password_hash($pw_temp, PASSWORD_DEFAULT);
        $query = "INSERT INTO usuarios VALUES('$nombre','$apellido','$username','$password', '$email')";
        echo $query;
        $result = $conexion->query($query);
        if (!$result) die ("Falló registro");
        echo "<h1>Registro exitoso <a href='son.php'>Ingresar</a></h1>";
        
    }
    else
    {
        echo <<<_END
        <html>
        <body > 
        <form action="sig.php" method="post"><center>
        <br></br>
        <br></br>
        <h1>Regístrate</h1><img src="imagen/log.jpg" style="width:70px;height:67px" />
        <h3>Nombre  <input type="text" name="nombre" placeholder="Nombre" required=""></h3>
        <h3>Apellido <input type="text" name="apellido" placeholder="Apellido" required="" ></h3>
        <h3>Usuario  <input type="text" name="username" placeholder="username" required=""></h3>
        <h3>Password <input type="text" name="password"  placeholder="Contraseña" required=""></h3> 
        <h3>Email <input type="email" name="email" placeholder="Correo Electronico" required=""></h3></br>
                 <input type="hidden" name="reg" value="yes">
                 <input type="submit" value="REGISTRAR" "></center></form></body></html>
        _END;
    }
    function mysql_entities_fix_string($conexion, $string)
    {
        return htmlentities(mysql_fix_string($conexion, $string));
      }
    function mysql_fix_string($conexion, $string)
    {
        if (get_magic_quotes_gpc()) $string = stripslashes($string);
        return $conexion->real_escape_string($string);
      }   
?>



