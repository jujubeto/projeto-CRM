<?php

include "db.php";

include "header.php";

if(isset($_GET['pagina'])){
    $pagina = $_GET['pagina'];
}else{
    $pagina = 'home';
}

switch($pagina){
    case 'empresa': include 'view/empresa.php'; break;
    case 'contato': include 'view/contato.php'; break;
    case 'endereco': include 'view/endereco.php'; break;
    case 'info': include 'view/info.php'; break;
    case 'infocomp': include 'view/infocomp.php'; break;
    case 'inserir_cadastro': include 'view/inserir_cadastro.php'; break;
    case 'inserir_excell': include 'view/inserir_excell.php'; break;
    case 'pesquisa': include 'view/pesquisa.php'; break;
    case 'processa_pesquisa': include 'view/processa_pesquisa.php'; break;
    default: include 'view/home.php'; break;
}

include "footer.php";