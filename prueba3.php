<?php 

/**
 * Escriba una función que reverse una cadena (En cualquier lenguaje) sin usar un método prexistente para esto.
 */

    $str = "12345 67890";

    echo "la cadena es: ".$str;
    echo "<br>";
    echo "la cadena invertida es: ". fnRevertir($str);


    function fnRevertir($cadena){

        $strArray = str_split($cadena);
        $strInvertida = "";

        for ($i = 1; $i <= count($strArray); $i++) {
            $strInvertida .= $strArray[count($strArray) - $i];      
        }
        return $strInvertida;
    }

?>