<?php
// esta é uma função
//início da função saudação
    function saudacao($nome) {
    return "olá, $nome!";
    }
//fim da função saudação
    echo saudacao("Livia");
    echo("-----------------------"); 

//definição da função
    function NomeDaFuncao($parametro1,$parametro2){
        //código que será executado
        $resultado = $parametro1 + $parametro2;
        return $resultado; // retorna um valor

    }
    //chamando a funcao
    $frase = saudacao("livia");
    $soma = NomeDaFuncao(5, 10);
    echo "$frase,  resultado é: $soma";

?>