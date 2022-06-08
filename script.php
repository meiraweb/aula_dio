<?php 
session_start();
ob_start();
// criando as categorias 
$categiorias=[];
$categorias[]='infantil';
$categorias[]='adolescente';
$categorias[]='jovem';
$categorias[]='adulto';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

// Informa que os campos não podem ser vazio 
if(empty($nome) || empty($idade)){
    $_SESSION['mensagem'] = '<h5 class="alert alert-danger">Campo Nome e Idade são obrigatórios!</h5>';
    header('Location: index.php' );
}

//contar as strings (letras)
if(strlen($nome) > 40){
    $_SESSION['mensagem'] =  '<h5 class="alert alert-danger">O Nome muito extenso, por favor abrevie.</h5>';
    header('Location: index.php' );
}

//contar os numeros da idade
if(!is_numeric($idade) || strlen($idade) >=3){
    $_SESSION['mensagem'] =  '<h5 class="alert alert-danger">A Idade deve conter no máximo 3 caracteres e somente números.</h5>';
    header('Location: index.php' );
}


if($idade >= 8 && $idade <=12){
    for($i=0; $i<=count($categorias); $i++){
        if($categorias[$i]=='infantil')
        echo "O nadador ". $name. "compete na categoria infantil";
    }
}elseif($idade >= 13 && $idade <=18){
    for($i=0; $i<=count($categorias); $i++){
    if($categorias[$i]=='adolescente')
    echo "O nadador ". $name. "compete na categoria adolescente";
    }
}elseif($idade >= 19 && $idade <=35){
    for($i=0; $i<=count($categorias); $i++){
    if($categorias[$i]=='jovem')
    echo "O nadador ". $name. "compete na categoria jovem";
    }
}else{
    for($i=0; $i<=count($categorias); $i++){
        if($categorias[$i]=='adulto')
        echo "O nadador ". $name. "compete na categoria adulto";
    }
    
}
