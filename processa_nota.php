
<?php
$nota = $_POST ['nota'];

function nota ($nota){

    if (nota >=7){
        echo "aprovado";

    }
        if (nota >=5 &&  $nota<7 ){
        echo "recuperação";
        
    }
        if (nota <5){
        echo "Reprovado";
        
    }

}


 nota ($nota);

