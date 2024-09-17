<!DOCTYPE html>
<html>    
<head>
    <meta charset="utf-8">
    <title>Prueba</title>
    <script src="hola.js"></script>
    
</head>
    <body>
    <!--  2-Escriu un programa en PHP que mostri per pantalla el missatge "Hola {nom de
 l’usuari}!". El nom de l’usuari l’ha d’introduir el mateix usuari -->
        <form action="" method="POST"></form>
        <?php
            $a = $_POST['user'];
            $b = $_POST['number'];
            for ($i=0; $i < $b; $i++) { 
                echo "hola $a "."<br>$b</br> ";
            }
    ?>
    </body>
</html>