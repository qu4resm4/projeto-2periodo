<!-- AÇÃO DE DELETAR REGSITRO DE USUARIO -- NÃO ESTÁ FUNCIONANDO -->
<?php
// Verifica se a requisição é do tipo DELETE
if ($_SERVER['REQUEST_METHOD'] == 'DELETE') {    
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
    
    // Obtém o ID do registro a ser excluído
    parse_str(file_get_contents("php://input"), $_DELETE);
    $id = $_DELETE['id'];
    
    $sql = "DELETE FROM users WHERE id = $id;";

    // Query
    if (mysqli_query($conexao, $sql)) {
        echo "Registro excluído com sucesso";
    } else {
        echo "Erro ao excluir registro: " . mysqli_error($conexao);
    }

    // Fechamento da conexão
    mysqli_close($conexao);
} else {
    // Se a requisição não for do tipo DELETE, retorna um erro
    http_response_code(405); // Método não permitido
    echo json_encode(array("status" => "error", "message" => "Metodo nao permitido."));
}


?>