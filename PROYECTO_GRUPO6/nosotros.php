<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Pagina Usuario</title>

    <link rel="stylesheet" href="usuario.css">
    <link rel="stylesheet" href="nosotros.css">
  
   <link rel="stylesheet" href="​https://cdnjs.com/libraries/font-awesome">
   <!--ESTE ARCHIVO TAMBIEN SE ACTIVA PARA QUE FUNCIONE EL ICONO-->
   <script src="jquery-3.5.1.min.js"></script>
   
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>

</head>
<body>

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

<div class="nosotros">
    <div class="contenido">
        <div class="somos">
            <h5>¿Y Quienes Somos?</h5>           
        </div>
        <p>Nosotros somos la empresa BODEGA MI DULCE HOGAR que se encuentra ubicada en el distrito de miraflores con una alta experiencia en el ambito de ventas,nos destacamos por nuestros servicios que brindamos.</p>
        <p>Nos dedicamos a la ventas de ABARROTES, como lentejas, frejoles, pallares, contamos con un buen equipo conformado por 6 personas y cada uno de ellos son capacitados para que puedan brindar un buen servicio a nuestros clientes .</p>                          
    </div>      

    <div class="ncontenido">
        <img src="img/mision.jpg" alt=""> 
        <div class="somos">
            <h5>MISION</h5>
            <p>Ser una organización comercial orientada a la distribución de abarrotes y seguir con la plena satisfacción del cliente. Fortalecer el servicio de calidad integral. Queremos infundir en nuestros clientes la seguridad a partir de nuestro trato para tener lealtad a nuestros productos y servicios. </p>                 
            <P>Formamos a nuestros empleados con las cualidades humanas para comportarse con sinceridad y un buen trato a nuestros clientes. La responsabilidad constante en nuestros empleados el compromiso para asumir sus actos y sus respectivas consecuencias en la atención a nuesteos proveedores y clientes. </p>                      
            <P>Contamos con la experiencia para ser competentes y cada día cumplir las expectativas de nuestros clientes, con actitud y rapidez.</p> 
        </div>       
    </div>

    <div class="ncontenido">
        <div class="somos">
            <h5>VISION</h5> 
            <p>Ser una tienda online que busque la rrenovacion y distribucion efectiva de productos ,
            de lo que el usuario necesite,de mayor reconocimiento por su alta calidad de sus   
            productos y sus servicios satisfaciendo las necesidades de nuestros clientes con gran eficiencia.      
            </p>
        </div>       
        <img src="img/vision.jpg" alt="">    
    </div>
</div>

        
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

</body>
</html>