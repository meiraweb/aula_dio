<?php 
session_start();

//<--------------Mensagens de sucesso ---------------->

function setarMensagemSucesso(string $mensagem): void 
{
    $_SESSION['mensagem de sucesso'] = $mensagem;
}

//Php 7 ou >
function obterMensagemSucesso(): ?string 
{
    if(isset($_SESSION['mensagem de sucesso']))
    return $_SESSION['mensagem de sucesso'];
    return NULL;
}

function removerMensagemSucesso():void
{
    if(isset($_SESSION['mensagem de sucesso']))
        unset($_SESSION['mensagem de sucesso']);
}

//<--------------Mensagens de erro ---------------->
function setarMensagemErro(string $mensagem): void 
{
    $_SESSION['mensagem de erro'] = $mensagem;
}

//Php 7 ou >
function obterMensagemErro(): ?string 
{
    if(isset($_SESSION['mensagem de erro']))
        return $_SESSION['mensagem de erro'];
    return NULL;
}

function removerMensagemErro():void
{
    if(isset($_SESSION['mensagem de erro']))
        unset($_SESSION['mensagem de erro']);
}
?>