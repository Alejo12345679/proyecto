<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pagina Usuario</title>

    <link rel="stylesheet" href="usuario.css">
    <link rel="stylesheet" href="usuario2.css">
    <link rel="stylesheet" href="whats.css">
  
   <link rel="stylesheet" href="​https://cdnjs.com/libraries/font-awesome">
   <!--ESTE ARCHIVO TAMBIEN SE ACTIVA PARA QUE FUNCIONE EL ICONO-->
   <script src="jquery-3.5.1.min.js"></script>
   
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>
<!--<div class="container-boton" >
  <a href="https://wa.me/998947648?text=Delivery" target="_blank" >
      <img class="boton" src= "img/icono.png" alt="">
  </a>

</div>-->

<!-- PARTE DEL LOGUEO -->
<table class="logueo">
    <!-- <th><h2>!!Bienvenido(a)!!</h2></th> -->
    <th class="logueo_p">
        <a class="volver" href="index.php">Cerrar Sesion</a>
        <img class="cerrar_icon" src="img/apagado.png" alt="">
    </th>
</table>

<!-- PRINCIPIO DE LA PAGINA -->
<header class="cabecera">
    <div class="cotenidonavtxt">
        <h1 class="titulodellogo">MI BODEGA "DULCE HOGAR"</h1>
        <nav class="navegador">
            <span class="icon-menu" id="btn-menu"><i class="fas fa-bars"></i></span>

            <ul class="menu" id="menu">
                <li class="menuitem"><a href="usuario.php" class="menuselector"><span>INICIO</span></a></li>      
                <li class="menuitem"><a href="nosotros.php" class="menuselector"><span>NOSOTROS</span></a></li>
                <li class="menuitem"><a href="producto.php" class="menuselector"><span>PRODUCTO</span></a></li>              
                <li class="menuitem"><a href="contacto.php" class="menuselector"><span>CONTACTO</span></a></li>
            </ul>
        </nav>
    </div>
</header>

<main id="cuerpo">
    <section id="banner">
        <div class="slider">

            <section class="contenido-slider" id="caja1"> 
                <div>
                    <h4>LACTEOS</h4>
                </div>
            </section>

            <section class="contenido-slider" id="caja2"> 
                <div>
                    <h4>MENESTRAS</h4>
                </div>
            </section>
                    
            <section class="contenido-slider" id="caja3">
                <div>
                    <h4>ASEO</h4>
                </div>                     
            </section>
                    
            <section class="contenido-slider" id="caja4">
                <div>
                    <h4>AZUCARES</h4>
                </div>
            </section>

            <section class="contenido-slider" id="caja1">
                <div>
                    <h4>LACTEOS</h4>
                </div>
            </section> 

        </div>
    </section>
</main>

<section id="servicios">
    <h2>Servicio Que Ofrecemos</h2>

    <article class="cajaservicio">
        <div align="center">
            <img src="img/lacteos001.png" alt="">
        </div>
        <h3>PRODUCTOS LACTEOS</h3>
        <p>Nuestro servicios se encargan de vender los productos lacteos al mejor precio con execente calidad. Dentro de los lacteos tenemos, Leches de diferentes marcas como: Gloria, Pura vida y soya .</p>
    </article>

    <article class="cajaservicio">
        <div align="center">
            <img src="img/menestras002.png" alt="">
        </div>
        <h3>MENESTRAS, AZUCARES Y ARROZ</h3>
        <p> Nuestro equipo se encargara encargado de la calidad de los productos.Dentro de las menestras tenemos: lentejitas, frejoles, pallares. Dentro de los azucares: rubia y blanca y marcas de arroz: costeños, bells </p>               
    </article>

    <article class="cajaservicio">
        <div align="center">
            <img src="img/aseo003.png" alt="">
        </div>               
        <h3>UTILES DE LIMPIEZA </h3>             
        <p> Encuentra articulos de limpieza en ofertas el cual contamos con diferentes marcas como detergentes: ariel, ace, patito, Lejia: cloros , liguria y jabones para el lavado de ropa.</p>            
    </article>            
</section>  

<section class="galeria">
    <h1>---    PRODUCTOS   ---</h1>
    
    <div class="contenedor-imagenes">
        <div class="imagen">
            <img src="img/lacteos.jpeg" alt="">
            <div class="overlay">
                <h2>LACTEOS</h2>
            </div>
        </div>

        <div class="imagen">
            <img src="img/menestras.jpeg" alt="">
            <div class="overlay">
                <h2>MENESTRAS</h2>
            </div>          
        </div>

        <div class="imagen">
            <img src="img/aseo.jpeg" alt="">                   
            <div class="overlay">                     
            <h2>ASEO</h2>                 
        </div>              
    </div>
                
    <div class="imagen">                 
        <img src="img/arroz cafe.jpeg" alt="">               
        <div class="overlay">
            <h2>ARROZ, CAFE Y AZUCAR</h2>
        </div>             
    </div>          
</section>

<footer class="footer">
    <div class="contenedorfooter--100-33">
        <h2 class="titulofooter">NOSOTROS</h2>
        <p class="txtfooter">MI BODEGA "DULCE HOGAR"  es una empresa dedicada a la venta online de abarrotes. Nuestro objetivo es ofrecer los productos conmejor calidad a los mejores precios.
                Tenemos a su disposición una gran variedad de productos, los cuales son seleccionados para que nuestros clientes se sientan satisfechos de nuestros servicios.
                Tenemos un equipo que está dedicado a satisfacer tus necesidades y que te contestará a tus dudas con la mayor brevedad posible. 
                El mejor delivry que no tardara mucho menos e 30 min.
                Para una mejor comunicación puedes contactar con nosotros a través de WhatsApp o mensaje privado de Facebook y tan sólo en unos minutos tu duda será resuelta.</p>
        <cite class="autorfooter">- DIRECCION</cite>        
    </div>
           
            
    <div class="contenedorfooter--100-33">
        <h2 class="titulofooter">SIGUENOS</h2>
              
        <div class="socialfooter">
            <div class="social-icon">
                <i class="fab fa-facebook-f"></i>
                <a class="linksocial" href="">LINK FACEBOOK</a>            
            </div>
        
            <div class="social-icon">
                <i class="fab fa-twitter"></i>
                <a class="linksocial" href="">LINK </a>        
            </div>
      
            <div class="social-icon">
                <i class="fab fa-pinterest"></i>
                <a class="linksocial" href="">LINK PINTEREST</a>         
            </div>         
        </div>        
    </div>

    <div class="contenedorfooter--100-33">
        <h2 class="titulofooter">CONTACTANOS</h2>
              
        <div class="contact-icon">
            <i class="fas fa-map-marker-alt"></i>            
            <p class="contact__txt">Villa el Salvador 112 </p>           
        </div>
              
        <div class="contact-icon">
            <i class="fas fa-phone-alt"></i>              
            <p class="contact__txt">964654299 </p>          
        </div>
              
        <div class="contact-icon">
            <i class="fas fa-envelope"></i>
            <p class="contact__txt">mibodega@example.com</p>        
        </div>         
    </div>      
</footer>

<script src="deslizar.js"></script>
<script src="main.js"></script>
</body>
</html>