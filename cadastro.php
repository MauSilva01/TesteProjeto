<?php 

    if(isset($_POST['submit']))
    {

        include_once('config.php');

        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        $endereco = $_POST['endereco'];       
        $complemento = $_POST['complemento']; 
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado']; 

        $query = mysqli_prepare($conexao, "INSERT INTO cadastros(nome, sobrenome, email, senha, endereco, complemento, cidade, estado) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");

        // Verificar se a preparação da consulta foi bem-sucedida
        if ($query) {
            // Vincular parâmetros à consulta preparada
            mysqli_stmt_bind_param($query, "ssssssss", $nome, $sobrenome, $email, $senha, $endereco, $complemento, $cidade, $estado);
    
            // Executar a consulta preparada
            mysqli_stmt_execute($query);
    
            // Fechar a consulta preparada
            mysqli_stmt_close($query);
        } else {
            // Lidar com o erro de preparação da consulta, se houver
            echo "Erro na preparação da consulta: " . mysqli_error($conexao);
        }
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Bem Vindo</title>

    <!-- CSS-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://cdn.awsli.com.br/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" > 

    <link href="./assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="./assets/dist/css/cadastro.css" rel="stylesheet">
    
    <!-- Scripts do Bootstrap (jQuery e Popper.js) -->

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="./assets/dist/js/bootstrap.bundle.min.js"></script>
    <!--<script src="./assets/dist/js/color-modes.js"></script>
    <script src="./assets/dist/js/home.js"></script>-->


    <script>
$(document).ready( function() {
   /* Executa a requisição quando o campo CEP perder o foco */
   $('#cep').blur(function(){
           /* Configura a requisição AJAX */
           $.ajax({
                url : 'consultaCep.php', /* URL que será chamada */ 
                type : 'POST', /* Tipo da requisição */ 
                data: 'cep=' + $('#cep').val(), /* dado que será enviado via POST */
                dataType: 'json', /* Tipo de transmissão */
                success: function(data){
                    if(data.sucesso == 1){
                        $('#endereco').val(data.rua);
                        $('#bairro').val(data.bairro);
                        $('#cidade').val(data.cidade);
                        $('#estado').val(data.estado);
 
                        $('#numero').focus();
                    }
                }
           });   
   return false;    
   })
});

    </script>

</head>
<body>

    <!-- area Header-->
    <nav class="navbar navbar-expand-md fixed-top" id="navHeader">
        <div class="container-fluid">
            <a class="navbar-brand" href="login.php"><img style="height: 52px;" src="./assets/img/logo.webp"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon" href="login.php"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div id="divHeaderTitle">
                    <span><h3> Formulário de Cadastro </h3></span>
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
        <form class="needs-validation" action="cadastro.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nome">Nome</label>
                    <input type="text" name="nome" id="nome" class="form-control" placeholder="Digite seu nome" required>
                    <div id = "nomeFeedback" class="invalid-feedback">
                        Please choose a username.
                    </div>
                </div>
                <div class="form-group col-md-6">
                    <label for="sobrenome">Sobrenome</label>
                    <input type="text" class="form-control" name="sobrenome" id="sobrenome" placeholder="Digite seu Sobrenome" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" name="email" id="email" placeholder="Digite seu Email" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="senha">Senha</label>
                    <input type="password" class="form-control" name="senha" id="senha" placeholder="Digite sua Senha" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="Cep">Cep</label>
                    <input type="text" class="form-control" name="cep" id="cep" placeholder="Digite seu CEP" required>
                </div>


                <div class="form-group">
                    <label for="endereco">Endereço</label>
                    <input type="text" class="form-control" name="endereco" id="endereco" placeholder="Digite seu endereço" required>
                </div>
                <div class="form-group">
                    <label for="complemento">Complemento</label>
                    <input type="text" class="form-control" name="complemento" id="complemento" placeholder="Apartamento, casa, sítio...">
                </div>
                <div class="form-group col-md-6">
                    <label for="cidade">Cidade</label>
                    <input type="text" class="form-control" name="cidade" id="cidade" placeholder="Digite sua Cidade..." required>
                </div>
                <div class="form-group col-md-4">
                    <label for="estado">Estado</label>
                    <select id="estado" class="form-control" name="estado" required>
                        <option selected hidden>Escolha...</option>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                    </select>
                </div>
                <div class="form-row">
                    <button type="submit" name="submit" id="submit" class="btn btn-primary bg-dark">Enviar</button>
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