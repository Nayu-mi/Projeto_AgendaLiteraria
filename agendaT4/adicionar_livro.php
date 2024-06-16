<?php
// Iniciar sessão
session_start();

// Incluir conexão php
include_once("conexao.php");

// Verifica se o id_livro e lista foram passados corretamente
if (!isset($_POST["id_livro"]) || !isset($_POST["lista"])) {
    die("ID do livro ou lista não fornecidos");
}

$id_livro = intval($_POST["id_livro"]);
$lista = $conn->real_escape_string($_POST["lista"]); // Corrigido aqui, de "real_scape_string" para "real_escape_string"

// Insere o livro na lista
$sql = "INSERT INTO listas_livros (id_livro, lista) 
        VALUES ($id_livro, '$lista')";

if ($conn->query($sql) === TRUE) {
    echo "Livro adicionado à lista com sucesso!";
} else {
    echo "Erro ao adicionar o livro: " . $conn->error;
}

$conn->close();
?>
