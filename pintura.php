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
      $.get('urlget.php?url=categoria.php', function(data)
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
                    </ul> </li>
                <li><a href="servicio.php">Servicios</a></li>
           </ul>
</div>
</nav>
<style>
.container{
        position: relative;
        display: inline-block;
        }
       .texto2{
        position: absolute;
        top: 57%;
        left:25%;
        font-family: Georgia,'Times';
        font-size: 25px;
        color:#18181a;
        padding:50px;
        display: block;
        font-weight:  bolder;
    }
    </style>
    <div id="container">
        	<center><img src="imagen/ferreteria.jpg" alt="" width="700px" height="450px";></center>
        <pre><div class="texto2"> Multicervisio Juan Diego tenemos colores variados            
para vehiculos de todo tipo </div></pre>

</header>

<title>Columnas</title>
	<style>
		body{background-color: #ddd;}
		#container{
			background-color: white;
			margin: 0 auto;
			width: 800px;
			padding: 20px;

			
		}

		article{
			padding-top: 20px;
			column-count: 3;
			column-gap: 20px;
			column-rule: dotted 4px #ccc;
			
		}
	</style>
</head>
<body>
	<div id="container">
	
		<article>
			<h2>Pinturas de prisma</h2>
		<p>La pintura es el arte de la representación gráfica utilizando pigmentos mezclados con otras sustancias aglutinantes orgánicas o sintéticas.
        <p><img src="imagen/pris.jpg" width="100%" alt=""></p>
        
    <span>Un pigmento es un elemento de pintura en polvo que es responsable del tono y color.</span>
            <p><a href="https://www.chevrolet.com.ar/content/dam/chevrolet/mercosur/argentina/espanol/index/download-a-catalog/02-pdfs/catalogo-ficha-tecnica-chevrolet-prisma-2018.pdf"  class="btn btn-danger">  Mas informacion prisma pdf   </a></p>
            <p><img src="imagen/pint.jpg" width="100%" alt=""></p>
    <span>Un agente de capa es un componente puro y natural, En la industria de pinturas y barnices se utilizan diversas resinas naturales y sintéticas y aceites vegetales como formadores de capas.</span>
    <p><a href="https://www.standox.com/content/dam/EMEA/Standox/ES/Public/Documents/Standotheks/THK_Quick%20Way_E.pdf"  class="btn btn-danger">  Mas informacion  pdf   </a></p>

		<p><img src="imagen/f3cd.jpg" width="100%" alt=""></p>
		<h3>Pinturas Automoción</h3>
		<p><span>La pintura automotriz es la pintura que se usa para pintar los automóviles con el propósito de proteger, decorar y prevenir la oxidación de la carrocería.</span>
        <p><img src="imagen/fru.jpg" width="100%" alt=""></p>
		<span>gama de líquidos orgánicos (hidrocarburos, cetonas, alcoholes) y mezclas de ellos se utilizan como disolventes.</span>
        <p><a href="https://www.standox.com/content/dam/EMEA/Standox/ES/Public/Documents/Standotheks/THK_PaintDesign_ES.pdf"  class="btn btn-danger">  Mas informacion diseños pdf   </a></p>


        <p><img src="imagen/colo.jpg" width="100%" alt=""></p>
		
        <span>Los materiales de pintura modernos son mezclas de varios componentes, y también contienen varios aditivos específicos para mejorar ciertas propiedades del producto.</span></p>
		<p><span> Los autos pintados cualitativamente se venden mejor en comparación con aquellos hermanos de cuatro ruedas que no pueden presumir de un exterior presentable.

Entre los efectos que pueden lograrse mediante el uso de tecnologías de pintura modernas, hay “brillo”, “mate”, “metálico”, “camaleón”, “nácar”.</span>
<p><a href="https://static.weg.net/medias/downloadcenter/h6f/h5b/WEG-pinturas-pintura-automotriz-50049976-catalogo-es.pdf"  class="btn btn-danger">  Mas informacion pdf   </a></p>
</article>
		
	</div>
</body>
</html>