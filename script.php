<?php 
// criando as categorias 
$categiorias=[];
$categorias[]='infantil';
$categorias[]='adolescente';
$categorias[]='jovem';
$categorias[]='adulto';

//print_r($categorias);
$nome = $_POST['nome'];
$idade = $_POST['idade'];


// Informa que os campos não podem ser vazio 
if(empty($nome && $idade)){
    echo 'Campo Nome e Idade são obrigatórios!';
    return;
}

//contar as strings (letras)
if(strlen($nome) < 3){
    echo 'O Nome deve conter no mínimo 3 caracteres.';
    return;
}

//contar as strings (letras)
if(strlen($nome) > 40){
    echo 'O Nome muito extenso, por favor abrevie.';
    return;
}

//contar os numeros da idade
if(!is_numeric($idade)){
    echo 'A Idade deve conter no máximo 3 caracteres e somente números.';
    return;
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
