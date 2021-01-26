<!DOCTYPE html>
<html lang="en">
   <head>
	<meta charset="UTF-8">
    <link rel="stylesheet" href="estilo.css">
	<link rel="stylesheet" href="main.css">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="estil.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src='jquery-3.2.1.min.js'></script>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body  style='text-align:center'>
    <div id='info'></div>
    <script>
      $.get('urlget.php?url=amazon.com/gp/aw', function(data)
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
                <li><a href="index.html">Inicio</a>
                <ul> 
                <li ><a href="info.php">Informacion</a></li>
                 </ul>
                </li>
                <li ><a href="#">Productos</a>
                    <ul> 
                        <li ><a href="registroP.php">Registro de Productos</a></li>
                        <li ><a href="diseñoPrecio.php">Descuentos en producto</a></li>
                     </ul></li>
                <li><a href="categoria.php">Categoria Productos</a></li>
                <li><a href="servicio.php">Servicios</a></li>
        </ul>
</div>

    </nav>
	<center><img src="imagen/img.jpg" alt="" width="1560px" height="560px";></center>
</header>
<body>	</br></br>
	<div class="wrap">
	<center><h2>ACEITE AUTOMOTRIS Y LUBRICANTES</h2></br></center>
			<section class="products-list">
				<div class="product-item" >
					<img src="imagen/repso.png" alt=""  width="250px" height="175px";>
					<a href="#">Aceite repsol</a>
				</div></p>
				<div class="product-item">
					<img src="imagen/acei.jpg" alt="" width="250px" height="175px";>
					<a href="#">Lubricante</a>
				</div></p>
				<div class="product-item" >
					<img src="imagen/desc.jpg" alt="" width="250px" height="175px";>
					<a href="#">Aceite para motor petrolero </a>
                </div></p>	
                <div class="product-item" >
					<img src="imagen/aceite.jpg" alt="" width="250px" height="175px";>
					<a href="#">Aceite para cohes </a>
                </div></p>	
                <div class="product-item" >
					<img src="imagen/gra.jpg" alt="" width="250px" height="175px";>
					<a href="#">Grasa de litio multiusos </a>
                </div></p>
                <div class="product-item" >
					<img src="imagen/grasa.jpg" alt="" width="250px" height="200px";>
					<a href="#">Grasa chevron </a>
                </div></p>
                <div class="product-item" >
					<img src="imagen/Limpiaparabrisas.jpg" alt="" width="250px" height="200px";>
					<a href="#">Limpia Parabrisas </a>
                </div></p>	
                <div class="product-item" >
					<img src="imagen/gua.jpg" alt="" width="250px" height="200px";>
					<a href="#">Agua acidulada para bateria </a>
                </div></p>
                <div class="product-item" >
					<img src="imagen/cogin.jpg" alt="" width="250px" height="200px";>
					<a href="#">Cogin de 2 tiempo </a>
                </div></p>
                <div class="product-item" >
					<img src="imagen/silicona.jpg" alt="" width="250px" height="200px";>
					<a href="#">Silicona para tablero </a>
                </div></p>
                <div class="product-item" >
					<img src="imagen/unnamed.png" alt="" width="250px" height="200px";>
					<a href="#">Limpia Inyectores </a>
                </div></p>
				<div class="product-item" >
					<img src="imagen/contacto.jpg" alt="" width="250px" height="200px";>
					<a href="#">Limpia Contacto </a>
                </div></p>		
                <div class="product-item" >
					<img src="imagen/Lubricantes.png" alt="" width="250px" height="200px";>
					<a href="#">Hidrolina lo mejor para tu auto</a>
                </div></p>
                <div class="product-item">
					<img src="imagen/ambientador.png" alt="" alt="" width="250px" height="200px";>
					<a href="#">Ambientador</a>
				</div>			
			</section>
		</div>
    </div></br>
    <div class="wrap">
	<center><h2>MATERIALES FERRETEROS</h2></br></center>
			<section class="products-list">
				<div class="product-item" >
					<img src="imagen/pernos.png" alt=""alt="" width="250px" height="200px"; >
					<a href="#">Pernos de todo tipo</a>
				</div>
				<div class="product-item">
					<img src="imagen/remaches.jpg" alt="" alt="" width="250px" height="200px";>
					<a href="#">Remache,diferente medida</a>
                </div>
                <div class="product-item">
					<img src="imagen/descarga.jpg" alt="" alt="" width="250px" height="200px";>
					<a href="#">Masilla</a>
				</div>
				<div class="product-item">
					<img src="imagen/img1.jpg" alt="" alt="" width="250px" height="200px";>
					<a href="#">Martillo,</a>
				</div>	
				<div class="product-item">
					<img src="imagen/broca.png" alt="" alt="" width="250px" height="200px";>
					<a href="#">Broca</a>
				</div>
				<div class="product-item">
					<img src="imagen/autorros.jpg" alt="" alt="" width="250px" height="200px";>
					<a href="#">Autorroscante</a>
				</div>
				<div class="product-item">
					<img src="imagen/desar.jpg" alt="" alt="" width="250px" height="200px";>
					<a href="#">Desarmador plana </a>
				</div>
				<div class="product-item">
					<img src="imagen/etro.jpg" alt="" alt="" width="250px" height="200px";>
					<a href="#">Electrodo o Soldadura</a>
				</div>
				<div class="product-item">
					<img src="imagen/lija.png" alt="" alt="" width="250px" height="200px";>
					<a href="#">Tenemos lija de todo numero</a>
				</div>		
			</section>
		</div>
	</div>
	</br></br></br>
	<center><a href="https://multimedia.3m.com/mws/media/572099O/ferreteria.pdf?&fn=Catalogo%2520Ferreteria.pdf"><input type="boton" value="Quieres ver mas" class="btn btn-dark" style="width:170px;height:40px"></a></center>
	</body>
   
	</br></br></br>
<footer>
</footer>
</body>
</html>