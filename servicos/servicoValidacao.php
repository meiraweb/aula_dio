<?php
//declare(strict_types=1);
//require_once('./servicos/servicosValidacao.php');


function validarNome(string $nome):bool{
    if(empty($nome)){
        setarMensagemErro('<h5 class="alert alert-danger">Campo Nome é obrigatório!</h5>');
        return false;
    }

    //contar as strings (letras)
    else if(strlen($nome) < 3){
        setarMensagemErro( '<h5 class="alert alert-danger">O Nome não pode conter menos de 3 caracteres.</h5>');
        return false;
    }

    //contar as strings (letras)
    else if(strlen($nome) > 40){
        setarMensagemErro( '<h5 class="alert alert-danger">O Nome muito extenso, por favor abrevie.</h5>');
        return false;
    }
    return true;
}

function validarIdade(string $idade):bool
{
//contar os numeros da idade
if(!is_numeric($idade)){
    setarMensagemErro('<h5 class="alert alert-danger">A Idade deve conter somente números.</h5>');
    return false;
}
return true;
}

?>