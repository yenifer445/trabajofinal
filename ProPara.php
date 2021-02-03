<!DOCTYPE html>
<html> <!-- jqueryasyncget.htm -->
  <head>
    <script src='jquery-3.2.1.min.js'></script>
    <meta charset="utf-8">
    <link rel="stylesheet" href="estilo.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  </head>

  <body style='text-align:center'>
    <div id='info'></div>
    <script>
      $.get('urlget.php?url=ProPara.php', function(data)
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
                <li ><a href="registroP.php">Productos</a>
                    <ul> 
                        <li ><h11><a href="ProPara.php">Nuevos producto</a></h11></li>
                        <li ><a href="diseñoPrecio.php">Descuento Producto </a></li>
                     </ul></li>
                <li><a href="categoria.php">Categoria Productos</a>
                <ul> 
                  <li ><a href="registroP.php">Registro Producto </a></li>
                  </ul></li>
                <li><a href="servicio.php">Servicios</a></li> 
                 </ul>
          </div>

    </nav>
</header>
</html>
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="estiloP.css" rel="stylesheet" >
    <link  href="main.css"   rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
   </br></br></br>
    <h1>Productos automovilistico Nuevos </h1>
  </head>
  <body>
  </br></br>  
  <div class="card-group">
  <div class="card">
    <img src="imagen/fibra.jpg" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Resina Poliester</h5>
      <p class="card-text">Las resinas de poliéster son resinas sintéticas insaturadas formadas por la reacción de ácidos orgánicos dibásicos y alcoholes polihídricos. El anhídrido maleico es una materia prima de uso común con funcionalidad de diácido. Las resinas de poliéster se utilizan en el compuesto de moldeo de hojas, el compuesto de moldeo a granel y el tóner de las impresoras láser. Los paneles de pared fabricados con resinas de poliéster reforzadas con fibra de vidrio -el llamado plástico reforzado con fibra de vidrio (FRP).</p>
    </div>
  </div>
  <div class="card">
    <img src="imagen/cata.jpg" width="100px" height="400px"; class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Catalizador</h5>
      <p class="card-text">El catalizador de resinas o  también llamado Peroxido Metil Etil Cetona o PMEC, es un compuesto que se agrega a las resinas para que permitan endurecer sobre la fibra de vidrio, así de simple se los explico para no enrollarnos mucho.
        ¿Como de aplica un catalizador de resina?
El catalizador se aplica entre un 1% y un 3%, la temperatura ideal de utilización de un catalizador es de 20 grados, es muy importante cuidar las dosificaciones debido a que si se agrega poco catalizador no se consiguen buenas propiedades mecánica, y mucho catalizador provoca un color muy amaraillento al endurecer.</p>
      </div>
  </div>
  <div class="card">
    <img src="imagen/cobal.jpg" width="100px" height="400px"; class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Cobalto</h5>
      <p class="card-text">El Acelerante de Cobalto al 6% es utilizado para el curado de las resinas de poliester y son fabricadas a partir de las sales de Cobalto , ya sean en su forma de Naftenato u Octoato en una concentración al 6% de contenido del metal. ATRIBUTOS: "- Presenta buena estabilidad contra la oxidación atmosférica , la decoloración y precipitación. - Se recomienda diluir el cobalto en monómero de estireno antes de agregarlo a la resina "

Aplicaciones:
Agente acelerante en el curado de las resinas de poliester catalizadas con peróxido de MEK en frío.</p>

    </div>
  </div>
</div>
    </br></br></br>
<div class="row g-0 bg-light position-relative">
  <div class="col-md-6 mb-md-0 p-md-4">
    <img src="imagen/para.jpg"   class="w-100" alt="..." width="80px" height="250px";>
  </div>
  <div class="col-md-6 p-4 ps-md-0">
    <h5 class="mt-0">Parabrisas, luna, luneta o vidrio frontal</h5>
    <p>son denominaciones de la superficie transparente (generalmente de cristal o vidrio) que se utiliza en automoción para permitir la visibilidad, obtener aerodinámica y proteger a los ocupantes de los elementos (viento, lluvia, polvo, insectos, etc.).</p>
    <a href="https://www.cristautos.com.mx/nuestros-productos/" class="btn btn-primary stretched-link">si quieres conocer mas</a>
  </div>
</div>

<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Mas Informacion
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" >
      <div class="accordion-body" > Aunque durante muchos años fueron fabricados de vidrio templado, los actuales parabrisas de vidrio laminado, que constan de dos hojas de vidrio con una capa de policarbonato laminado de seguridad entre ellas, y que en el momento del impacto estallan sin desprender partículas peligrosas para los ocupantes del vehículo, dan una mayor garantía de seguridad. Los parabrisas de las motos suelen ser de plástico acrílico resistente a impactos.

Similares características tienen las superficies semejantes de cualquier vehículo (ferrocarril, barco, avión, etc.)</div>
    </div>
  </div>


<div class="row g-0 bg-light position-relative">
  <div class="col-md-6 mb-md-0 p-md-4">
    <img src="imagen/espe.jpg"  width="100px" height="290px"; class="w-100" alt="...">
  </div>
  <div class="col-md-6 p-4 ps-md-0">
    <h5 class="mt-0">Espejo retrovisor</h5>
    <p>Un espejo retrovisor es un tipo funcional de espejo que poseen los automóviles y otros vehículos, diseñados para permitir al conductor ver el área que se encuentra detrás del vehículo a través de la ventana posterior.</p>
    <a href="http://www.appcesvimap.com/revista/revista9/pdfs/Espejos_retrovisores.pdf" class="btn btn-primary stretched-link">si quieres conocer mas</a>
  </div>
</div>

<div class="accordion accordion-flush" id="accordionFlushExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="flush-headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
        Mas Informacion
      </button>
    </h2>
    <div id="flush-collapseOne" class="accordion-collapse collapse" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample" >
      <div class="accordion-body" >Los espejos retrovisores a veces se confunden con los espejos laterales, un tipo diferente de espejos sobre los laterales izquierdo y derecho de muchos vehículos modernos. Si bien este tipo de espejos miran hacia atrás, su propósito es mostrarle al conductor el estado del tráfico a la derecha y a la izquierda del automóvil. La legislación exige específicamente que los espejos retrovisores internos y el espejo lateral del lado del conductor no tengan magnificación (aumento) y, por lo tanto, son convexos.1​ El conductor se encuentra ubicado tan próximo a estos espejos como para poder expandir, con un desplazamiento de su cabeza su campo de visión apropiadamente. En cambio, el espejo lateral del lado del acompañante (copiloto) se encuentra suficientemente lejos como para que el campo visual sea fijo, por más que el conductor mueva su cabeza y, por lo tanto, un espejo convexo es deseable para expandir el campo visual.</div>
    </div>
  </div>


  <div class="row g-0 bg-light position-relative">
  <div class="col-md-6 mb-md-0 p-md-4">
    <img src="imagen/faro.PNG"  width="100px" height="290px"; class="w-100" alt="...">
  </div>
  <div class="col-md-6 p-4 ps-md-0">
    <h5 class="mt-0">Espejo retrovisor</h5>
    <p>Los faros de un coche son los proyectores de luz que sirven para iluminar el camino de un vehículo por la noche. También sirven para que el vehículo sea más visible a los demás, cuando hay poca visibilidad. Este componente ahora obligatorio en los vehículos automóviles, no siempre lo ha sido.

Aunque hoy no se pueda imaginar otro tecnología que no sea la eléctrica, en los inicios del automóvil era simplemente una linterna que utilizaba la luz de la llama de una vela, o bien de una lámpara de petróleo o bien de acetileno.</p>
    <a href="http://www.boschautopartes.com/media/la/aa_sites_la/products_and_services/automotive_parts/lighting/download_6/HIRES_PDF_59961.pdf" class="btn btn-primary stretched-link">si quieres conocer mas</a>
  </div>
</div>


  <div class="accordion" id="accordionExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
      Mas Informacion
      </button>
    </h2>
    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
      <div class="accordion-body">
        <strong>Faros Automovilistico</strong> Los mejores faros no son siempre los de led ni los de xenón. Explicamos las ventajas y puntos débiles de cada tipo para elegir la mejor opción.
Lo primero que hay que saber es que los mejores o más caros faros no sirven de nada si no alumbran la zona correcta. También es importante entender que aunque los faros de led y de xenón incluyen tecnologías de regulación automática de altura, sólo modifican la dirección de la luz dentro de unos parámetros concretos. Si las luces no están bien colocadas, el coche por sí solo no corregirá que no veamos más allá del parachoques o que ceguemos a los conductores del sentido contrario. Por eso es tan importante el reglaje de los faros, algo barato, sencillo y muy eficaz.
      </div>
    </div>
  </div>
  </br>
<h3>Tenemos varias opciones.</h3></br>
        <div id="container">
          <img src="imagen/lej.jpeg"  width="400" alt="" style="border-radius: 60%;" >
          <img src="imagen/far.jpg" width="400" alt="" style="border-radius: 60%;">
        </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->

  </body>
    </br></br></br></br></br>
  <footer>
 </footer>
</html>