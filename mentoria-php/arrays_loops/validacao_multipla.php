<?php
echo"=== Sistema de Validação de Multipla Usuários===<br>";
echo"Arquivos arrays_loops/validacao_mltipla.php<br><br>";

$usuarios =[
    [
    'nome'=>'Jordan',
    'email'=> 'jordan@gmail.com',
    'idade'=> 30,
    'senha'=> 'J0rd@n95',
    'saldo'=> 6500.00,
    'ativo'=> true,
],
[
    'nome'=> 'Xi',
    'email'=> 'xigmail.com.br',
    'idade'=> 18,
    'senha'=> 'xi20',
    'saldo'=> 3000.00,
    'ativo'=> true,
],
[
    'nome'=> 'Xiang',
    'email'=> 'xiang@gmail.com',
    'idade'=> 25,
    'senha'=> 'xiang2024',
    'saldo'=> 4500.00,
    'ativo'=> false,
]
];
$total_usuarios = count($usuarios);
$aprovados = 0;
$reprovados = 0;
$numero_usuarios = 1;
//echo "Total de usuários: " . count($usuarios) . "<br>";
//echo "Primeiro usuário" . $usuarios[0]['nome'] . "<br>";

foreach($usuarios as $usuario) {
    echo"<h3>Usuario #$numero_usuarios</h3>";
    echo "Nome: " . $usuario['nome'] . "<br>";
    echo "Email: " . $usuario['email'] . "<br>";
    echo "Idade: " . $usuario['idade'] . "<br>";
    echo "Saldo: R$ " . number_format($usuario['saldo'], 2, ',', '.') . "<br>";
    echo "Ativo: " . ($usuario['ativo'] ? 'Sim' : 'Não') . "<br><br>";
    $numero_usuarios++;



if(validarNome($usuario['nome'])){
    echo"Nome validos<br>";

}
else{
    echo"Nome invalidos deve ter pelo menos 3 caracteres!<br>";
}
if(validarEmail($usuario['email'])){
    echo"Email validos<br>";

}
else{
    echo"Email invalidos<br>";
}

if(validarIdade($usuario['idade'])){
    echo"Idade valida<br>";

}
else{
    echo"Idade invalidos deve ter entre 18 e 100 anos!<br>";
}
if(validarSenha($usuario['senha'])){
    echo"Senha validos<br>";

}
else{
    echo"Senha invalidos deve ter pelo menos 6 caracteres!<br>";
}
if($usuario['saldo'] < 1000.00){
    echo"saldo baixo<br>";
}
elseif($usuario['saldo'] >= 1000.00 && $usuario['saldo'] <= 5000.00){
    echo"saldo medio<br>";
}
else{
    echo"saldo alto, ta portando o malote rs!!<br>";
}
$aprovado = $usuario['ativo'] &&
            validarNome($usuario['nome']) &&
            validarEmail($usuario['email']) &&
            validarIdade($usuario['idade']) &&
            validarSenha($usuario['senha']);
if($aprovado){
    echo"Usuario aprovado para acesso!<br>";   
}
else{
    echo"Usuario reprovado para acesso!<br>";
}
}
echo "=== Analise concluida ===<br>";
echo "<br>===Fim do Sistema===";


function validarEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
function validarSenha($senha){
    return strlen($senha) >= 6;
}
    
    function validarNome($nome){
        return strlen($nome) >= 3;
    }
    
    function validarIdade($idade){
        return $idade >= 18 && $idade <= 100;
    }

?>
