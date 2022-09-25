<?php

$categoria = [];
$categoria[] = "infantil";
$categoria[] = "adolescente";
$categoria[] = "adulto";
//print_r($categoria); //mostra o array completo, posição por posição organizado

$nome = "Cauã";
$id = 19;

//var_dump($nome); //informação do tipo da variável
//var_dump($id); //informação do tipo da variável

if($id >= 6 && $id<=12){
    for($i=0; $i<count($categoria); $i++) {
        if($categoria[$i] == 'infantil'){
            echo "O nadador " .$nome. ", de idade " .$id. " compete na categoria " .$categoria;
        }
    }
}
else if($id>=13 && $id<18){
    for($i=0; $i<count($categoria); $i++) {
        if($categoria[$i] == 'adolescente'){
            echo "O nadador " .$nome. ", de idade " .$id. " compete na categoria " .$categoria;
        }
    }
}
else{
    for($i=0; $i<count($categoria); $i++) {
        if($categoria[$i] == 'adulto'){
            echo "O nadador " .$nome. ", de idade " .$id. " compete na categoria " .$categoria;
        }
    }
}
