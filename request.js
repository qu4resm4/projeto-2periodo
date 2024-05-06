//metodo get para inserir dados na tabela
function incluirResponseNoHTML(response) {
    $('tbody').html(response);
}
function loadPage() {
$.ajax({
        url: 'http://localhost/projeto-2periodo/adminService.php',
        method: 'GET',
        success: function(response) {
            // Função para incluir o response no HTML usando innerHTML
            incluirResponseNoHTML(response);
            excluirRegistro();
            console.log("load realizado")
        },
        error: function(error) {
            console.error('Ocorreu um erro:', error);
        }
});
};
loadPage();

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
            // Função para incluir o response no HTML
            incluirResponseNoHTML(response)
            excluirRegistro();
        },
        error: function(error) {
            console.error('Ocorreu um erro:', error);
        }
    });
});

// iterando botões de exclusão e atribuindo eventlsitner ao click em uma função closure
function excluirRegistro() {
    var btnExcluir = Array.from(document.getElementsByClassName("btnExcluir"));
    // Itera sobre a coleção de elementos e adiciona o evento a cada um
    for (var i = 0; i < btnExcluir.length; i++) {
        (function(index) {
            btnExcluir[index].addEventListener('click', function() {
                let id = btnExcluir[index].getAttribute('id');
                requestDelete(id)
            });
        })(i);
    }
}

// Fazendo a requisição DELETE com jQuery AJAX
function requestDelete(id) {
    $.ajax({
    url: 'http://localhost/projeto-2periodo/adminDelete.php',
    type: 'DELETE',
    data: { id: id },
    success: function(response) {
        // Tratamento da resposta
        console.log('Requisição DELETE bem-sucedida');
        console.log(id)
        console.log(response)
        loadPage()
    },
    error: function(error) {
        // Tratamento de erros
        console.error('Erro na requisição DELETE:', error);
    }
    });
}