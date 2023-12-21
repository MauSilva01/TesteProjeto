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
                    <span><h3>Formulário de Identificação</h3></span>
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
        <form action="validacaoLogin.php" method="POST">
            <div class="form-row">
                <!-- Email input -->
                <div class="form-outline mb-4 col-md-6">
                    <label class="form-label" for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Digite seu e-mail" required />
                </div>
          
                <!-- Password input -->
                <div class="form-outline mb-4 col-md-6">
                    <label class="form-label" for="senha">Senha</label>
                    <input type="password" name="senha" class="form-control" placeholder="Digite sua senha" required />
                </div>
          
                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4 col-md-6">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="chkLembrar" checked />
                    <label class="form-check-label" for="chkLembrar">Lembrar </label>
                    </div>
                </div>
            
                <div class="col">
                    <!-- Simple link -->
                    <a href="#!">Esqueceu sua senha?</a>
                </div>
                </div>

          
                <div class="row mb-4 col-md-6">
                    <!-- Submit button -->
                    <button type="submit" name="submit" class="btn btn-primary btn-block mb-4 bg-dark">Entrar</button>
                    <a href="cadastro.php"><button type="button" class="btn btn-primary btn-block mb-4 bg-dark" >Registre-se</button></a>
                </div>
            </div>
        </form>
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