<?php

$string = <<<FIM
Alo
Teste
Eita
EASFF
FIM;

echo $string . PHP_EOL;









function gerarEmail(string $nome){

    $conteudoEmail = <<<FINAL
    
    'dear, $nome!

    Estou com um problema na borracharia.
    {Problema}

    {Assinatura}'

    FINAL;


    echo $conteudoEmail;
}

gerarEmail('Victor');