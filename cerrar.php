 <html>
      <body >
      <img src="imagen/fis.jpg" width="600" height="700" align="left"/>
      </body> 
      </html>
<?php //logout.php
    session_start();
    if (isset($_SESSION['nombre']))
    {
        $nombre = $_SESSION['nombre'];
        $apellido = $_SESSION['apellido'];

        destroy_session_and_data();

        echo "Sesión terminada <a href='Login.php'>Ingresar</a>.<br>";
    }
    else echo "<h1> <a href='Login.php'>Click aqui</a></h1>
                ";

    function destroy_session_and_data()
    {
        //session_start();
        $_SESSION = array();
        setcookie(session_name(), '', time()-2592000, '/');
        session_destroy();
    }
?>
