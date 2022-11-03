<?php

$telefone = ['sad (11) 99577 - 4642', '(22) 98298 - 9239 sada', '(72) 93293 - 9238'];

foreach ($telefone as $telefone){
    $telefoneValido = preg_match(
        '/\([0-9]{2}\) 9?[0-9]{4} - [0-9]{4}/', 
        $telefone,
        $correspondecias
    );

    var_dump($correspondecias);
    if ($telefoneValido){
        echo 'Telefone valido' . PHP_EOL;
    }else{
        echo 'Telefone inválido' . PHP_EOL;
    }
}