<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Productos</title>

    <link rel="stylesheet" href="usuario.css">
    <link rel="stylesheet" href="producto.css">
    <link rel="stylesheet" href="producto2.css">
    <link rel="stylesheet" href="​https://cdnjs.com/libraries/font-awesome">
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

<!-- PRODUCTOS   -->

<div class="container">

    <?php

    include("abrir_conexion.php");
    $query="SELECT * FROM $tabla_db3";
    $resultado=$conexion->query($query);

    while ($row=$resultado->fetch_assoc()) {
        ?>

        <div class="card">
            <img src="data:image/jpg;base64, <?php echo base64_encode($row['foto']); ?>">
            <h4>
                <?php
                echo $row['nom_producto'];
                
                ?> 
            </h4>

            <p>
                <?php
                echo $row['descripcion'];
                ?> 
            </p>

            <p>
                <?php
                echo $row['precio'];
                ?> 
            </p>

            
				
                <input type="checkbox" id="btn-modal">
					<label for="btn-modal" class="lbl-modal">Comprar</label>
					<div class="modal">
						<div class="contenedores">
							<center><H1>DESCRIPCION</H1></center>
							<center><h1>GRACIAS POR COMPRAR EN NUESTRO ESTABLECIMIENTO </h1></center>
							<label for="btn-modal">X</label>
							<div class="contenido">
						
							</div>
						</div>
					</div>
                    


        </div>
        
        <?php      
    }   
    ?>
</div>


<!-- PIE DE PAGINA -->
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
    <script src="js/main.js"></script>
</body>
</html>