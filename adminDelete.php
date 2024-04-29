<!-- AÇÃO DE DELETAR REGSITRO DE USUARIO -- NÃO ESTÁ FUNCIONANDO -->
<?php
// Configurações de conexão com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "adminteste";

// Criação da conexão
$conexao = mysqli_connect($servidor, $usuario, $senha, 
$banco);

// Verificando se a conexão foi bem-sucedida
if (!$conexao) {
    die("Conexão falhou: " . mysqli_connect_error());
}

$id = $_SERVER["id"];

$sql = 'DELETE FROM users WHERE id = $id;';

mysqli_query($conexao, $sql);


// Fechamento da conexão
mysqli_close($conexao);
?>