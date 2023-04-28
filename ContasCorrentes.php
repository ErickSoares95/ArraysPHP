<?php

// $contas1 =[
//     'titular' => 'Erick',
//     'saldo' => 1000
// ];

// $contas2 =[
//     'titular' => 'roberto',
//     'saldo' => 3000
// ];

// $contas3 =[
//     'titular' => 'Maria',
//     'saldo' => 2500
// ];

$contasCorrentes = [
   1078788093 => [
        'titular' => 'Erick',
        'saldo' => 1000
    ],
   1078788092 => [
        'titular' => 'roberto',
        'saldo' => 3000
    ],
   1077878049 => [
        'titular' => 'Maria',
        'saldo' => 2500
    ]
   ];

   //adionando um item
   $contasCorrentes[11111111111] =
   [
    'titular' => 'carol',
    'saldo' => 0
   ];

foreach ($contasCorrentes as $cpf => $conta) {
    //list classico
    // list('titular' => $titular, 'saldo' => $saldo) = $conta;
    //php +7.1
    //{$conta['titular']} chamando diretamento no echo
    //com aspa dulpas $conta[titular]
    //linha 47 passando para variaveis
    ['titular' => $titular, 'saldo' => $saldo] = $conta;
    echo "$cpf $conta[titular] $saldo " . PHP_EOL;
}

//remover item de uma lista
unset($contasCorrentes[11111111111]);

