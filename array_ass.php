<?php

    $pessoa = ["nome"=> "joao", "idade"=> 30 ];
    echo $pessoa["nome"];
?>
<p> Olá aqui é um HTML </p>
<?php
    $aluno=["nome"=> "Livia", "idade"=> 16 , "nota"=>100];
    $ano_atual= date('Y');// a função date() retorna a data do servidor 
    $ano=$ano_atual - $aluno["idade"];
    echo "Olá $aluno[nome], você tem $aluno[idade] anos e sua nota é $aluno[nota]";
    $ano = 2025 - $aluno["idade"];
    echo"<p>você nasceu no ano de $ano </p>";

    echo "hoje é 21-08-2025";

    echo"<p> Hoje, 21 é dia nacional da habitação </p>";
    $hora = date('H:i:s');
    echo "São exatamente" . date('h:i:s'). ('hora');
    
?>
