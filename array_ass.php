<?php

    $pessoa = ["nome"=> "joao", "idade"=> 30 ];
    echo $pessoa["nome"];
?>
<p> Olá aqui é um HTML </p>
<?php
    $aluno=["nome"=> "Livia", "idade"=> 16 , "nota"=>100];
    echo "Olá $aluno[nome], você tem $aluno[idade] anos e sua nota é $aluno[nota]";
    $ano = 2025 - $aluno["idade"];
    echo"você nasceu no ano de $ano <br>"

?>