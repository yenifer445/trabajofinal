<!DOCTYPE html>
<html> <!-- jqueryasyncget.htm -->
  <head>
    <script src='jquery-3.2.1.min.js'></script>
    <meta charset="utf-8">
  </head>
  <body >
    <div id='info'></div>
    <script>
      $.get('urlget.php?url=Login.php', function(data)
      {
        $('#info').html(data)
      } )
    </script>
  </body>
</html>

<?php 
    require_once 'Conexion.php';
    $conexion = new mysqli($hn, $un, $pw, $db, 3306);
    if($conexion->connect_error) die("Error fatal");
    if (isset($_POST['username'])&&
        isset($_POST['password']))
    {
        $un_temp = mysql_entities_fix_string($conexion, $_POST['username']);
        $pw_temp = mysql_entities_fix_string($conexion, $_POST['password']);
        $query   = "SELECT * FROM usuarios WHERE username='$un_temp'";
        $result  = $conexion->query($query);
        
        if (!$result) die ("Usuario no encontrado");
        elseif ($result->num_rows)
        {
            $row = $result->fetch_array(MYSQLI_NUM);
            $result->close();

            if (password_verify($pw_temp, $row[3])) 
            {
                session_start();
                $_SESSION['nombre']=$row[0];
                $_SESSION['apellido']=$row[1];
                echo htmlspecialchars("$row[0] $row[1]:
                    hola $row[0], has ingresado como '$row[0]'");

                die ("<h1><p><a href='menu.html'>
              ENTRAR</a></p></h1>");
            }
            else {
                echo "<h1><a href='sig.php'>
                Registrate</a></h1>";
            }
        }
        else {
          echo "<h1><a href='sig.php'> 
          Registrate</a></h1>";
      }
        
    }
    else
    {
      echo <<<_END
      <html><head> <link rel="stylesheet" href="logi.css"></head>
      <div class="login">
      <center><h3>INGRESE </h3><img src="imagen/log.jpg" class="log" style="width:70px;height:67px" /> </center>
      <form method="post" action="Login.php">
      <input type="text" name="username" placeholder="Nombre de Usuario" style="width:400px;height:50px"> </br></br>
      <input type="password" name="password" placeholder="Contraseña" style="width:400px;height:50px"> </br></br>
      <input type="text" name="email"  placeholder="Correo Electronico" style="width:400px;height:50px">
      </br></br><center><input type="submit" value="Entrar" style="width:100px;height:50px"></center>
      <br><br><a href="sig.php"><h3> si no tienes una cuenta:Registrate</h3></a>
       <a href="cambio.php"><h3>Olvidaste tu Contraseña?</h3></a></div></form></html>       
      _END;
    
    }

    $conexion->close();

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
<?php //
if (isset($_SERVER['PHP_AUTH_USER']) &&
isset($_SERVER['PHP_AUTH_PW']))
{
echo "Bienvenido Usuario: " .
htmlspecialchars($_SERVER['PHP_AUTH_USER']).
"Password: " . htmlspecialchars($_SERVER['PHP_AUTH_PW']);
}
else
{
header('WWW-Authenticate: Basic realm="Restricted Area"');
header('HTTP/1.0 401 Unauthorized');
die("Please enter your username and password");
}
?>