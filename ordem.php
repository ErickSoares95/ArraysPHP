<?php 

$notas = [
    10,
    8,
    9,
];

$arrayOrdedanos = $notas;

//modifica a referencia e ordena de forma crescente
sort($arrayOrdedanos);

//modifica a referencia e ordena de forma decrescente
rsort($arrayOrdedanos);

//Para manter as chaves associativas caso tenha usa asort e arsort
//ksort para ordenar a partir das chave associativa. krsort decrescente

//Criar um critério de ordenação para usar o usort

// $notas = [
//     [
//         'aluno' => 'Erick',
//         'nota' => 10
//     ],
//     [
//         'aluno' => 'Joao',
//         'nota' => 9
//     ],
//     [
//         'aluno' => 'Clara',
//         'nota' => 7
//     ]
//     ];

    $notas = [        
        'Clara' => 7,     
        'Joao' => 9, 
        'Erick' => 10
        
    ];
    
    
//ordecação de forma crescente. decrescente é so inverter as notas
function ordenarNotas(array $nota1, array $nota2) :int
{
    return $nota1['nota']<=>$nota2['nota'];
}

// function ordenarNotas(array $nota1, array $nota2) :int
// {
//     if ($nota1['nota']>$nota2['nota']) {
//         return -1;
//     }
//     if ($nota2['nota']>$nota1['nota']) {
//         return 1;
//     }

//     return 0;
// }

//callbacks(Função anonimais) podem ser passados como parametros entre asplas simples.
usort($notas, 'ordenarNotas');

var_dump($notas);

//Verificar tipo e uma variavel;
echo gettype($notas);

//verificar se é um array
is_array($notas);

//Verificar se as chaves do array é o default que o indice é numerico e poder iterar através de um for
array_is_list($notas);

//Veriricar se no array existe determinada chave. primeiro parametro é a chave segundo o array que vai ser buscado.
array_key_exists('Erick', $notas);

//para verificar se a chave existe e se o valor é nulo
isset($notas['Erick']);

//Verificar se existe um determinado valor dentro do array. Se passar o terceiro parametro(true) ele verifica se é === 
in_array(10, $notas);

//buscar a chave que tem determinado valor e caso não tenha retorna falso, também tem o terceiro parametro strict(true) ===
$pessoaQueTirou10 = array_search(10, $notas);




