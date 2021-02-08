<?php
    session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adoslecente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';
$categorias[] = 'bebe';
//print_r($categorias);

$nome = $_POST['nome'];
$idade = $_POST['idade'];

//var_dump($nome);
//var_dump($idade);

if (empty($nome)) // verifica se está vazio
{
    $_SESSION['mensagem de erro'] = 'O nome não pode ser vazio, por favor preencha novamente.';
    header('location: index.php');
}

if (strlen($nome) < 3) // verifica se é maior que 3 caracteres
{
    $_SESSION['mensagem de erro'] = 'O nome deve conter mais de 3 caracteres.';
    header('location: index.php');
}

if (strlen($nome) > 40) // verifica se for maior que 40 caracteres
{
    $_SESSION['mensagem de erro'] = 'O nome é muito extenso! Limite 40 caradteres.';
    header('location: index.php');
}

if (!is_numeric($idade)) // verifica se é número
{
    $_SESSION['mensagem de erro'] = 'A idade deve ser preenchida com números';
    header('location: index.php');
}


if ($idade >= 6 && $idade <= 12)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'infantil')
            echo 'O nadador ',$nome, ', com idade ',$idade, ' anos, compete na categoria infantil';
    }
}
elseif ($idade >= 13 && $idade <= 18)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adolescente')
            echo 'O nadador ',$nome, ', com idade ',$idade, ' anos, compete na categoria adoslecente';
    }
}
elseif ($idade >= 18 && $idade <= 130)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adulto')
            echo 'O nadador ',$nome, ', com idade ',$idade, ' anos, compete na categoria adulto';
    }
}
else
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'bebe')
            echo 'O nadador ',$nome, ', com idade ',$idade, ' anos, não pode competir pois é um bebê.';
    }
}
