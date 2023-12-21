<?php

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Identificação</title>

    <!-- CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdn.awsli.com.br/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" > 

    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/dist/css/login.css" rel="stylesheet">
    
    <!-- Scripts do Bootstrap (jQuery e Popper.js) -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    <!--<script src="./assets/dist/js/color-modes.js"></script>
    <script src="./assets/dist/js/home.js"></script>-->
</head>
<body>

    <!-- area Header-->
    <nav class="navbar navbar-expand-md fixed-top" id="navHeader">
        <div class="container-fluid">
            <a class="navbar-brand" href="home.css"><img style="height: 52px;" src="./assets/img/logo.webp"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div id="divHeaderTitle">
                    <span><h3>Área Logada</h3></span>
                </div>

                <div class="dropdown" style="border: none">
                    <button  class="btn btn-secondary dropdown-toggle" style="background-color: transparent;"  data-bs-toggle="dropdown" aria-expanded="false">
                    Precisa de ajuda?<br>
                    <strong>Fale conosco</strong>
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">11-948686052</a></li>
                        <li><a class="dropdown-item" href="#">MaalvesSilva01@gmail.com</a></li>
                    </ul>
                </div>
            </div>
        </div>	 
    </nav>



    <!-- area Formulario-->
    <div class="container" id="divFormulario">
        <div class="form-row">
            <!-- Email input -->
            <div class="form-outline mb-4 col-md-6">
            <?php
                session_start();
              


                echo "<h3>Bem vindo, " . $_SESSION['userName'] . "</h3>";
            ?>
        </div>
        
        </div>
    </div>


    <!-- area Divisor 02-->
    <div class="row" id="divLineDivisor02">
        <hr/>
    </div>

    <!-- area Dados da empresa-->
    <div class="row" id="divRazaoSocial">
        <span>Loja Avaliação (Ficticia) - CNPJ: 09.739.736/9999-99 © Todos os direitos reservados.</span>
        <span>2023</span>
    </div>

    
</body>
</html>