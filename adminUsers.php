<!--
    query copiada do projeto do jorge luiz
-->
    <?php
/*
session_start();
if(!$_SESSION['admin']){
    header('Location:../login/login.php');
   
}



    require_once('../../conexao.php');
    $sql='SELECT * FROM usuarios JOIN acesso on usuarios.idAcesso = acesso.idAcesso WHERE usuarios.idAcesso=1';
    $row=mysqli_query($conexao,$sql);
*/
?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/styleAdmin.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>
    <div class="d-flex flex-column wrapper" >
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="menu_flutuante">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.html">
                    <img src="img/logonavbar.png" class="logomenu" width="80px" alt="LOGO">
                </a>  
                <div class="bloco_central"></div> <!-- Bloco Branco -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <!-- LINKS NAV BAR -->
                <div class="collapse navbar-collapse" id="collapsibleNavbar">
                    <ul class="navbar-nav justify-content-center flex-grow-1 ">
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 fw-bold" href="index.html">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 fw-bold" href="#">Cardápio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link mx-lg-2 fw-bold" href="contato.html">Fale Conosco</a>
                        </li>
                    </ul>
        
                    <div class="btn-container">
                        <span id="controle_zoom">
                            <a href="javascript:void(0);" id="btnAumentar">A+</a> | <a href="javascript:void(0);" id="btnDiminuir">A-</a>
                        </span>
                    </div>
        
                    <div class="dark-mod">
                        <input type="checkbox" class="checkbox" id="chk" />
                        <label class="label" for="chk">
                            <i class="fas fa-moon"></i>
                            <i class="fas fa-sun"></i>
                            <div class="ball"></div>
                        </label>
                    </div>

                    <!-- BOTÃO LOGADO -->
                    <div class="dropdown">
                        <button class="botaologado mx-4" type="button" data-bs-toggle="dropdown" role="button" aria-expanded="false">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                                <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6"/>
                            </svg>
                        </button>
                        <div class="dropdown-menu shadow w-220px">
                            <ul class="">
                                <li>
                                    <a class="dropdown-item" href="admin.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-graph-up" viewBox="0 0 16 16">
                                            <path fill-rule="evenodd" d="M0 0h1v15h15v1H0zm14.817 3.113a.5.5 0 0 1 .07.704l-4.5 5.5a.5.5 0 0 1-.74.037L7.06 6.767l-3.656 5.027a.5.5 0 0 1-.808-.588l4-5.5a.5.5 0 0 1 .758-.06l2.609 2.61 4.15-5.073a.5.5 0 0 1 .704-.07"/>
                                        </svg>
                                        <span class="ms-2">
                                            Dashboard
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="adminUsers.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                        </svg>
                                        <span class="ms-2">
                                            Consulta Usuário
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="adminLogs.html">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                            <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
                                        </svg>
                                        <span class="ms-2">
                                            Log de Entradas
                                        </span>
                                    </a>
                                </li>
                                
                                <li>
                                    <hr class="dropdown-divider">
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-gear" viewBox="0 0 16 16">
                                            <path d="M8 4.754a3.246 3.246 0 1 0 0 6.492 3.246 3.246 0 0 0 0-6.492M5.754 8a2.246 2.246 0 1 1 4.492 0 2.246 2.246 0 0 1-4.492 0"/>
                                            <path d="M9.796 1.343c-.527-1.79-3.065-1.79-3.592 0l-.094.319a.873.873 0 0 1-1.255.52l-.292-.16c-1.64-.892-3.433.902-2.54 2.541l.159.292a.873.873 0 0 1-.52 1.255l-.319.094c-1.79.527-1.79 3.065 0 3.592l.319.094a.873.873 0 0 1 .52 1.255l-.16.292c-.892 1.64.901 3.434 2.541 2.54l.292-.159a.873.873 0 0 1 1.255.52l.094.319c.527 1.79 3.065 1.79 3.592 0l.094-.319a.873.873 0 0 1 1.255-.52l.292.16c1.64.893 3.434-.902 2.54-2.541l-.159-.292a.873.873 0 0 1 .52-1.255l.319-.094c1.79-.527 1.79-3.065 0-3.592l-.319-.094a.873.873 0 0 1-.52-1.255l.16-.292c.893-1.64-.902-3.433-2.541-2.54l-.292.159a.873.873 0 0 1-1.255-.52zm-2.633.283c.246-.835 1.428-.835 1.674 0l.094.319a1.873 1.873 0 0 0 2.693 1.115l.291-.16c.764-.415 1.6.42 1.184 1.185l-.159.292a1.873 1.873 0 0 0 1.116 2.692l.318.094c.835.246.835 1.428 0 1.674l-.319.094a1.873 1.873 0 0 0-1.115 2.693l.16.291c.415.764-.42 1.6-1.185 1.184l-.291-.159a1.873 1.873 0 0 0-2.693 1.116l-.094.318c-.246.835-1.428.835-1.674 0l-.094-.319a1.873 1.873 0 0 0-2.692-1.115l-.292.16c-.764.415-1.6-.42-1.184-1.185l.159-.291A1.873 1.873 0 0 0 1.945 8.93l-.319-.094c-.835-.246-.835-1.428 0-1.674l.319-.094A1.873 1.873 0 0 0 3.06 4.377l-.16-.292c-.415-.764.42-1.6 1.185-1.184l.292.159a1.873 1.873 0 0 0 2.692-1.115z"/>
                                        </svg>
                                        <span class="ms-2">
                                            Configurações
                                        </span>
                                    </a>
                                </li>

                                <li>
                                    <a class="dropdown-item" href="#" onclick="">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x" viewBox="0 0 16 16">
                                            <path d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708"/>
                                        </svg>
                                        <span class="ms-2">
                                            Sair
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </nav>


        <main class="flex-fill">
                <!-- MINI DASHBOARD DO ADMIN-->
                <div class="row mx-5 dashboard">
                    <div class="row">
                        <div class="col-1">
                            <div class="d-flex flex-row">
                                <a class="mx-3 mt-1" href="adminUsers.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001q.044.06.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1 1 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0"/>
                                    </svg>
                                </a>
                                <a class="mx-3 mt-1" href="adminLogs.html">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="white" class="bi bi-hourglass-split" viewBox="0 0 16 16">
                                        <path d="M2.5 15a.5.5 0 1 1 0-1h1v-1a4.5 4.5 0 0 1 2.557-4.06c.29-.139.443-.377.443-.59v-.7c0-.213-.154-.451-.443-.59A4.5 4.5 0 0 1 3.5 3V2h-1a.5.5 0 0 1 0-1h11a.5.5 0 0 1 0 1h-1v1a4.5 4.5 0 0 1-2.557 4.06c-.29.139-.443.377-.443.59v.7c0 .213.154.451.443.59A4.5 4.5 0 0 1 12.5 13v1h1a.5.5 0 0 1 0 1zm2-13v1c0 .537.12 1.045.337 1.5h6.326c.216-.455.337-.963.337-1.5V2zm3 6.35c0 .701-.478 1.236-1.011 1.492A3.5 3.5 0 0 0 4.5 13s.866-1.299 3-1.48zm1 0v3.17c2.134.181 3 1.48 3 1.48a3.5 3.5 0 0 0-1.989-3.158C8.978 9.586 8.5 9.052 8.5 8.351z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>
                        
                        <div class="col-10">
                            <!--  BARRA DE PESQUISA  -->
                            <form class="px-2">
                                <div class="card-body row no-gutters align-items-center ms-5">
                                    <div class="col-md">
                                        <input class="form-control form-control-borderless" type="search" id="search" name="search" placeholder="Pequisa de usuário">
                                    </div>
                                </div>
                            </form>
                        </div>
                        
                        <div class="col-1">
                            <button class="btn dropdown-toggle float-end text-light" type="button" data-bs-toggle="collapse" data-bs-target="#info" aria-expanded="false" aria-controls="collapseExample"></button>
                        </div>
                    </div>

                    <div class="row collapse mt-4" id="info">
                        <div class="col-3">
                            <div class="card border-light" style="max-width: 18rem;">
                                <div class="card-header">Faturamento do dia</div>
                                <div class="card-body">
                                <h5 class="card-title">R$21.756,80</h5>
                                <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="card border-light" style="max-width: 18rem;">
                                <div class="card-header">Total de acessos</div>
                                <div class="card-body">
                                <h5 class="card-title">56</h5>
                                <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                            
                        <div class="col-3">
                            <div class="card border-light" style="max-width: 18rem;">
                                <div class="card-header">Usuários online</div>
                                <div class="card-body">
                                <h5 class="card-title">1</h5>
                                <p class="card-text"></p>
                                </div>
                            </div>
                        </div>

                        <div class="col-3">
                            <div class="card border-light" style="max-width: 18rem;">
                                <div class="card-header">Usuários cadastrados</div>
                                <div class="card-body">
                                <h5 class="card-title">6</h5>
                                <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row justify-content-center m-5">
                    <div class="col-md-12">
                        <div id="user-table-container" class="table-responsive">
                            <!-- Tabela de usuários será inserida aqui -->
                            <div class="table-responsive small">
                                <table class="table table-striped table-sm">
                                    <thead>
                                        <tr>
                                            <th>Nome completo</th>
                                            <th>Data de Nascimento</th>
                                            <th>Sexo</th>
                                            <th>E-mail</th>
                                            <th>Telefone Celular</th>
                                            <th>Telefone Fixo</th>
                                            <th>Login</th>
                                            <th>Excluir</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        
                                    </tbody>
                                </table>
                              </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="div">
            
                </div>
            </div>
        </main>
    </div>

    <script src="js/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>

    <script src="request.js"></script>

</body>
</html>

