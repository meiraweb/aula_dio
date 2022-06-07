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

//var_dump($nome);
//var_dump($idade);

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
