<?php 

$notasBimistre1 = [
    'Clara' => 7,
    'Joao' => 9,
    'Erick' => 10,
    'Vanessa' => 10,
    'Diego' => 6
];

$notasBimistre2 = [
    'Clara' => 7,
    'Joao' => 9,
    'Erick' => 10,
    'Vanessa' => 10
];

//Retorna os indeces e valores que tenham valores diferntes entre arrays
array_diff($notasBimistre1, $notasBimistre2);
//Retorna os indeces e valores que tenham chaves diferntes entre arrays
array_diff_key($notasBimistre1, $notasBimistre2);
//Retorna comparando tanto chave como valores diferentes
array_diff_assoc($notasBimistre1, $notasBimistre2);

//Como pegar os alunos faltantes
$alunosFaltantes = array_diff_key($notasBimistre1, $notasBimistre2);
//retornar apenas as chaves, passando a ser um novo array com novos indices. segundo parametro para casa queira especificar uma chave 'Erick'
$chaves = array_keys($alunosFaltantes);

//Retornar valores do array
$valores = array_values($notasBimistre1);

//Para formar um novo array combinando dois arrays, primeiro parametro chave e segundo valores. Eles tem que ter o mesmo tamanho se não dá erro
array_combine($chaves, $valores);

//inverte chave e valor
array_flip($notasBimistre1);


