<?php

$nome = 'Víctor Hugo';
$email = "  Víctor@gmail.com  ";
$senha = "ççççç";

echo mb_strlen($senha) . PHP_EOL;

if (mb_strlen($senha) < 8){
    echo "Senha fraca" . PHP_EOL;
}

$posicaoDoArroba = strpos($email, '@');

$usuario = substr($email, 0, $posicaoDoArroba);

echo mb_strtoupper($usuario) . PHP_EOL;
echo substr($email, $posicaoDoArroba + 1) . PHP_EOL;

list($nome, $sobreNome) = explode(' ', $nome);

echo 'Nome: ', $nome . PHP_EOL;
echo 'Sobrenome: ', $sobreNome . PHP_EOL;

$csv = "Victor Hugo, 23, hugov6167@gmail.com";

var_dump(explode(',', $csv));

echo trim($email);