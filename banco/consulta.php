<?php
include "conecta.php";
echo "<br><b>Mostrando todos os registros</b><br><br>";
$sql = "SELECT id, nome, senha, email FROM usuario";
$resultado = mysqli_query($conexao, $sql);
if (mysqli_num_rows($resultado) > 0) {
    while ($registro = mysqli_fetch_assoc($resultado)) {
        echo "<p style='background-color: lightgreen'> id: " . $registro["id"] . " nome: " . $registro["nome"] .
            " senha: " . $registro["senha"] . "email:" . $registro["email"] . "</p>";
    }
} else {
    echo "Nenhum registro encontrado!";
}
echo "<BR><b>Nomes que começam com 'c'</b><br>";
$sql = "SELECT id, nome, senha, email FROM usuario where nome like 'c%'";
$resultado = mysqli_query($conexao, $sql);
echo "<br>";
if (mysqli_num_rows($resultado) > 0) {
    while ($registro = mysqli_fetch_assoc($resultado)) {
        echo "id: " . $registro["id"] . " nome: " . $registro["nome"] .
            " senha: " . $registro["senha"] . "email:" . $registro["email"] . "<br>";
    }
} else {
    echo "Nenhum registro encontrado!";
}
echo "<BR><b>Lista ordenada por email</b><br>";
$sql = "SELECT id, nome, senha, email FROM usuario order by email";
$resultado = mysqli_query($conexao, $sql);
echo "<br>";
if (mysqli_num_rows($resultado) > 0) {
    while ($registro = mysqli_fetch_assoc($resultado)) {
        echo "id: " . $registro["id"] . " nome: " . $registro["nome"] .
            " senha: " . $registro["senha"] . "email:" . $registro["email"] . "<br>";
    }
} else {
    echo "Nenhum registro encontrado!";
}
echo "<BR><b>Verificar se existe usuário='Carlos' com senha='123' e mostrar seu email. Caso não exista, mostrar uma mensagem.</b><br>";
$sql = "SELECT email from usuario where nome='carlos' and senha='123'";
$resultado = mysqli_query($conexao, $sql);
echo "<br>";
if (mysqli_num_rows($resultado) > 0) {
    while ($registro = mysqli_fetch_assoc($resultado)) {
        echo "email:" . $registro["email"] . "<br>";
    }
} else {
    echo "Nenhum registro encontrado!";
}
