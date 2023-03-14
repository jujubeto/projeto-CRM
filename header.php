<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <title>CRM Empresas</title>
</head>

<body>
    <header>
        <div class="left">
            <h3>CRM <span>Empresas</span> </h3>
        </div>
        <div class="rigth">
            <a href="?pagina=inserir_cadastro" class="sair_btn">Inserir um Cadastro</a>
            <a href="login.php" class="sair_btn">Sair</a>
            <a href="?pagina=pesquisa" class="sair_btn">Pesquisar</a>
        </div>
    </header>
    <div class="sidebar">
        <center>
            <img src="img/loud.png" class="image" alt="">
            <h2>VALORANT</h2>
        </center>
        <a href="?pagina=empresa">
            <ion-icon name="business"></ion-icon><span>Empresa</span>
        </a>
        <a href="?pagina=contato">
            <ion-icon name="call"></ion-icon><span>Contato</span>
        </a>
        <a href="?pagina=endereco">
            <ion-icon name="pin"></ion-icon><span>Endereço</span>
        </a>
        <a href="?pagina=info">
            <ion-icon name="text"></ion-icon><span>Informações</span>
        </a>
        <a href="?pagina=infocomp">
            <ion-icon name="notifications-outline"></ion-icon><span>Info. Complementares</span>
        </a>
        <a href="?pagina=inserir_excell">
            <ion-icon name="cloud-upload-outline"></ion-icon><span>Inserir Arquivo XML</span>
        </a>
    </div>
    <div id="conteudo" class="container">