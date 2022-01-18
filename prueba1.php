<?php 
    /**
     * Cree un programa que sea capaz de escribir los números del 1 al 100.
     * 
     *Si un número es múltiplo de 3, se escribe “mare” en su lugar.
     *Si el número es múltiplo de 5, se escribe “igua”.
     *Si el número es múltiplo de ambos se escribe “mareigua”.
     */
    for ($i = 1; $i <= 100; $i++) {
        echo "<br>";
        $out = $i;
        if ($i%3 == 0) {
            $out = "mare";
        }
        if ($i%5 == 0) {
            $out = "igua";
        }
        if ($i%3 == 0 AND $i%5 == 0) {
            $out = "mareigua";
        }
        echo $out;
        
    }

?>