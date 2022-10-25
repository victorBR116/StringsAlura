<?php

$nome = 'Josue Santana';

$EhDaMinhaFamilia = str_contains($nome, 'Santana');

if ($EhDaMinhaFamilia){
    echo "Sim, " . $nome . " é da família.";
}else{
    echo "$nome, não é da família.";
}