<?php
// TAREFA: Sistema de Validação de Usuário
// Objetivo: Praticar variáveis, tipos, condicionais e funções

echo "=== SISTEMA DE VALIDAÇÃO DE USUÁRIO ===<br><br>";

// 1. DADOS DO USUÁRIO (simulando entrada de formulário)
$nome = "Jordan Gomez";
$email = "jordan@email.com";
$idade = 22;
$senha = "123456";
$saldo = 1500.75;
$ativo = true;

// 2. EXIBIR DADOS (para debug)
echo "Dados recebidos:<br>";
echo "Nome: $nome<br>";
echo "Email: $email<br>";
echo "Idade: $idade anos<br>";
echo "Senha: $senha<br>";
echo "Saldo: R$ $saldo<br>";
echo "Ativo: " . ($ativo ? "Sim" : "Não") . "<br><br>";

// 3. VALIDAÇÕES (sua implementação começa aqui)


// Tarefa 1: Validar se o nome tem pelo menos 3 caracteres
// Dica: use strlen()

if(strlen($nome) >= 3){
    echo"✅ Nome valido <br>";
}
else{
    echo "❌ nome deve ter pelo menos 3 caracteres<br>";
}

// Tarefa 2: Validar se email contém "@"
// Dica: use strpos()
if(strpos($email,"@") !== false){
    echo"Email valido!<br>";
}
else{
    echo "Email dev conter @<br>";
}
// Tarefa 3: Validar idade (entre 18 e 100 anos)
// Dica: operadores lógicos (&&, ||)
if($idade >= 18 && $idade <= 100){
    echo "idade valida <br>";
}
else{
    echo "Idade deve ser entre 18 e 100 anos<br>";
}
// Tarefa 4: Validar senha (pelo menos 6 caracteres)
// Dica: use strlen() novamente
if(strlen($senha)>= 6){
    echo "Senha valida<br>";
}
else{
    echo "Senha invalida deve conter pelo menos 6 caracteres<br>";
}

// Tarefa 5: Classificar saldo:
    echo"Classificação do saldo:<br>";
    if($saldo < 1000){
        echo"Saldo baixo (menor que R$1000)<br>";
    }
    elseif($saldo >= 1000 && $saldo <= 5000){
        echo "Saldo médio (entre R$1000 e R$5000)<br>";
    }
    else{
        echo "Saldo alto, você está com as mufufas!!!<br>";
    }
// - Abaixo de R$1000: "Baixo"
// - Entre R$1000 e R$5000: "Médio"
// - Acima de R$5000: "Alto"

// Tarefa 6: Mostrar status completo:
echo "Status final usuário<br>";
$nome_valido = strlen($nome)>=3;
$email_valido = strpos($email,"@") ==! false;
$idade_valida = $idade >= 18 && $idade <= 100;
$senha_valida = strlen($senha)>= 6;
if($ativp && $nome_valido && $email_valido && $senha_valida && $idade_valida){
    echo "<strong>USUÁRIO VÁLIDO!</strong> Pode proseguir<br>";
}
else{
    
}
// Se ativo=true E todas validações OK: "Usuário válido"
// Caso contrário: "Usuário com problemas"

echo "<br>=== FIM DO SISTEMA ===";
?>