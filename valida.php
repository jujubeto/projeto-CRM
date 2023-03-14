<?php

session_start();
include 'db.php';

$dados = mysqli_query($conexao, $query) or die("ERRO!");
while ($select = mysqli_fetch_array($dados)) {
    $idAdm = $select['idAdm'];
    $emaildb = $select['email'];
    $passworddb = $select['senha'];
}
//bingouls@gmail.com
//12345

if ((isset($_POST['email'])) && (isset($_POST['password']))) {
    $email = mysqli_real_escape_string($conexao, $_POST['email']);
    $password = mysqli_real_escape_string($conexao, $_POST['password']);
    if (($email == $emaildb) && ($password == $passworddb)) {
        //$password = md5($password);
        echo "<script language='javascript' type='text/javascript'>
                alert('Entrando!');window.location ='index.php'</script>";
    } else {
        $_SESSION['loginErro'] = "Email ou senha inválida";
        echo "<script language='javascript' type='text/javascript'>
            alert('Erro, senha ou usuário errado!');window.location ='login.php'</script>";
    }
} else {
    $_SESSION['loginErro'] = "Email ou senha inválida";
    echo "<script language='javascript' type='text/javascript'>
        alert('Dados não recebidos!');window.location ='login.php'</script>";
}

?>


<!--?php

//REALIZANDO LOGIN COM VERIFICAÇÃO ATRAVÉS DO MÉTODO PDO 

//INCLUINDO O ARQUIVO DE CONFIGURAÇÃO DO BANCO COM PDO

require("pdoconfig.php");


//VERIFICANDO SE OS DADOS DO FORMULÁRIO FORAM PASSADOS E SE A CONEXÃO ESTÁ OK!
if (isset($_POST['email']) && isset($_POST['password']) && $conn != null) {

    //SELECIONANDO DO BANCO SOMENTE OS VALORES QUE FOREM IGUAIS AOS PASSADOS PELO FORMULÁRIO
    $query = $conn->prepare("SELECT * FROM colaborador where email = ? and senha = ?");
    //ADICIONANDO OS DADOS A UM  ARRAY 'EMAIL' E 'SENHA'!!
    $query->execute(array($_POST["email"], $_POST["password"]));
    //SE A QUERY(CONSULTA)RETORNAR LINHA > 1, SIGNIFICA QUE ENCONTROU DADOS QUE BATEM COM O ENVIADO PELO USUÁRIO
    if ($query->rowCount()) {
        //ADICIONANDO OS DADOS RETORNADO PELA LINHA ACIMA EM UM ARRAY ATRAVÉS DO MÉTODO PDO
        $user = $query->fetchAll(PDO::FETCH_ASSOC)[0];
        //INICIO DE SESSÃO
        session_start();
        //ENVIANDO NA SESSÃO OS DADOS DA VARIÁVEL USER
        $_SESSION['email'] = array($user['email'], $user['adm']);
        //REDIRECIONANDO A PÁGINA DO FORMULÁRIO
        echo "<script language='javascript' type='text/javascript'>
                alert('Redirecionando!');window.location ='teste.php'</script>";
    } else {
        echo "<script language='javascript' type='text/javascript'>
                alert('Email ou Senha errados!');window.location ='index.php'</script>";
    }
} else {
    echo "<script language='javascript' type='text/javascript'>
                alert('Não reconhecemos seus dados!');window.location ='index.php'</script>";
}
?-->