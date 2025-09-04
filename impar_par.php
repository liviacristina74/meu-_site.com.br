<?php
$numero = $_POST['n1'];// O número que você quer verificar

    if ($numero % 2 == 0) {
    echo "O número " . $numero . " é par.";
} else {
    echo "O número " . $numero . " é impar.";
}
?>