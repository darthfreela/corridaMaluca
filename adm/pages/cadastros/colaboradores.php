<?php
	include("../../funcoes/conexao.php");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
	<meta http-equiv="Content-Language" content="pt-br">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Corrida Maluca -> Colaboradores</title>
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
           $("#tabela1").DataTable();
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
            <a href="default.php" class="logo">
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
                            <li><a href="../../pages/cadastros/clientes.php"><i class="fa fa-circle-o"></i>Clientes</a></li>
                            <li><a href="../../pages/cadastros/colaboradores.php"><i class="fa fa-circle-o"></i>Colaboradores</a></li>
                            <li><a href="../../pages/cadastros/perguntas.php"><i class="fa fa-circle-o"></i>Perguntas</a></li>
                            <li><a href="../../pages/cadastros/oportunidades.php"><i class="fa fa-circle-o"></i>Oportunidades</a></li>
                        </ul>
                    </li>
                </ul>
            </section>
        </aside>
        <div class="content-wrapper">
            <section class="content-header">
                <h1>Cadastro de Colaboradores
                </h1>
                <ol class="breadcrumb">
                    <li><a href="../../default.php"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li><a href="colaboradores.php">Colaboradores</a></li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-xs-12">
                        <div class="box">
                            <div class="box-body">
								<form action="cadastroColabores.php">
									<button type="submit" class="btn btn-success">Novo</button>
								</form>
                                <table id="tabela1" class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th style="width: 7%;">Codigo</th>
                                            <th style="width: 50%;">Nome</th>
                                            <th style="width: 10%;">Telefone</th>
                                            <th style="width: 33%;">Admissão</th>
                                        </tr>
                                    </thead>
                                    <tbody>
										<?php 
											$mysql = new conexao;
											$lista = $mysql->sql_query("SELECT usua.usuarios_id AS id, 
																			usua.nome AS nome,
																			usua.telefone AS telefone,
																			usua.perfil AS perfil,
																			usua.data_admissao AS admissao,
																		FROM principal_usuarios AS usua
																		ORDER BY cli.usuarios_id ASC");
											while($usuarios = mysql_fetch_object($lista)){
										?>
											<tr>
												<td>
												<?php echo $usuarios["id"];?>
											</td>
											<td>
												<a href="cadastroColaboradores.php?id=<?php echo $usuarios["id"];?>">
													<?php echo $usuarios["nome"];?>
												</a>
											</td>
											<td>
												<?php echo $usuarios["telefone"];?>
											</td>
											<td>
												<?php echo $usuarios["admissao"];?>
											</td>
											</tr>
										<?php 
											}
											$mysql->desconecta;
										?>
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