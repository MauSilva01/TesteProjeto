<?php

    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //acessa
        include_once('config.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM cadastros where email = '$email' and senha = '$senha'";

        $result = $conexao->query($sql) ;

        if (mysqli_num_rows($result) < 1) 
        {
           header('location: login.php');

        }else{

            echo "1";
            //Pega os dados do usuario
            $row = mysqli_fetch_array($result);

            //Guarda o nome e id do usuario
            session_start();
            $_SESSION['userId'] = (string) $row['id'];
            $_SESSION['userName'] = (string) $row['nome'];
            //$_SESSION['userName'] = "1";
  
            //Manda para área Logada
            header('location: main.php');
        }

    }else
    {
        //nao acessa

        header('location: login.php');   
     }


?>