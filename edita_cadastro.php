<?php 

include 'db.php';

$idcadastro = $_POST['idcadastro'];
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

$query = "UPDATE cadastro 
          SET nomeEmpresa='$nomeEmpresa', 
              Segmento='$Segmento',
              nomeContato='$nomeContato',
              CNPJ='$CNPJ',
              telefonePrimario='$telefonePrimario',
              telefonePrincipalEmpresa='$telefonePrincipalEmpresa',
              WhatsappEmpresa='$WhatsappEmpresa',
              TelefoneDireto='$TelefoneDireto',
              EmailEmpresa='$EmailEmpresa',
              EmailProprietário='$EmailProprietário',
              AnoFundacao='$AnoFundacao',
              diasFuncionamento='$diasFuncionamento',
              HorarioFuncionamento='$HorarioFuncionamento',
              Lorgadouro='$Logradouro',
              Numero='$Numero',
              Bairro='$Bairro',
              CEP='$CEP',
              Cidade='$Cidade',
              uf='$uf',
              FormasPagamento='$FormasPagamento',
              PossuiSite='$PossuiSite',
              PossuiRedesSociais='$PossuiRedesSociais',
              PossuiFotosDosServiçosouEmpresa='$PossuiFotosDosServiçosouEmpresa',
              InformacoesComplementares='$InformacoesComplementares' WHERE idcadastro = $idcadastro";

#print($query);
mysqli_query($conexao, $query);

echo "<script language='javascript' type='text/javascript'>  
      alert('Instituição editada com Sucesso!!');window.location ='index.php?pagina=empresa'</script>         ";
?>