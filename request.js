//metodo get para inserir dados na tabela
function incluirResponseNoHTML(response) {
    $('tbody').html(response);
}

$.ajax({
        url: 'http://localhost/projeto-2periodo/adminService.php',
        method: 'GET',
        success: function(response) {
            // Função para incluir o response no HTML usando innerHTML
            incluirResponseNoHTML(response);
            excluirRegistro();
        },
        error: function(error) {
            console.error('Ocorreu um erro:', error);
        }
});



//testando ideias
/*function incluiOnChange(response) {
    $('#div').html(response);
    console.log("estou sendo inserido no HTML")
}*/
// Função que será chamada quando houver mudança no input

var consulta = document.getElementById("search");

consulta.addEventListener('input', () => {
    var valor = consulta.value
    // Fazendo a requisição AJAX GEET para o servidor
    $.ajax({
        url: 'http://localhost/projeto-2periodo/adminFiltro.php',
        method: 'GET',
        data: { search: valor },
        success: function(response) {
            // Função para incluir o response no HTML usando innerHTML
            incluirResponseNoHTML(response)
        },
        error: function(error) {
            console.error('Ocorreu um erro:', error);
        }
    });
});

//função para excluir NÃO ESTÁ FUNCIONANDO


// Fazendo a requisição DELETE com jQuery AJAX
function excluirRegistro() {
    var btnExcluir = Array.from(document.getElementsByClassName("btnExcluir"));
    console.log(btnExcluir)
    console.log(typeof(btnExcluir))
    console.log(btnExcluir.length)

    // Itera sobre a coleção de elementos e adiciona o evento a cada um
    for (var i = 0; i < btnExcluir.length; i++) {
        console.log("iterando botoes")
        btnExcluir[i].addEventListener('click', function() {
            console.log(btnExcluir[i].id);
            console.log("Foi clicado")
        });
    }
}
/**/

/*
    $.ajax({
    url: 'http://localhost/projeto-2periodo/adminDelete.php',
    method: 'DELETE',
    headers: {
        'id': btnExcluir.id
    },
    success: function() {
        // Tratamento da resposta
        console.log('Requisição DELETE bem-sucedida');
    },
    error: function(error) {
        // Tratamento de erros
        console.error('Erro na requisição DELETE:', error);
    }
});
*/