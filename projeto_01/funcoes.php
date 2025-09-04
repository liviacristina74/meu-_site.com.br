<?php
 function media($n1){
    if ($n1 >= 7) {
      return " sua nota foi $n1 você está aprovado(a) ";
    } else if ($n1 >=5 && $n1 <7){
        return "sua nota foi $n1 você está de recuperação";
    }
    else {
        return " sua nota foi $n1 você foi reprovado";
    }
}
 ?>