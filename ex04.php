<?php

function gerarSenha($tamanho = 8)
{
    $numeros = '0123456789';
    $letras = 'abcdefghijklmnopqrstuvwxyz';
    $letrasMaiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $especiais = '!@#$%^&*_+-=';
    $senha = '';

    $senha .= $numeros[rand(0, strlen($numeros) - 1)];
    $senha .= $letras[rand(0, strlen($letras) - 1)];
    $senha .= $letrasMaiusculas[rand(0, strlen($letrasMaiusculas) - 1)];     
    $senha .= $especiais[rand(0, strlen($especiais) - 1)];  
    $senha .= $numeros[rand(0, strlen($numeros) - 1)];
    $senha .= $letras[rand(0, strlen($letras) - 1)];
    $senha .= $letrasMaiusculas[rand(0, strlen($letrasMaiusculas) - 1)];     
    $senha .= $especiais[rand(0, strlen($especiais) - 1)];

    $senha = str_shuffle($senha);

    return $senha;
}

echo "Senha gerada: " . gerarSenha(8);