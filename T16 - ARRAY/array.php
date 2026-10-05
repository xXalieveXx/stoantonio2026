<?php
$filmes = [
    ["titulo" => "Inception", "genero" => "Ficção Científica"],
    ["titulo" => "O Apadrinhado", "genero" => "Drama"],
    ["titulo" => "Interstellar", "genero" => "Ficção Científica"],
    ["titulo" => "Matrix", "genero" => "Ação"]
];

echo "Filme 1: " . $filmes[0]["titulo"] . " - Género: " . $filmes[0]["genero"] . "<br>";
echo "Filme 2: " . $filmes[2]["titulo"] . " - Género: " . $filmes[2]["genero"];
?>