<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<a href="ejemplo.php">Ejemplo.php</a>
<a href="libreria.php">Libreria.php</a>
<a href="repositorio.php">Repositorio.php</a>


    <?php
        require_once("libreria.php");
        
        echo "<h2>Estructuras de control</h2>";
        function manejador(){
            echo "<p>llamando a manejador</p>";
        }
        manejador(); //llamada a la función

        $a=1;
        if($a>=0) {
            manejador();
        }

        echo register_tick_function("manejador");

        function sumar($n1, $n2){
            $suma=$n1+$n2;
            echo "<p>La suma es: ".$suma."</p>";
        }
        sumar(5, 6);

        echo "<br>";

        function restar($n1, $n2){
            $resta=$n1-$n2;
            return $resta;
        }

        echo "<p>La resta es: ".restar(10,9)."</p>";
        echo "<h3>Paso de parámetros</h3>";

        //¡IMPORTANTE!
        function saludar($nombre){ //paso por valor
        //function saludar(&$nombre){//paso por referencia
            $nombre="Cliente 1 ".$nombre; //modificando la variable
            echo "<p>Hola, ".$nombre."</h3></p>";
        }

        //saludar("Juan");
        $cliente="maría";
        saludar($cliente);
        echo $cliente;

    ?>
</body>
</html>