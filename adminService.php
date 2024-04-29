<!-- preenchimento da tabela no backend pelo php -->
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

$sql = "SELECT id, nome, data_nasc, sexo, email, tel_cel, tel_fixo, login FROM users";
$registros = mysqli_query($conexao, $sql);

// heredoc string para renderizar linhas na tabela HTML
function rows_table ($nome, $data_nasc, $sexo, $email, $tel_cel, $tel_fixo, $login, $id) {
    return  <<< row
                <tr>
                    <td>$nome</td>
                    <td>$data_nasc</td>
                    <td>$sexo</td>
                    <td>$email</td>
                    <td>$tel_cel</td>
                    <td>$tel_fixo</td>
                    <td>$login</td>
                    <td>
                        <a id="$id" class="btnExcluir ms-3">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5M11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47M8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5"/>
                            </svg>
                        </a>
                    </td>
                </tr>
            row;  
}

    // Verificar se a consulta foi bem sucedida
    function response($registros, $conexao){
        if ($registros) {
            // Iterar sobre os resultados
            while ($linha = mysqli_fetch_assoc($registros)) {
                // Acessar os valores de cada coluna pelo nome da coluna
                echo rows_table($linha["nome"], $linha["data_nasc"], $linha["sexo"], $linha["email"], $linha["tel_cel"], $linha["tel_fixo"], $linha["login"], $linha["id"]);
            }
        } else {
            echo "Erro na atualização do registro: " . mysqli_error($conexao);
        }
    };

    echo response($registros, $conexao);

// Fechamento da conexão
mysqli_close($conexao);
?>