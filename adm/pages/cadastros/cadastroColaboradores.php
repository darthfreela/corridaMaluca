<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Corrida Maluca --> Cadastro de Colaboradores</title>
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
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false
            });
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
                    <li><a href="../../pages/cadastros/clientes.html">Colaboradores</a></li>
                    <li><a href="../../pages/cadastros/cadastroColaboradores.html">Cadstro Colaboradores</a></li>
                </ol>
            </section>
            <section class="content">
                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li class="active"><a href="#pessoais" data-toggle="tab">Dados Pessoais</a></li>
                            <li><a href="#empresarias" data-toggle="tab">Dados Empresarias</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="pessoais">
                                <div>
                                    <form role="form">
                                        <div class="box-body">
                                            <div class="form-group col-md-5">
                                                <label for="txtNome">Nome</label>
                                                <input type="text" class="form-control" id="txtNome" placeholder="Nome">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="txtEmail">Email</label>
                                                <input type="email" class="form-control" id="txtEmail" placeholder="Email">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="txtTelefone">Telefone</label>
                                                <input type="text" class="form-control" id="txtTelefone" placeholder="Telefone">
                                            </div>
                                            <div class="form-group col-md-3">
                                                <label for="txtCEP">CEP</label>
                                                <input type="text" class="form-control" id="txtCEP" placeholder="CEP">
                                            </div>
                                            <div class="form-group col-md-7">
                                                <label for="txtRua">Rua</label>
                                                <input type="text" class="form-control" id="txtRua" placeholder="Rua">
                                            </div>
                                            <div class="form-group col-md-2">
                                                <label for="txtNumero">Número</label>
                                                <input type="text" class="form-control" id="txtNumero" placeholder="Numero">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="txtBairro">Bairro</label>
                                                <input type="text" class="form-control" id="txtBairro" placeholder="Bairro">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="txtEstado">Estado</label>
                                                <select class="form-control" id="txtEstado" placeholder="Estado">
                                                    <option value="AC">Acre</option>
                                                    <option value="AL">Alagoas</option>
                                                    <option value="AP">Amapá</option>
                                                    <option value="AM">Amazonas</option>
                                                    <option value="BA">Bahia</option>
                                                    <option value="CE">Ceará</option>
                                                    <option value="DF">Distrito Federal</option>
                                                    <option value="ES">Espírito Santo</option>
                                                    <option value="GO">Goiás</option>
                                                    <option value="MA">Maranhão</option>
                                                    <option value="MT">Mato Grosso</option>
                                                    <option value="MS">Mato Grosso do Sul</option>
                                                    <option value="MG">Minas Gerais</option>
                                                    <option value="PA">Pará</option>
                                                    <option value="PB">Paraíba</option>
                                                    <option value="PR">Paraná</option>
                                                    <option value="PE">Pernambuco</option>
                                                    <option value="PI">Piauí</option>
                                                    <option value="RJ">Rio de Janeiro</option>
                                                    <option value="RN">Rio Grande do Norte</option>
                                                    <option value="RS">Rio Grande do Sul</option>
                                                    <option value="RO">Rondônia</option>
                                                    <option value="RR">Roraima</option>
                                                    <option value="SC">Santa Catarina</option>
                                                    <option value="SP">São Paulo</option>
                                                    <option value="SE">Sergipe</option>
                                                    <option value="TO">Tocantins</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="txtCidade">Cidade</label>
                                                <input type="text" class="form-control" id="txtCidade" placeholder="Cidade">
                                            </div>
                                        </div>
                                        <div class="box-footer">
                                            <button type="submit" class="btn btn-primary">Salvar</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="empresarias">
								<div>
									<form role="form">
										<div class="box-body">
											<div class="form-group col-md-3">
												<label for="txtTempo">Tempo de Empresa</label>
												<input type="text" class="form-control" id="txtNome" placeholder="Tempo de empresa">
											</div>
											<div class="form-group col-md-6">
												<label for="txtPerfil">Peril</label>
												<input type="text" class="form-control" id="txtPerfil" placeholder="Perfil">
											</div>
										</div>
									</form>										
									<div class="nav-tabs-custom">
										<ul class="nav nav-tabs">
											<li class="active"><a href="#feedback" data-toggle="tab">Histórico de Feedback</a></li>
											<li><a href="#fisico" data-toggle="tab">Histórico Físico</a></li>
											<li><a href="#psicologico" data-toggle="tab">Histórico Psicológico</a></li>
											<li><a href="#sistemico" data-toggle="tab">Histórico Sistêmico</a></li>
											<li><a href="#qualificacao" data-toggle="tab">Histórico de Qualificação</a></li>
										</ul>
										<div class="tab-content">
											<div class="active tab-pane" id="feedback">
												<div class="box">
													<div class="box-body">
														<table id="example1" class="table table-bordered table-striped">
															<thead>
																<tr>
																	<th style="width: 7%;">Codigo</th>
																	<th style="width: 50%;">Nome</th>
																	<th style="width: 10%;">Feeback</th>
																	<th style="width: 33%;">Data</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td>Joao</td>
																	<td>ExameExameExameExameExameExameExameExame</td>
																	<td>01/01/2001</td>
																</tr>
																<tr>
																	<td>2</td>
																	<td>Francisco</td>
																	<td>ExameExameExameExameExameExameExameExame</td>
																	<td>01/01/2001</td>
																</tr>
																<tr>
																	<td>3</td>
																	<td>Santos</td>
																	<td>ExameExameExameExameExameExameExameExame</td>
																	<td>01/01/2001</td>
																</tr>
																<tr>
																	<td>4</td>
																	<td>Zika</td>
																	<td>ExameExameExameExameExameExameExameExame</td>
																	<td>01/01/2001</td>
																</tr>
																<tr>
																	<td>5</td>
																	<td>Azul</td>
																	<td>ExameExameExameExameExameExameExameExame</td>
																	<td>01/01/2001</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="fisico">
												<div class="box">
													<div class="box-body">
														<table id="example1" class="table table-bordered table-striped">
															<thead>
																<tr>
																	<th style="width: 7%;">Codigo</th>
																	<th style="width: 50%;">Ação</th>
																	<th style="width: 40%;">Descrição</th>
																	<th style="width: 10%;">Data</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td>Exame</td>
																	<td>ExameExameExameExameExameExameExameExame</td>
																	<td>01/01/2001</td>
																</tr>
																<tr>
																	<td>2</td>
																	<td>Atestado</td>
																	<td>AtestadoAtestadoAtestadoAtestadoAtestado</td>
																	<td>01/01/2001</td>
																</tr>
																<tr>
																	<td>3</td>
																	<td>Exame com atestado</td>
																	<td>Exame com atestadoExame com atestadoExame com atestadoExame com atestado</td>
																	<td>01/01/2001</td>
																</tr>
																<tr>
																	<td>4</td>
																	<td>Quase morreu</td>
																	<td>Quase morreuQuase morreuQuase morreuQuase morreuQuase morreu</td>
																	<td>01/01/2001</td>
																</tr>
																<tr>
																	<td>5</td>
																	<td>ta morrendo</td>
																	<td>ta morrendota morrendota morrendota morrendota morrendota morrendo</td>
																	<td>01/01/2001</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="psicologico">
											<div class="box">
													<div class="box-body">
														<table id="example1" class="table table-bordered table-striped">
															<thead>
																<tr>
																	<th style="width: 7%;">Codigo</th>
																	<th style="width: 30%;">Aspecto</th>
																	<th style="width: 60%;">Descrição</th>
																	<th style="width: 13%;">Data</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td>Joao</td>
																	<td>asdkjadkjakdj jkasjdkasjdksd jakdsjaks</td>
																	<td>01/01/2010</td>
																</tr>
																<tr>
																	<td>2</td>
																	<td>Francisco</td>
																	<td>asdkjadkjakdj jkasjdkasjdksd jakdsjaks</td>
																	<td>01/01/2010</td>
																</tr>
																<tr>
																	<td>3</td>
																	<td>Santos</td>
																	<td>asdkjadkjakdj jkasjdkasjdksd jakdsjaks</td>
																	<td>01/01/2010</td>
																</tr>
																<tr>
																	<td>4</td>
																	<td>Zika</td>
																	<td>asdkjadkjakdj jkasjdkasjdksd jakdsjaks</td>
																	<td>01/01/2010</td>
																</tr>
																<tr>
																	<td>5</td>
																	<td>Azul</td>
																	<td>asdkjadkjakdj jkasjdkasjdksd jakdsjaks</td>
																	<td>01/01/2010</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="sistemico">
												<div class="box">
													<div class="box-body">
														<table id="example1" class="table table-bordered table-striped">
															<thead>
																<tr>
																	<th style="width: 7%;">Codigo</th>
																	<th style="width: 30%;">Atividade</th>
																	<th style="width: 60%;">Descrição</th>
																	<th style="width: 13%;">Data</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td>Joao</td>
																	<td>asdkjadkjakdj jkasjdkasjdksd jakdsjaks</td>
																	<td>01/01/2010</td>
																</tr>
																<tr>
																	<td>2</td>
																	<td>Francisco</td>
																	<td>asdkjadkjakdj jkasjdkasjdksd jakdsjaks</td>
																	<td>01/01/2010</td>
																</tr>
																<tr>
																	<td>3</td>
																	<td>Santos</td>
																	<td>asdkjadkjakdj jkasjdkasjdksd jakdsjaks</td>
																	<td>01/01/2010</td>
																</tr>
																<tr>
																	<td>4</td>
																	<td>Zika</td>
																	<td>asdkjadkjakdj jkasjdkasjdksd jakdsjaks</td>
																	<td>01/01/2010</td>
																</tr>
																<tr>
																	<td>5</td>
																	<td>Azul</td>
																	<td>asdkjadkjakdj jkasjdkasjdksd jakdsjaks</td>
																	<td>01/01/2010</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
											<div class="tab-pane" id="qualificacao">
												<div class="box">
													<div class="box-body">
														<table id="example1" class="table table-bordered table-striped">
															<thead>
																<tr>
																	<th style="width: 7%;">Codigo</th>
																	<th style="width: 10%;">Qualificacao</th>
																	<th style="width: 83%;">Descrição</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<td>1</td>
																	<td>Joao</td>
																	<td>Rua 1, bairro 1, cidade 1</td>
																</tr>
																<tr>
																	<td>2</td>
																	<td>Francisco</td>
																	<td>5Rua 2, bairro 2, cidade 2</td>
																</tr>
																<tr>
																	<td>3</td>
																	<td>Santos</td>
																	<td>5Rua 3, bairro 3, cidade 3</td>
																</tr>
																<tr>
																	<td>4</td>
																	<td>Zika</td>
																	<td>6Rua 4, bairro 4, cidade 4</td>
																</tr>
																<tr>
																	<td>5</td>
																	<td>Azul</td>
																	<td>7Rua 5, bairro 5, cidade 5</td>
																</tr>
															</tbody>
														</table>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
                            </div>
                        </div>
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
