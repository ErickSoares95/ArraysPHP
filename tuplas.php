<?php 

//List: Vc pega baseado nas posições de um array e coloca em variaveis

$dados = ["Erick", 10, 27];

list($nome, $nota, $idade) = $dados;
//Mesmo resultado
[$nome, $nota, $idade] = $dados;

$dados1 = [
    "nome"  => "Erick", 
    "nota"  => 10, 
    "idade" => 27
];

["nome" => $nome, "nota" => $nota, "idade" => $idade] = $dados1;









$contas = [
    [
        'titular' => 'Vinicius Dias',
        'saldo' => 100
    ],
    [
        'titular' => 'Maria Joaquina',
        'saldo' => 1000
    ],
    [
        'titular' => 'João da Silva',
        'saldo' => 800
    ],
];

foreach ($contas as ['titular' => $titular, 'saldo' => $saldo]) {
    echo "$titular possui $saldo reais" . PHP_EOL;
}

//Como transformar cada uma das chaves em uma variável
$dados2 = [
    "nome2"  => "Erick", 
    "nota2"  => 10, 
    "idade2" => 27
];
//novas variaveis nome2, nota2 e idade2
extract($dados2);

//compact faz o contrario ele pega a variavel coloca no array o nome da variavel se torna chave e e o valor é o valor do indice que é a chave
compact('nome2', 'nota2', 'idade2');