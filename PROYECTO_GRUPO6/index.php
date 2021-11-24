<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="index.css">
    
</head>
<main>
    <section>

        <form method="POST" action="index.php">
            <div class="registro">
                <center><img src="img/usuario.png" alt=""></center>        
           
                <h1>REGISTRAR</h1>  
            
                <p><input type="text" placeholder="Nombre Completo" name="usuario"></p>            
                <p><input type="text" placeholder="Correo Electronico" name="correo"></p>          
                <p><input type="password" placeholder="Contraseña" name="contraseña" id="txtcontraseña"></p>     
                <p><input type="password" placeholder="Confirmar Contraseña" name="confirmar_contraseña"></p>    
           
                <select name="rol" class="inputrol">
                    <option value="Usuario" selected class="option">Usuario</option>             
                    <option value="Administrador" class="option">Administrador</option>
                </select>
                    
                <div class="vercontra">
                    <input type="checkbox" class="ver" onclick="verpassword()"><span>Mostrar contraseña</span>     
                </div>

                <div class="botones">
                    <p><input type="submit" value="REGISTRAR" class="registrar" name="btn_registrar"></p>            
                </div> 
                
            </div>

            <div class="iniciar">
                <center><img src="img/usuario.png" alt=""></center> 
        
                <h1>INICIAR SESION</h1>
        
                <p><input type="text" placeholder="Nombre" name="usuario1"></p>      
                <p><input type="password" placeholder="Contraseña" name="contraseña1" id="txtcontraseña1"></p>
    
                <select name="rol1" class="inputrol">
                    <option value="Usuario" selected class="option">Usuario</option>  
                    <option value="Administrador" class="option">Administrador</option>
                </select>
                
                <div class="vercontra">
                    <input type="checkbox" class="ver" onclick="verpassword1()"><span>Mostrar contraseña</span>     
                </div>

                <div class="botones">
                    <p><input type="submit" value="INGRESAR" class="ingresar" name="btn_ingresar"></p>           
                </div>   

               

            </div>
        </form>
    </section>

</main>

</html>

<?php

include("abrir_conexion.php");
        
    $usuario="";
    $contraseña="";
    $rol="";
    $usuario1="";
    $contraseña1="";
    $rol1="";

    // REGISTRAR USUARIO

    if(isset($_POST['btn_registrar']))
    {
        $usuario=$_POST['usuario'];
        $correo=$_POST['correo'];
        $contraseña=$_POST['contraseña'];
        $confirmar_contraseña=$_POST['confirmar_contraseña'];
        $rol=$_POST['rol'];
   
        if($usuario=="" || $correo==""|| $contraseña==""|| $confirmar_contraseña=="")
        {
            echo"<script> alert('DEBE ESCRIBIR ALGUN CONTENIDO 
            EN LOS CAMPOS');window.location='index.php'</script>";
        }
        else{
          mysqli_query($conexion, "INSERT INTO $tabla_db1(usuario,correo,contraseña,confirmar_contraseña,rol)values('$usuario', '$correo','$contraseña', '$confirmar_contraseña','$rol')");
        }
    }

    //INGRESAR USUARIO

    if(isset($_POST['btn_ingresar']))
    {
        //VARIABLE NEW----NAME DE LOS INPUT
        $usuario1=$_POST['usuario1'];
        $contraseña1=$_POST['contraseña1'];
        $rol1=$_POST['rol1'];

        $resultados = mysqli_query($conexion,"SELECT * FROM $tabla_db1 WHERE usuario='$usuario1' and contraseña='$contraseña1' and rol='$rol1'");
       //SIRVE PARA ALMACENAR LOS DATOS QUE RECIBE DEL RESULTADO
        $existe= mysqli_num_rows($resultados);

        if($existe==1)
        {
            if ($rol1 == "Usuario") {
              header("location:usuario.php");
              echo "SESION INICIADA CORRECTAMNETE";
            } else if ($rol1 == "Administrador") {
              header("location:admin.php");
            }
        }
        elseif($existe==0)
        {
            echo "<script> alert('Usuario, contraseña o rol
            incorrecto.');window.location='index.php' </script>";
        }   
    }

include("cerrar_conexion.php");
?>

</body>

<script>
function verpassword(){
    var tipo = document.getElementById("txtcontraseña");
    if(tipo.type == "password")
    {
        tipo.type = "text";
        }
        else
        {
         tipo.type = "password";
        }
    }

    function verpassword1(){
    var tipo = document.getElementById("txtcontraseña1");
    if(tipo.type == "password")
    {
        tipo.type = "text";
        }
        else
        {
         tipo.type = "password";
        }
    }
</script>

</html>