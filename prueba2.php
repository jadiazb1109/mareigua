<?php 

/**
 * Escriba una función que encuentre el entero más grande en un arreglo de enteros positivos (En cualquier lenguaje)
 */
    $miArray = [3, 6, 100, 56, 32, 5, 89, 32];

    echo "el array es: ";
    print_r($miArray);
    echo "<br>";
    echo "el numero mayor es: ". fnMayor($miArray);

    function fnMayor($array){

        $numMayor = 0;

        for ($i = 0; $i < count($array); $i++) {
            if ($array[$i] > $numMayor) {
                $numMayor = $array[$i];
            };        
        }
        return $numMayor;
    }

?>