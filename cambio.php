<?php
session_start();
$sessData = !empty($_SESSION['sessData'])?$_SESSION['sessData']:'';
if(!empty($sessData['status']['msg'])){
    $statusMsg = $sessData['status']['msg'];
    $statusMsgType = $sessData['status']['type'];
    unset($_SESSION['sessData']['status']);
}
?>
<html>
      <head> </head>
      <body style="background-color:silver">
      </body> </html>
<!DOCTYPE html>
<html>
<head>
    <title> Cambio de Contraseña </title>
</head>
<body>
    <a href="son.php"></a>
	<div class="container">
	<center></br></br></br></br></br><h2>Ingresa tu Dirección de Correo Electrónico </h2>
        <?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
		<div class="regisFrm">
			<form action="userAccount.php" method="post">
				<input type="email" name="email" placeholder="Coloque su Correo" required="">
				<div class="send-button"></br>
					<input type="submit" name="forgotSubmit" value="Continuar">
				</div>
				</center></form>
		</div>
	</div>
</br>
	<center><img src="imagen/soto.jpg" width="450" height="280" /></center>
<style>
	img{
    padding: 1px 5px;
    border: black 1px solid;
    border-radius: 20px;
  }
  </style>
</body>
</html>