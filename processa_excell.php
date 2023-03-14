<?php

error_reporting(0);
ini_set("display_errors", 0 );

include ('db.php');

$dados = $_FILES ['arquivo'];


if(!empty($_FILES['arquivo']['tmp_name'])){
    $arquivo = new DOMDocument();
    $arquivo->load($_FILES['arquivo']['tmp_name']); 

    $linhas = $arquivo->getElementsByTagName("Row");

    $primeira_linha = true;

    foreach($linhas as $linha){
        if($primeira_linha == false){
            $nomeEmpresa = $linha->getElementsByTagName('Data')->item(0)->nodeValue;
            $Segmento = $linha->getElementsByTagName('Data')->item(1)->nodeValue ;
            $nomeContato = $linha->getElementsByTagName('Data')->item(2)->nodeValue;
            $CNPJ = $linha->getElementsByTagName('Data')->item(3)->nodeValue;
            $telefonePrimario = $linha->getElementsByTagName('Data')->item(4)->nodeValue;
            $telefonePrincipalEmpresa = $linha->getElementsByTagName('Data')->item(5)->nodeValue; 
            $WhatsappEmpresa = $linha->getElementsByTagName('Data')->item(6)->nodeValue;
            $TelefoneDireto = $linha->getElementsByTagName('Data')->item(7)->nodeValue;
            $EmailEmpresa = $linha->getElementsByTagName('Data')->item(8)->nodeValue;
            $EmailProprietário = $linha->getElementsByTagName('Data')->item(9)->nodeValue; 
            $AnoFundacao = $linha->getElementsByTagName('Data')->item(10)->nodeValue;
            $diasFuncionamento = $linha->getElementsByTagName('Data')->item(11)->nodeValue; 
            $HorarioFuncionamento = $linha->getElementsByTagName('Data')->item(12)->nodeValue; 
            $Logradouro = $linha->getElementsByTagName('Data')->item(13)->nodeValue;
            $Numero = $linha->getElementsByTagName('Data')->item(14)->nodeValue;
            $Bairro = $linha->getElementsByTagName('Data')->item(15)->nodeValue;
            $CEP = $linha->getElementsByTagName('Data')->item(16)->nodeValue;
            $Cidade = $linha->getElementsByTagName('Data')->item(17)->nodeValue; 
            $uf = $linha->getElementsByTagName('Data')->item(18)->nodeValue;
            $FormasPagamento = $linha->getElementsByTagName('Data')->item(19)->nodeValue; 
            $PossuiSite = $linha->getElementsByTagName('Data')->item(20)->nodeValue;
            $PossuiRedesSociais = $linha->getElementsByTagName('Data')->item(21)->nodeValue; 
            $PossuiFotosDosServiçosouEmpresa = $linha->getElementsByTagName('Data')->item(22)->nodeValue; 
            $InformacoesComplementares = $linha->getElementsByTagName('Data')->item(23)->nodeValue;

            $query = "INSERT INTO cadastro (nomeEmpresa, Segmento, nomeContato, CNPJ, telefonePrimario, telefonePrincipalEmpresa,
                                WhatsappEmpresa, TelefoneDireto, EmailEmpresa, EmailProprietário, AnoFundacao,
                                diasFuncionamento, HorarioFuncionamento, Lorgadouro, Numero, Bairro, CEP,
                                Cidade, uf, FormasPagamento, PossuiSite, PossuiRedesSociais,
                                PossuiFotosDosServiçosouEmpresa, InformacoesComplementares)
                        VALUES ('$nomeEmpresa', '$Segmento', '$nomeContato', '$CNPJ', '$telefonePrimario', '$telefonePrincipalEmpresa',
                                '$WhatsappEmpresa', '$TelefoneDireto', '$EmailEmpresa', '$EmailProprietário', '$AnoFundacao',
                                '$diasFuncionamento', '$HorarioFuncionamento', '$Logradouro', '$Numero', '$Bairro', '$CEP',
                                '$Cidade', '$uf', '$FormasPagamento', '$PossuiSite', '$PossuiRedesSociais', '$PossuiFotosDosServiçosouEmpresa',
                                '$InformacoesComplementares')";

            mysqli_query($conexao, $query);
            

        }
        $primeira_linha = false;
    }
    
}
echo "<script language='javascript' type='text/javascript'>  
      alert('Instituição cadastrada com Sucesso!!');window.location ='index.php?pagina=empresa'</script>         ";
?>
