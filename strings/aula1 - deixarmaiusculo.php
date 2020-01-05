<?php

$nome = "joao rangel";

$nome  = strtoupper($nome); //strtoupper() - deixar as letras em maiusculo  

echo $nome;

//em azul é uma funcao, dentro dos parenteses passo um argumento, ou seja, uma variavel

$nome = strtolower($nome); //deixar todas as letras minusculo;
echo "<br><br>";

echo $nome;

echo "<br><br>";

echo ucwords($nome); // a primeira letra de cada palavra sera maiuscula - Rafael Holanda

echo "<br><br>";

echo ucfirst($nome); // apenas a primeira letra maiuscula - Rafael holanda




?>