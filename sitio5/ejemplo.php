<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Ejemplos con funciones y estructuras de control</h2>

    <?php
    require_once("repositorio.php");
    echo "<h3>Ejercicio 1</h3>";
    $resultado=transformar("un texto");
    echo $resultado;
    $totalFactura=calcularTotal(100,4.95,0.21);
    echo "<h4>El total de la factura es ".$totalFactura." € (iva incluido)</h4>";
    $totalFactura2=calcularTotal2(100,4.95,"reducido");
    echo "<h4>El total de la factura es ".$totalFactura2." € (iva en función del tipo)</h4>";
    $mensajeResultado=manipularString("En un lugar de la mancha");
    echo $mensajeResultado;

    echo "<h3>Primera mayúscula</h3>";
    $dato=primeraMayuscula("juan");
    echo $dato;

    echo "<h3>Reemplazo</h3>";
   echo reemplazar();

   echo "<h3>Información</h3>";
   echo info();

 echo "<h3>Fecha</h3>";
 echo mostrarMes();
   

   echo "<h3>Número primo</h3>";
   echo numeroPrimo();
   

   echo "<h3>Bisiesto</h3>";
   $bisiesto=bisiesto(6);
   if($bisiesto) {
       echo "El año es bisiesto";
   } else {
       echo "El año no es bisiesto";
   }


    
    ?>

    


</body>
</html>