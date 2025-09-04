<?php
    require_once("funcoes.php"); //incluir o arquvio com a função
     $usuario = $_POST["usuario"] ?? '';
     $senha = $_POST["senha"] ?? '';
    conecta($usuario, $senha); // chama a função
?>
