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
echo "Total de usuários: " . count($usuarios) . "<br>";
echo "Primeiro usuário" . $usuarios[0]['nome'] . "<br>";



echo "<br>===Fim do Sistema===";
?>