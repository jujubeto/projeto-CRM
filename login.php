<?php
    session_start()
?>
<!DOCTYPE html>
<html lang="pt-BT">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN CRM Empresas</title> 
    <link rel="stylesheet" href="assets/css/style_login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body id="login" style="background-color: black;">
<div class = "container">
        <div class = "form-image">
            <img src = "img/loud.png">
        </div>
        <div class = "form">
            <form action="valida.php" method="post" onSubmit="return Entrar">
                <div class = "form-header">
                    <div class = "title">
                        <h1>LOGIN <span>CRM</span></h1>
                    </div>
                </div>
                <div class = "input-group">
                    
                    <div class = "input-box">
                        <label for="email">Email</label>
                        <input id="email" type="text" name="email" placeholder="digite seu Email.." required>    
                    </div>

                    <div class = "input-box">
                        <label for="password">Senha</label>
                        <input id="password" type="password" name="password" placeholder="digite sua senha" required>    
                    </div>
                    
                    <div class = "login-button"> 
                        <button type="submit" value="Entrar" >Entrar</button>
                        
                    </div>

                    <!--<div class = "login-button"> 
                        <button  value="Cadastrar"><a style="text-decoration: none; color: white;" href="cadastro.php">Cadastrar</a></button>
                    </div>-->
                </div>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
</body>

</html>