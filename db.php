<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "crm";

$conexao = mysqli_connect($server, $user, $password, $db);

$query = "SELECT * FROM cadastro";
$consulta_cadastro = mysqli_query($conexao, $query);

$query = "SELECT * FROM adm";
$consulta_adm = mysqli_query($conexao, $query);
