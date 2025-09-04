<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="listar_pessoas.php"method = "post">
        <label>nome da pessoa a ser atendida:</label>
    <input type="text" name="cliente">
    <input type="submit" value="atender">
    </form>
    <h3>Lista de atendimentos</h3>
    <?php
    // inserindo o cliente no arquivo atendimento.txt
      $nome_atendimento = $_POST ['cliente'] ?? '';
      $arquivo = fopen("atendimento.txt", "a");
fwrite($arquivo, "$nome_atendimento\n");
fclose($arquivo);
//listar os nomes cadastrados no arquivo.txt
  $arquivo = fopen("atendimento.txt", "r");
    while(!feof($arquivo)){
     echo fgets($arquivo) . "<br>";
    }
    fclose($arquivo);
?>
    ?>
</body>
</html>