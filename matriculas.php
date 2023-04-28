<?php 

$alunos2021 = [
    'Clara',
    'Joao',
    'Erick',
    'Vanessa',
    'Diego'
];

$novosAlunos = [
    'Nico',
    'Luffy',
    'Zoro',
    'Franky',
    'Sanji'
];

//o segundo parametro é usado o spread operator que é de espalhar
$alunos2022 = array_merge($alunos2021, $novosAlunos);

//usando o spread unpacking
$novoArray = [...$alunos2021, "Nami", ...$novosAlunos];

//Exemplo de spread, vc pode chamar a função com qualquer quantidade de argumentos. os tipos a ser passado no parametro tem que ser o msm no momento da cahamda da função e eles seram juntos
function spread(int ...$alunos)
{
    # code...
}

spread(1, 2 ,3);

//outro exemplo só que agora o inverso
function funcao(int $a, int $b, int $c)
{

}

funcao(...[1,2,3]);

//ADICIONAR NO ARRAY
//Array push, vc pode passar varios elementos de uma vez, podendo desempacotar um array. Passa por referencia o array
array_push($alunos2022, 'Alice', 'Alex', 'Kellyne');

//add unico elemento
$alunos2022[] = 'luiz';

//Adicionar no inicio
array_unshift($alunos2022, 'Debora', 'Amanda');

//Pegar o primeiro elemento como retorno e o remove do array
array_shift($alunos2022);

//Pegar o ultimo elemento, o retira do array e ordena novamente as chaves numericas.
array_pop($alunos2022);






