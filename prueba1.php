<?php 
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