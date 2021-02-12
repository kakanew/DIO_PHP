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
    return;
}

elseif (strlen($nome) < 3) // verifica se é maior que 3 caracteres
{
    $_SESSION['mensagem de erro'] = 'O nome deve conter mais de 3 caracteres.';
    header('location: index.php');
    return;
}

elseif (strlen($nome) > 40) // verifica se for maior que 40 caracteres
{
    $_SESSION['mensagem de erro'] = 'O nome é muito extenso! Limite 40 caradteres.';
    header('location: index.php');
    return;
}

elseif (!is_numeric($idade)) // verifica se é número
{
    $_SESSION['mensagem de erro'] = 'A idade deve ser preenchida com números';
    header('location: index.php');
    return;
}


if ($idade >= 6 && $idade <= 12)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'infantil')
        {
            $_SESSION['mensagem de sucesso'] = 'O nadador compete na categoria infantil';
                header('location: index.php');
                return;
        }
    }
}
elseif ($idade >= 13 && $idade <= 18)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adolescente')
        {
            $_SESSION['mensagem de sucesso'] = 'O nadador compete na categoria adoslecente';
                header('location: index.php');
                return;
        }

    }
}
elseif ($idade >= 18 && $idade <= 130)
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'adulto')
        {
            $_SESSION['mensagem de sucesso'] = 'O nadador compete na categoria adulto';
                header('location: index.php');
                return;
        }
    }
}
else
{
    for ($i = 0; $i <= count($categorias); $i++)
    {
        if ($categorias[$i] == 'bebe')
        {
            $_SESSION['mensagem de sucesso'] = 'Não pode competir pois é um bebê.';
                header('location: index.php');
                return;
        }
    }
}
