<?php
function parOuImpar($num) {
    if ($num % 2 == 0) {
        return "par";
    } else  {
        return "impar";
    }
}
    echo parOuImpar(10);
?>