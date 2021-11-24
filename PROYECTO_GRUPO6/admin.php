<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pagina Administrador</title>
    <link rel="stylesheet" href="admin_registrar.css">
    <link rel="stylesheet" href="usuario.css">
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
<section class="registrar_producto" id="registrar_p">
    <h1 class="titulo_producto">Registro de productos</h1>

    <form action="admin.php" method="POST" enctype="multipart/form-data">

    <label for="">Nombre Producto:</label>
    <br>
    <input type="text" class="datos_productos" name="nom_producto">
    <br>
    <label for="">Descripcion:</label>
    <br>
    <input type="text" class="datos_productos" name="descripcion">
    <br>
    <label for="">Precio:</label>
    <br>
    <input type="text" class="datos_productos" name="precio">
    <br>
    <label for="">Subir Foto:</label>
    <br>
    <input type="file" class="datos_foto" name="foto">
    <br>

    <div class="boton_producto">
        <input type="submit" name="btn_guardar" class="btn_producto" value="Guardar">
        <input type="reset" name="btn_limpiar" class="btn_producto" value="Limpiar">
    </div>
   
    </form>
</section>

<?php

include("abrir_conexion.php");
        
    $nom_producto="";
    $descripcion="";
    $precio="";
    
    // REGISTRAR PRODUCTO

    if(isset($_POST['btn_guardar']))
    {
        $nom_producto=$_POST['nom_producto'];
        $descripcion=$_POST['descripcion'];
        $precio=$_POST['precio'];
        $foto= addslashes(file_get_contents($_FILES['foto']['tmp_name']));

        if($nom_producto=="" || $descripcion==""|| $precio=="")
        {
          echo "<h2>DEBE ESCRIBIR ALGÚN CONTENIDO EN LOS CAMPOS</h2>";
        }
        else{
          mysqli_query($conexion, "INSERT INTO $tabla_db3(nom_producto,descripcion,precio,foto)values('$nom_producto', '$descripcion','$precio','$foto')");
        }
    }

include("cerrar_conexion.php");
?>


</body>
</html>