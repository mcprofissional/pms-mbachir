<?php
// Dados de conexão com o banco de dados
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "datatable";

// Criando a conexão
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificando se ocorreu algum erro na conexão
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Consulta SQL para buscar os dados da tabela "clientes"
$sql = "SELECT `contenciosos`.`id`,
`contenciosos`.`registo`,
`contenciosos`.`cliente`,
`contenciosos`.`qualificacao`,
`contenciosos`.`accao`,
`contenciosos`.`contra`,
`contenciosos`.`advogado`,
`contenciosos`.`nprocesso`,
`contenciosos`.`tribunal`,
`contenciosos`.`seccao`,
`contenciosos`.`valor`,
`contenciosos`.`estado`,
`contenciosos`.`ppassos`,
`contenciosos`.`prazo`,
`contenciosos`.`actualizacao`,
`contenciosos`.`urgencia`
FROM `mbachir`.`contenciosos`;";
$result = $conn->query($sql);

// Fechando a conexão
$conn->close();
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <!-- Basic Page Info -->
        <meta charset="utf-8">
        <title>PMS - MBachir: Processos Contenciosos</title>

        <!-- Site favicon -->
        <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
        <link rel="icon" type="image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
        <link rel="icon" type="image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

        <!-- Mobile Specific Metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

        <!-- CSS -->
        <link rel="stylesheet" type="text/css" href="vendors/styles/core.css">
        <link rel="stylesheet" type="text/css" href="vendors/styles/icon-font.min.css">
        <link rel="stylesheet" type="text/css" href="vendors/styles/style.css">
        <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="src/plugins/datatables/css/responsive.bootstrap4.min.css">

        <!-- Global site tag (gtag.js) - Google Analytics -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
        <script>
            window.dataLayer = window.dataLayer || [];
            function gtag() {
                dataLayer.push(arguments);
            }
            gtag('js', new Date());

            gtag('config', 'UA-119386393-1');
        </script>
    </head>
    <body>

        <!-- HEADER START -->
        <div class="header">
            <div class="header-left">
                <div class="menu-icon dw dw-menu"></div>
            </div>
            <div class="header-right">

                <!-- USER DROPDOWN START -->
                <div class="user-info-dropdown">
                    <div class="dropdown">
                        <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                            <span class="user-icon">
                                <img src="vendors/images/photo1.jpg" alt="">
                            </span>
                            <span class="user-name">Mahomed Bachir</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                            <a class="dropdown-item" href="perfil.php"><i class="dw dw-user1"></i> Perfil</a>
                            <!-- <a class="dropdown-item" href="profile.php"><i class="dw dw-settings2"></i> Configuracoes</a> -->
                            <a class="dropdown-item" href="perguntas-frequentes.php"><i class="dw dw-help"></i> Ajuda</a>
                            <hr/>
                            <a class="dropdown-item" href="entrar.php"><i class="dw dw-logout"></i> Terminar Sessão</a>
                        </div>
                    </div>
                </div>
                <!-- USER DROPDOWN END -->

            </div>
        </div>
        <!-- HEADER END -->

        <!-- LEFT SIDEBAR START -->
        <div class="left-side-bar">
            <div class="brand-logo align-items-center justify-content-center">
                <a href="index.php">
                    PMS: MBachir
                </a>
                <div class="close-sidebar" data-toggle="left-sidebar-close">
                    <i class="ion-close-round"></i>
                </div>
            </div>
            <div class="menu-block customscroll">
                <div class="sidebar-menu">
                    <ul id="accordion-menu">
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <a href="painel.php" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-analytics1"></span>
                                <span class="mtext">Painel</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <div class="sidebar-small-cap">Área de Administrador</div>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-settings1"></span>
                                <span class="mtext">Definições</span>
                            </a>
                            <ul class="submenu">
                                <li>
                                    <a href="javascript:;">Sobre a Empresa</a>
                                    <ul class="submenu child">
                                        <li><a href="empresa.php">Informacoes gerais</a></li>
                                        <li><a href="departamentos.php">Departamentos</a></li>
                                        <li><a href="cargos.php">Cargos</a></li>
                                        <li><a href="areas-actuacao.php">Áreas de Actuação</a></li>
                                        <li><a href="funcionarios.php">Funcionários</a></li>
                                        <li><a href="tipos-processos.php">Tipos de Processos</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="javascript:;">Sobre o Sistema</a>
                                    <ul class="submenu child">
                                        <li><a href="tipos-utilizadores.php">Tipo de Utilizadores</a></li>
                                        <li><a href="utilizadores.php">Utilizadores</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                        <li>
                            <div class="sidebar-small-cap">Funcionalidades do Sistema</div>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon ti ti-user"></span>
                                <span class="mtext">Clientes</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="clientes-singulares.php">Clientes Singulares</a></li>
                                <li><a href="clientes-colectivos.php">Clientes Colectivos</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="tribunais.php" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-home"></span>
                                <span class="mtext">Tribunais</span>
                            </a>
                        </li>
                        <li class="dropdown">
                            <a href="javascript:;" class="dropdown-toggle">
                                <span class="micon dw dw-file"></span>
                                <span class="mtext">Processos</span>
                            </a>
                            <ul class="submenu">
                                <li><a href="processos-civis.php">Processos Civis</a></li>
                                <li><a href="processos-contenciosos.php">Processos Contenciosos</a></li>
                            </ul>
                        </li>
                        <div class="dropdown-divider"></div>

                        <li>
                            <div class="sidebar-small-cap">Documentação</div>
                        </li>

                        <li>
                            <a href="sobre-sistema.php" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-file3"></span>
                                <span class="mtext">Sobre o Sistema</span>
                            </a>
                        </li>
                        <li>
                            <a href="manual-utilizador.php" class="dropdown-toggle no-arrow">
                                <span class="micon dw dw-file3"></span>
                                <span class="mtext">Manual do Utilizador</span>
                            </a>
                        </li>
                        <li>
                            <div class="dropdown-divider"></div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- LEFT SIDEBAR END -->

        <!-- -->
        <div class="mobile-menu-overlay">

        </div>
        <!-- -->

        <!-- CONTAINER START -->
        <div class="main-container">
            <div class="pd-ltr-20 xs-pd-20-10">

                <!-- PAGE CONTENT START -->
                <div class="min-height-200px">

                    <!-- PAGE HEADER START -->
                    <div class="page-header">
                        <div class="row d-flex align-items-center justify-content-between">
                            <div class="col-md-6 col-sm-12">
                                <div class="title">
                                    <h4>Processos Contenciosos</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 text-right">
                                <div class="dropdown">
                                    <a class="btn btn-outline-primary dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                                        Registar novo processo
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PAGE HEADER END -->

                    <!-- CONTENT START -->
                    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">

                        <table class=" w-100 table hover multiple-select-row data-table-export nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Data de Registo</th>
                                    <th>Nome do Cliente</th>
                                    <th>Qualificação do Cliente</th>
                                    <th>Tipo de Acção</th>
                                    <th>Parte Contra</th>
                                    <th>Advogado do Processo</th>
                                    <th>Número do Processo</th>
                                    <th>Tribunal</th>
                                    <th>Secção</th>
                                    <th>Valor da causa</th>
                                    <th>Estado do Processo</th>
                                    <th>Próximos Passos</th>
                                    <th>Prazo</th>
                                    <th>Data de Actualização</th>
                                    <th>Nível de Urgência</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if ($result->num_rows > 0) {
                                    // Loop pelos resultados da consulta
                                    while ($row = $result->fetch_assoc()) {
                                        echo "<tr>";
                                        echo "<td>" . $row["id"] . "</td>";
                                        echo "<td>" . $row["registo"] . "</td>";
                                        echo "<td>" . $row["cliente"] . "</td>";
                                        echo "<td>" . $row["qualificacao"] . "</td>";
                                        echo "<td>" . $row["accao"] . "</td>";
                                        echo "<td>" . $row["contra"] . "</td>";
                                        echo "<td>" . $row["advogado"] . "</td>";
                                        echo "<td>" . $row["nprocesso"] . "</td>";
                                        echo "<td>" . $row["tribunal"] . "</td>";
                                        echo "<td>" . $row["seccao"] . "</td>";
                                        echo "<td>" . $row["valor"] . "</td>";
                                        echo "<td>" . $row["estado"] . "</td>";
                                        echo "<td>" . $row["ppassos"] . "</td>";
                                        echo "<td>" . $row["prazo"] . "</td>";
                                        echo "<td>" . $row["actualizacao"] . "</td>";
                                        echo "<td>" . $row["urgencia"] . "</td>";
                                        echo "</tr>";
                                    }
                                } else {
                                    echo "Nenhum resultado encontrado.";
                                }
                                ?>
                            </tbody>
                        </table>


                        <div class="pd-20 card-box height-100-p">
                            <h5 class="h4">Large modal</h5>
                            <a href="#" class="btn-block" data-toggle="modal" data-target="#bd-example-modal-lg" type="button">
                                <img src="vendors/images/modal-img1.jpg" alt="modal">
                            </a>
                            <div class="modal fade bs-example-modal-xl" data-backdrop="static" data-keyboard="false" id="bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-xl modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h4 class="modal-title" id="myLargeModalLabel">Formulario de Registo de Processos Contenciosos</h4>
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                        </div>
                                        <div class="modal-body">
                                            <form>
                                                <div class="row">
                                                    <div class="col-md-2 col-sm-12">
                                                        <div class="form-group">
                                                            <label>ID</label>
                                                            <input type="text" class="form-control" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Data de Registo</label>
                                                            <input type="text" class="form-control date-picker" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Nome do Cliente</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Qualificacao do Cliente</label>
                                                            <select class="form-control">
                                                                <option>Autor</option>
                                                                <option>Reu</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Parte Contra</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-5 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Tipo de Accao</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Valor da Causa</label>
                                                            <input type="number" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Advogado do Processo</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>                                                    
                                                    <div class="col-md-2 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Numero do Processo</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Tribunal</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Seccao</label>
                                                            <input type="text" class="form-control">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-3 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Estado do Processo</label>
                                                            <select class="form-control">
                                                                <option>Em andamento</option>
                                                                <option>Aguardando Sentenca</option>
                                                                <option>Concluido</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Proximos Passos</label>
                                                            <textarea class="textarea_editor form-control border-radius-0"></textarea>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Prazo</label>
                                                            <input type="text" class="form-control date-picker">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Data de Actualizacao</label>
                                                            <input type="text" class="form-control date-picker" disabled>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Nivel de Urgencia</label>
                                                            <select class="form-control">
                                                                <option>Alto</option>
                                                                <option>Baixo</option>
                                                                <option>Moderado</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-outline-primary">Registar Processo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!--<div class="min-height-200px">-->
                        <!-- Export Datatable start -->
                        <!--<div class="card-box mb-30">
                            <div class="pd-20">
                                <h4 class="text-blue h4">Processos Contenciosos</h4>
                            </div>
                            <div class="pb-20">
                                <table class=" w-100 table hover multiple-select-row data-table-export nowrap">
                                    <thead>
                                        <tr>
                                            <th class="table-plus datatable-nosort">ID</th>
                                            <th>Data de Registo</th>
                                            <th>Nome do Cliente</th>
                                            <th>Qualificacao do CLiente</th>
                                            <th>Tipo de Accao</th>
                                            <th>Parte Contra</th>
                                            <th>Advogado do Processo</th>
                                            <th>Numero do Processo</th>
                                            <th>Tribunal</th>
                                            <th>Seccao</th>
                                            <th>Valor da causa</th>
                                            <th>Estado do Processo</th>
                                            <th>Proximos Passos</th>
                                            <th>Prazo</th>
                                            <th>Data de Actualizacao</th>
                                            <th>Nivel de Urgencia</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td class="table-plus">Gloria F. Mead</td>
                                            <td>25</td>
                                            <td>Sagittarius</td>
                                            <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>                                                
                                            <td>25</td>
                                            <td>Sagittarius</td>
                                            <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td class="table-plus">Andrea J. Cagle</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td><td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td class="table-plus">Andrea J. Cagle</td>
                                            <td>20</td>
                                            <td>Gemini</td>
                                            <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>20</td>
                                            <td>Gemini</td>
                                            <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td class="table-plus">Andrea J. Cagle</td>
                                            <td>30</td>
                                            <td>Sagittarius</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Sagittarius</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td class="table-plus">Andrea J. Cagle</td>
                                            <td>25</td>
                                            <td>Gemini</td>
                                            <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>25</td>
                                            <td>Gemini</td>
                                            <td>2829 Trainer Avenue Peoria, IL 61602 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td class="table-plus">Andrea J. Cagle</td>
                                            <td>20</td>
                                            <td>Sagittarius</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>20</td>
                                            <td>Sagittarius</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td class="table-plus">Andrea J. Cagle</td>
                                            <td>18</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>18</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td class="table-plus">Andrea J. Cagle</td>
                                            <td>30</td>
                                            <td>Sagittarius</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Sagittarius</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td class="table-plus">Andrea J. Cagle</td>
                                            <td>30</td>
                                            <td>Sagittarius</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Sagittarius</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td class="table-plus">Andrea J. Cagle</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td class="table-plus">Andrea J. Cagle</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                        </tr>
                                        <tr>
                                            <td class="table-plus">Andrea J. Cagle</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                            <td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td><td>30</td>
                                            <td>Gemini</td>
                                            <td>1280 Prospect Valley Road Long Beach, CA 90802 </td>
                                            <td>29-03-2018</td>
                                            <td>$162,700</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>-->
                        <!-- Export Datatable End -->
                        <!--</div>

                    </div>-->
                        <!-- CONTENT END -->

                    </div>
                    <!-- PAGE CONTENT END -->

                    <!-- FOOTER START -->
                    <div class="footer-wrap pd-20 mb-20 card-box">
                        Desenvolvido e Distríbuido por 
                        <a href="https://moyaracolher.github.io" target="_blank">
                            Moyara Colher
                        </a>
                    </div>
                    <!-- FOOTER END -->

                </div>
            </div>
            <!-- CONTAINER END -->

            <!-- js -->
            <script src="vendors/scripts/core.js"></script>
            <script src="vendors/scripts/script.min.js"></script>
            <script src="vendors/scripts/process.js"></script>
            <script src="vendors/scripts/layout-settings.js"></script>
            <script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
            <script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
            <script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
            <!-- buttons for Export datatable -->
            <script src="src/plugins/datatables/js/dataTables.buttons.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.print.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.html5.min.js"></script>
            <script src="src/plugins/datatables/js/buttons.flash.min.js"></script>
            <script src="src/plugins/datatables/js/pdfmake.min.js"></script>
            <script src="src/plugins/datatables/js/vfs_fonts.js"></script>
            <!-- Datatable Setting js -->
            <script src="vendors/scripts/datatable-setting.js"></script>
    </body>
</html>