<?php

// a letra "a" faz inserir  uma linha sem 
//apagar a linha anterior 
$arquivo = fopen("Dados.txt", "a");
fwrite($arquivo, " primeira linha de texto\n");
fclose($arquivo);
echo "Arquivo alterado com sucesso!";

//observe que é o mesmo  código de 
//criar_arquivo.php, mudando de "w" para "a"
?>