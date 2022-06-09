<?php 
session_start();
//include_once 'index.php';
include_once('servicos/servicoMensagemSessao.php');
include_once('servicos/servicoValidacao.php');
include_once('servicos/servicoCategoriaCompetidor.php');

$nome = $_POST['nome'];
$idade = $_POST['idade'];

defineCategoriaCompetidor($nome, $idade);
header("Location: index.php");


?>