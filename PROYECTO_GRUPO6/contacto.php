<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="contacto.css">
    <link rel="stylesheet" href="usuario.css">
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
     
<div id="contactanos">
    <h2>CONTACTANOS</h2>
    <H3>Si deseas puedes comunicarte con la tienda a travez del siguiente formulario</H3>

        <form id="formulario" name ="form" method="POST" action="contacto.php">
            <h4>Nombres</h4>                 
            <input type="text" name="nombre" placeholder="Nombres">                  
            <h4>Apellidos</h4>                 
            <input type="text" name="apellidos" placeholder="Apellidos">                  
            <h4>Numero Celular</h4>           
            <input type="text" name="celular" maxlength="9" placeholder="Número de celular">                  
            <h4>Correo Electronico</h4>                  
            <input type="text" name="email" placeholder="Correo Electronico">               
            <H4>Asunto</H4>                
            <input type="text" name="asunto" placeholder="Asunto">
                   
            <H4>Escribir Mensaje</H4>
                <textarea name="mensaje" placeholder= "Ingresa tu mensaje"></textarea>
                <input type="submit" name="btn_enviar" value="Enviar Ahora">
        </form>          
</div>   
            
    <section id="mapa">
        <h1>Encuentranos en:</h1>
        <iframe class="mapa" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3899.499318943073!2d-76.9329763851858!3d-12.214433491355765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105b9580e03b483%3A0x1cbf0d56c84182c5!2sInstituto%20Superior%20Tecnol%C3%B3gico%20P%C3%BAblico%20Julio%20Cesar%20Tello!5e0!3m2!1ses-419!2spe!4v1626967421359!5m2!1ses-419!2spe" width="1300" height="600" style="border: 10px;" allowfullscreen="" loading="lazy"></iframe>
        </section> 
            
        <a href="https://api.whatsapp.com/send?phone=+51960732496" class="btn-wsp" target="_blank">
        <i class="fab fa-whatsapp"></i>
        </a>        
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

<?php

include("abrir_conexion.php");
        
    $nomb="";
    $apel="";
    $celu="";
    $emai="";
    $asun="";
    $mens="";

    // REGISTRAR MENSAJE 
    if(isset($_POST['btn_enviar']))
    {
        $nomb=$_POST['nombre'];
        $apel=$_POST['apellidos'];
        $celu=$_POST['celular'];
        $emai=$_POST['email'];
        $asun=$_POST['asunto'];
        $mens=$_POST['mensaje'];


        if($nomb=="" || $apel==""||$celu=="" ||$emai=="" || $asun=="" || $mens=="")
        {
          echo "<h2>DEBE ESCRIBIR ALGÚN CONTENIDO EN LOS CAMPOS</h2>";
        }
        else{
          mysqli_query($conexion, "INSERT INTO $tabla_db2(nombres,apellidos, celular, correo, asunto,mensaje)values('$nomb', '$apel','$celu','$emai','$asun', '$mens')");
        }
    } 
include("cerrar_conexion.php");
?>

</body>
</html>