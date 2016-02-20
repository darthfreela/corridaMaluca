<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
	<meta http-equiv="Content-Language" content="pt-br">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Corrida Maluca -> Clientes</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
    <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
    <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <script src="../../bootstrap/js/bootstrap.min.js"></script>
    <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <script src="../../plugins/fastclick/fastclick.min.js"></script>
    <script src="../../dist/js/app.min.js"></script>
    <script src="../../dist/js/demo.js"></script>
    <script>
        $(function () {
           $("#example1").DataTable();
        });
        
	
    </script>
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/Rua 56, bairro 56, cidade 567.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <a href="index2.html" class="logo">
                <span class="logo-mini"><b>CM</b></span>
                <span class="logo-lg"><b>Corrida Maluca</b></span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
                <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                    <span class="sr-only">Toggle navigation</span>
                </a>
                <div class="navbar-custom-menu">
                    <ul class="nav navbar-nav">
                        <li class="dropdown user user-menu">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <img src="../../dist/img/usuario.png" class="user-image" alt="User Image">
                                <span class="hidden-xs">Usuário Padrão</span>
                            </a>
                            <ul class="dropdown-menu">
                                <li class="user-header">
                                    <img src="../../dist/img/usuario.png" class="img-circle" alt="User Image">
                                    <p>
                                        Usuário Padrão
                                    </p>
                                </li>
                                <li class="user-footer">
                                    <div class="pull-left">
                                        <a href="#" class="btn btn-default btn-flat">Perfil</a>
                                    </div>
                                    <div class="pull-right">
                                        <a href="#" class="btn btn-default btn-flat">Sair</a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <aside class="main-sidebar">
            <section class="sidebar">
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="../../dist/img/usuario.png" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p>Usuário Padrão</p>
                    </div>
                </div>
                <ul class="sidebar-menu">
                    <li class="header">Menu</li>
                    <li class="treeview">
                        <a href="#">
                            <i class="fa fa-files-o"></i>
                            <span>Cadastros</span>
                            <span class="label label-primary pull-right">4</span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="../../pages/cadastros/clientes.html"><i class="fa fa-circle-o"></i>Clientes</a></li>
                            <li><a href="../../pages/cadastros/colaboradores.html"><i class="fa fa-circle-o"></i>Colaboradores</a></li>
                            <li><a href="../../pages/cadastros/leis.html"><i class="fa fa-circle-o"></i>Leis</a></li>
                            <li><a href="../../pages/cadastros/oportunidades.html"><i class="fa fa-circle-o"></i>Oportunidades</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Cadastro de Clientes
                </h1>
                <ol class="breadcrumb">
                    <li><a href="../../index2.html"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li><a href="clientes.html">Clientes</a></li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
                                <table id="example1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 7%;">Codigo</th>
                                            <th style="width: 50%;">Nome</th>
                                            <th style="width: 10%;">Telefone</th>
                                            <th style="width: 33%;">Endereço</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td><a href="cadastroClientes.html">Joao</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>Rua 1, bairro 1, cidade 1</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td><a href="cadastroClientes.html">Francisco</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>5Rua 2, bairro 2, cidade 2</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td><a href="cadastroClientes.html">Santos</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>5Rua 3, bairro 3, cidade 3</td>
                                        </tr>
                                        <tr>
                                            <td>4</td>
                                            <td><a href="cadastroClientes.html">Zika</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>6Rua 4, bairro 4, cidade 4</td>
                                        </tr>
                                        <tr>
                                            <td>5</td>
                                            <td><a href="cadastroClientes.html">Azul</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>7Rua 5, bairro 5, cidade 5</td>
                                        </tr>
                                        <tr>
                                            <td>6</td>
                                            <td><a href="cadastroClientes.html">Amarelo</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>6Rua 6, bairro 6, cidade 6</td>
                                        </tr>
                                        <tr>
                                            <td>7</td>
                                            <td><a href="cadastroClientes.html">Verde</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>Rua 7, bairro 7, cidade 7</td>
                                        </tr>
                                        <tr>
                                            <td>8</td>
                                            <td><a href="cadastroClientes.html">Preto</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>Rua 8, bairro 8, cidade 8</td>
                                        </tr>
                                        <tr>
                                            <td>9</td>
                                            <td><a href="cadastroClientes.html">Firefox</a></td>
                                            <td>(99) 9999-99992+</td>
                                            <td>Rua 9, bairro 9, cidade 9</td>
                                        </tr>
                                        <tr>
                                            <td>10</td>
                                            <td><a href="cadastroClientes.html">Reste</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>1.9</td>
                                        </tr>
                                        <tr>
                                            <td>11</td>
                                            <td><a href="cadastroClientes.html">Teste</a></td>
                                            <td>(99) 9999-99992+</td>
                                            <td>Rua 10, bairro 10, cidade 10</td>
                                        </tr>
                                        <tr>
                                            <td>12</td>
                                            <td><a href="cadastroClientes.html">Tete 1.5</a></td>
                                            <td>(99) 9999-99993+</td>
                                            <td>Rua 11, bairro 11, cidade 11</td>
                                        </tr>
                                        <tr>
                                            <td>13</td>
                                            <td><a href="cadastroClientes.html">teste 7.2</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>Rua 12, bairro 12, cidade 12</td>
                                        </tr>
                                        <tr>
                                            <td>14</td>
                                            <td><a href="cadastroClientes.html">Alfredo 8</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>Rua 13, bairro 13, cidade 13</td>
                                        </tr>
                                        <tr>
                                            <td>15</td>
                                            <td><a href="cadastroClientes.html">Lucas 9</a></td>
                                            <td>(99) 9999-99992+</td>
                                            <td>Rua 14, bairro 14, cidade 14</td>
                                        </tr>
                                        <tr>
                                            <td>16</td>
                                            <td><a href="cadastroClientes.html">Carlos</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>1</td>
                                        </tr>
                                        <tr>
                                            <td>17</td>
                                            <td><a href="cadastroClientes.html">Clei</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>1.1</td>
                                        </tr>
                                        <tr>
                                            <td>18</td>
                                            <td><a href="cadastroClientes.html">Sandro</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>1.2</td>
                                        </tr>
                                        <tr>
                                            <td>19</td>
                                            <td><a href="cadastroClientes.html">Pablo</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>Rua 15, bairro 15, cidade 15</td>
                                        </tr>
                                        <tr>
                                            <td>20</td>
                                            <td><a href="cadastroClientes.html">Santos 222</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>Rua 16, bairro 16, cidade 16</td>
                                        </tr>
                                        <tr>
                                            <td>21</td>
                                            <td><a href="cadastroClientes.html">Teste 1.5</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>Rua 17, bairro 17, cidade 17</td>
                                        </tr>
                                        <tr>
                                            <td>22</td>
                                            <td><a href="cadastroClientes.html">teste 1.6</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>Rua 18, bairro 18, cidade 18</td>
                                        </tr>
                                        <tr>
                                            <td>23</td>
                                            <td><a href="cadastroClientes.html">teste 1.7</a></td>
                                            <td>(99) 9999-99991+</td>
                                            <td>Rua 19, bairro 19, cidade 19</td>
                                        </tr>
                                        <tr>
                                            <td>24</td>
                                            <td><a href="cadastroClientes.html">teste 1.8</a></td>
                                            <td>(99) 9999-99991+</td>
                                            <td>Rua 20, bairro 20, cidade 20</td>
                                        </tr>
                                        <tr>
                                            <td>25</td>
                                            <td><a href="cadastroClientes.html">testear 1.1</a></td>
                                            <td>(99) 9999-99992+</td>
                                            <td>Rua 21, bairro 21, cidade 21</td>
                                        </tr>
                                        <tr>
                                            <td>26</td>
                                            <td><a href="cadastroClientes.html">testear</td>
                                            <td>Gnome</td>
                                            <td>Rua 22, bairro 22, cidade 22</td>
                                        </tr>
                                        <tr>
                                            <td>27</td>
                                            <td><a href="cadastroClientes.html">testear 1.2</a></td>
                                            <td>(99) 9999-99993</td>
                                            <td>Rua 23, bairro 23, cidade 23</td>
                                        </tr>
                                        <tr>
                                            <td>28</td>
                                            <td><a href="cadastroClientes.html">testear 1.3</a></td>
                                            <td>(99) 9999-99993</td>
                                            <td>Rua 24, bairro 24, cidade 24</td>
                                        </tr>
                                        <tr>
                                            <td>29</td>
                                            <td><a href="cadastroClientes.html">testear 2.0</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>Rua 25, bairro 25, cidade 25<</td>
                                        </tr>
                                        <tr>
                                            <td>30</td>
                                            <td><a href="cadastroClientes.html">testear Rua</a></td>
                                            <td>(99) 9999-9999</td>
                                            <td>Rua 26, bairro 26, cidade 26<</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="control-sidebar-bg"></div>
    </div>
</body>
</html>