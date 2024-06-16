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
$lista = $conn->real_escape_string($_POST["lista"]);

// Deleta o livro da lista
$sql = "DELETE FROM listas_livros WHERE id_livro = $id_livro AND lista = '$lista'";

if ($conn->query($sql) === TRUE) {
    echo "Livro removido da lista com sucesso!";
} else {
    echo "Erro ao remover o livro: " . $conn->error;
}

$conn->close();
?>
