<?php

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adoslecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

var_dump($nome);
var_dump($idade);
return 0;

if ($idade >= 6 && $idade <= 12)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'infantil')
            echo "O nadador ",$nome, ", com idade ",$idade, " anos, compete na categoria infantil";
    }
}
elseif ($idade >= 13 && $idade <= 18)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adoslecente')
            echo "O nadador ",$nome, ", com idade ",$idade, " anos, compete na categoria adoslecente";
    }
}
else
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adulto')
            echo "O nadador ",$nome, ", com idade ",$idade, " anos, compete na categoria adulto";
    }
}
