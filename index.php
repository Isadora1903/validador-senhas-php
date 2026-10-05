<?php

$senha = "Abc12345";

echo "=== VALIDADOR DE SENHAS ===\n\n";
echo "Senha informada: $senha\n\n";

if (strlen($senha) < 8) {
    echo "Senha inválida!\n";
    echo "A senha deve ter pelo menos 8 caracteres.\n";
} elseif (!preg_match("/[A-Z]/", $senha)) {
    echo "Senha inválida!\n";
    echo "A senha deve ter pelo menos uma letra maiúscula.\n";
} elseif (!preg_match("/[a-z]/", $senha)) {
    echo "Senha inválida!\n";
    echo "A senha deve ter pelo menos uma letra minúscula.\n";
} elseif (!preg_match("/[0-9]/", $senha)) {
    echo "Senha inválida!\n";
    echo "A senha deve ter pelo menos um número.\n";
} else {
    echo "Senha válida!\n";
}

?>