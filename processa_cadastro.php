<?php

include 'db.php';

$nomeEmpresa = $_POST['nomeEmpresa'];
$Segmento = $_POST['Segmento'];
$nomeContato = $_POST['nomeContato'];
$CNPJ = $_POST['CNPJ'];
$telefonePrimario = $_POST['telefonePrimario'];
$telefonePrincipalEmpresa = $_POST['telefonePrincipalEmpresa'];
$WhatsappEmpresa = $_POST['WhatsappEmpresa'];
$TelefoneDireto = $_POST['TelefoneDireto'];
$EmailEmpresa = $_POST['EmailEmpresa'];
$EmailProprietário = $_POST['EmailProprietário'];
$AnoFundacao = $_POST['AnoFundacao'];
$diasFuncionamento = $_POST['diasFuncionamento'];
$HorarioFuncionamento = $_POST['HorarioFuncionamento'];
$Logradouro = $_POST['Lorgadouro'];
$Numero = $_POST['Numero'];
$Bairro = $_POST['Bairro'];
$CEP = $_POST['CEP'];
$Cidade = $_POST['Cidade'];
$uf = $_POST['uf'];
$FormasPagamento = $_POST['FormasPagamento'];
$PossuiSite = $_POST['PossuiSite'];
$PossuiRedesSociais = $_POST['PossuiRedesSociais'];
$PossuiFotosDosServiçosouEmpresa = $_POST['PossuiFotosDosServiçosouEmpresa'];
$InformacoesComplementares = $_POST['InformacoesComplementares'];



$query = "INSERT INTO cadastro (nomeEmpresa, Segmento, nomeContato, CNPJ, telefonePrimario, telefonePrincipalEmpresa,
                                WhatsappEmpresa, TelefoneDireto, EmailEmpresa, EmailProprietário, AnoFundacao,
                                diasFuncionamento, HorarioFuncionamento, Lorgadouro, Numero, Bairro, CEP,
                                Cidade, uf, FormasPagamento, PossuiSite, PossuiRedesSociais,
                                PossuiFotosDosServiçosouEmpresa, InformacoesComplementares)
          VALUES ('$nomeEmpresa', '$Segmento', '$nomeContato', '$CNPJ', '$telefonePrimario', '$telefonePrincipalEmpresa',
                 '$WhatappEmpresa', '$TelefoneDireto', '$EmailEmpresa', '$EmailProprietário', '$AnoFundacao',
                 '$diasFuncionamento', '$HorarioFuncionamento', '$Logradouro', '$Numero', '$Bairro', '$CEP',
                 '$Cidade', '$uf', '$FormasPagamento', '$PossuiSite', '$PossuiRedesSociais', '$PossuiFotosDosServiçosouEmpresa',
                 '$InformacoesComplementares')";

mysqli_query($conexao, $query);
echo "<script language='javascript' type='text/javascript'>  
      alert('Instituição cadastrada com Sucesso!!');window.location ='index.php?pagina=empresa'</script>         ";
?>