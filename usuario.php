<?php

$email = "Víctor@gmail.com";
$senha = "ççççç";

echo mb_strlen($senha) . PHP_EOL;

if (mb_strlen($senha) < 8){
    echo "Senha fraca" . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;