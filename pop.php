<!DOCTYPE html>
<html>    
<head>
    <meta charset="utf-8">
    <title>Prueba</title>
    <!-- <script src="hola.js"></script> -->
    
</head>
    <body>
        <form action="Hello.php" method="POST">
        <p>Pon tu nombre</p>
        <input type="text" name="user" placeholder="Nombre">
        <br></br>
        <input type="text" name="number" placeholder="Cuantas veces?">
        <br></br>
        <input type="submit" value="enviar">
        </form>   
        <!-- 1- Escriu un programa en PHP que mostri per pantalla el missatge "Hola Món!". -->
        <?php
            $a = "Hola Mundo";
            echo "<h1>$a</h1>";

            echo "<h1>SUMA</h1>";
            $b = 5;
            $c = 10;
            $d = 20;
            $suma = $b + $c + $d;

            echo "<h2>$suma</h2>"
         ?>

        <form method="post" action="pop.php">
        Ingresar numero 1
        <br></br>
        <input type="text" name="Numero1" placeholder="Numero 1">
        <br></br>
        Ingresar numero 2
        <br></br>
        <input type="text" name="Numero2" placeholder="Numero 2">
        <br></br>
        <input type="submit" name="multiplicar" value="multiplicar"> o
        <input type="submit" name="sumar" value="sumar">
        </form>
        <!-- 3 Crea un programa en PHP que demani a l'usuari dos números i li pregunti si vol
     multiplicar-los o sumar-los. El programa ha de mostrar el resultat de l'operació escollida. -->
        <?php
    $var1 = $_POST['Numero1'];
    $var2 = $_POST['Numero2'];
    $btn_sumar = $_POST['sumar'];
    $btn_multiplicar = $_POST['multiplicar'];
    
    $multiplicar = $var1*$var2;
    $sumar = $var1+$var2;
    

    if($btn_multiplicar) {
   echo $multiplicar;
    } elseif ($btn_sumar) {
    echo $sumar;
    } else {
    echo "nada";
    }
    ?>
<!-- 4- Escriu una funció en PHP que determini si un número donat és primer. Un número primer
 és aquell que només es pot dividir per 1 i per ell mateix. -->
<form method="post" action="pop.php">
        NUMERO PRIMO
        <br></br>
        <input type="text" name="numprimo" placeholder="Numero primo">
        <br></br>
        <input type="submit" name="primo" value="Ver si es primo">
        </form>

        <?php
        $numero = $_POST['numprimo'];
        $numprimo = 0;

        for($contador = 1; $contador<=$numero; $contador++){
            if($numero % $contador == 0){
                $numprimo = $numprimo + 1;
            }
        }
        if($numero == 1 or $numprimo == 2){
            echo "El numero ".$numero." es primo";
        }
        else{
            echo "El numero ".$numero." NO es primo";
        }

        ?>



    </body>
</html>