<?php 
    $hn = 'localhost';
    $db = 'tin';
    $un = 'root';
    $pw = '';
    $port = 3306;
?>
 <html>
      <head> </head>
      <body background="imagen/lud.jpg" >
      </body> 
      </html>
<?php 
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
                die ("<h1><p><a href=''>
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
      <html><head></head> <body>
      <br></br>
      <br></br>
      <center>  </center> 
      <center><h1>INGRESE </h1><img src="imagen/log.jpg" style="width:70px;height:67px" /> </center>
      <form method="post" action="index.html">
      <center> <h3> Usuario  <input type="text" name="username" placeholder="Nombre de Usuario" ></h3>
               <h3> Password <input type="text" name="password" placeholder="Contraseña" ></br></h3>
               <h3> Email    <input type="email" name="email" placeholder="Correo Electronico" ></h3>
               <input type="submit" value="INGRESAR" style="width:85px;height:40px">
               <br><br><a href="sig.php"> si no tienes una cuenta:Registrate</a></h3></br></br>
               <a href="cambio.php">Olvidaste tu Contraseña?</a></center></form>
               <body> <html>        
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