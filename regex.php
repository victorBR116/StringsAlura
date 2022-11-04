<?php

$telefone = ['(11) 99577 - 4642', '(22) 98298 - 9239', '(72) 93293 - 9238'];

foreach ($telefone as $telefone){
    $regex = '/^\(([0-9]{2})\) (9?[0-9]{4} - [0-9]{4})$/';
    $telefoneValido = preg_match(
        $regex, 
        $telefone,
        $correspondecias
    );

    //var_dump($correspondecias);
    if ($telefoneValido){
        echo 'Telefone valido' . PHP_EOL;
    }else{
        echo 'Telefone inválido' . PHP_EOL;
    }

   echo preg_replace(
        $regex,
        '(XX) \2',
        $telefone
    ) . PHP_EOL;
}