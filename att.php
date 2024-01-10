<?php
$nomeLivro = readline("Digite o nome do livro: ");
$tipoUsuario = readline("Digite o tipo de usuário (professor ou aluno): ");

if($tipoUsuario == "professor"){
    $prazo = 10;
} else {
    $prazo = 3;
}

echo "Recibo de empréstimo de livro: " . $nomeLivro . "\n";
echo "Tipo de usuário: " . $tipoUsuario . "\n";
echo "Prazo para devolução: " . $prazo . " dias\n";
?>