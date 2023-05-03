<!DOCTYPE html>
<html>
    <head>
        <!-- Basic Page Info -->
        <meta charset="utf-8">
        <title>PMS - MBachir</title>

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

                <!-- NOTIFICACOES START -->
                <!--<div class="user-notification">
                    <div class="dropdown">
                        <a class="dropdown-toggle no-arrow" href="#" role="button" data-toggle="dropdown">
                            <i class="icon-copy dw dw-notification"></i>
                            <span class="badge notification-active"></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="notification-list mx-h-350 customscroll">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <img src="vendors/images/img.jpg" alt="">
                                            <h3>John Doe</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="vendors/images/photo1.jpg" alt="">
                                            <h3>Lea R. Frith</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="vendors/images/photo2.jpg" alt="">
                                            <h3>Erik L. Richards</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="vendors/images/photo3.jpg" alt="">
                                            <h3>John Doe</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="vendors/images/photo4.jpg" alt="">
                                            <h3>Renee I. Hansen</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <img src="vendors/images/img.jpg" alt="">
                                            <h3>Vicki M. Coleman</h3>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed...</p>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>-->
                <!-- NOTIFICACOES END -->

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
                                    <h4>Painel</h4>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12 text-right">
                                <div class="dropdown">
                                    <a class="btn btn-primary dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                        Gerar Relatório
                                    </a>
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <a class="dropdown-item" href="relatorio-clientes.php">Relatório de Clientes</a>
                                        <a class="dropdown-item" href="relatorio-processos.php">Relatório de Processos</a>
                                        <a class="dropdown-item" href="relatorio-desempenho.php">Relatório de Desempenho</a>
                                        <hr/><!-- comment -->
                                        <a class="dropdown-item" href="relatorio-completo.php">Gerar Relatório Completo</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- PAGE HEADER END -->

                    <!-- CONTENT START -->
                    <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                    </div>
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
    </body>
</html>