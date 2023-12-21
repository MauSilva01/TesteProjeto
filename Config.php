<?php 

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'loja';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

   if ($conexao->connect_error) {

    echo "Erro";
   
   }else {
    
    echo "Conectado com Sucesso ";
   }
?>