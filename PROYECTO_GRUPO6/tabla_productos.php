<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Administrador</title>
    <link rel="stylesheet" href="admin_registrar.css">
    <link rel="stylesheet" href="usuario.css">
    <link rel="stylesheet" href="mensajes_usuarios.css">

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

<!-- MENU -->

<div class="navegador_admin">
    <ul class="menu_admin" id="menu">
        <li><a href="admin.php" class="menuselector_admin">REGISTRAR PRODUCTOS</a></li>
        <li><a href="tabla_productos.php" class="menuselector_admin">TABLA PRODUCTOS</a></li>      
        <li><a href="mensajes_usuarios.php" class="menuselector_admin">MENSAJES USUARIOS</a></li>
    </ul>
</div>

<!-- CUERPO -->

<div class="contenedor_mensajes">
    <h6 class="title">PRODUCTOS REGISTRADOS</h6>
    <?php
    include("abrir_conexion.php");          
    $consulta = "SELECT * FROM $tabla_db3";          
    $query = $conexion->query($consulta);        
    ?>
    <?php if ($query->num_rows > 0) : ?>             
        <table class="tabla_mensajes">                   
        <thead>
            <th>NOMBRE PRODUCTO</th>                   
            <th>DESCRIPCION</th>                   
            <th>PRECIO</th>                 
            <th>FOTO</th>
                                               
        </thead>
                    
        <?php while ($r = $query->fetch_array()) : ?>
                        
            <tr class="table-field">
                <td><?php echo $r["nom_producto"]; ?></td>
                <td><?php echo $r["descripcion"]; ?></td>                         
                <td><?php echo $r["precio"]; ?></td> 

                <td>
                    <img width="60" height="60" src="data:image/png;base64,<?php echo base64_encode($r['foto']);?>">
                </td> 
            </tr>              
            <?php endwhile; ?>
                </table>
            <?php else :
                echo 'NO HAY REGISTROS';
            ?>
            <?php endif; ?>        
        <?php
            
    include("cerrar_conexion.php");
    ?>
</div>


</body>
</html>