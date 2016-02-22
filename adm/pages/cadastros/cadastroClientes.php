<?php 
include("../../funcoes/conexao.php");

if(isset($_POST["txtNome"])){
	
    $nome = $_POST["txtNome"];
    $telefone = $_POST["txtTelefone"];
    $bairro = $_POST["txtBairro"];
    $estado = $_POST["cbEstado"];
	$cidade = $_POST["cbCidade"];
    
	if( ($nome == "") || ($telefone == "") || ($bairro == "") || ($estado == "0") || ($cidade == "") ){
        echo "Preencha as informações corretamente.";
        exit;
    } else {
		if($_GET["id"] != null){
			$SQL = "UPDATE principal_clientes SET nome = '".$nome."', telefone = '".$telefone."', bairro = '".$bairro."', estado = ".$estado.",cidade = ".$cidade. "WHERE clientes_id = ".$GET["id"];
		}else{
			$SQL = "INSERT INTO principal_clientes VALUES('".$nome."', '".$telefone."', '".$bairro."', ".$estado.",".$cidade.")";
		}
        
        $query = mysql_query($SQL);
        if(mysql_affected_rows($conn) > 0){
            echo "<script>alert('Cliente atualizado/inserido com sucesso.');</script>";
            echo "<script>window.location = 'clientes.php';</script>";
        } else {
            echo "<script>alert('Erro ao atualizar/inserir o cliente.');</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Corrida Maluca --> Cadastro de Clientes</title>
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
		$("#txtTelefone").mask("(99) 9999-9999");

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
                <h1>Cadastro de Clientes
                </h1>
                <ol class="breadcrumb">
                    <li><a href="../../default.php"><i class="fa fa-dashboard"></i>Home</a></li>
                    <li><a href="../../pages/cadastros/clientes.php">Clientes</a></li>
					<li><a href="../../pages/cadastros/cadastroClientes.php">Cadstro Clientes</a></li>
                </ol>
            </section>
            <section class="content">
                <div class="row">
                    <div class="col-md-12">
                        <div class="box box-primary">
                            <div class="box-header with-border">
                                <h3 class="box-title">Cadastro de Clientes</h3>
                            </div>
							<?php
								if(isset($GET["id"])){
									if(is_numeric($GET["id"])){
										$mysql = new conexao;
										$lista = "SELECT cli.clientes_id AS id, 
													cli.nome AS nome,
													cli.telefone AS telefone,
													cli.bairro AS bairro,
													cli.cidade AS cidade.
													cli.estado AS estado
												FROM principal_clientes AS cli 
												WHERE cli.clientes_id = ".$GET["id"];
										while($clientes = mysql_fetch_object($lista)){
											$nome = $clientes["nome"];
											$telefone = $clientes["telefone"];
											$bairro = $clientes["bairro"];
											$cbEstado = $clientes["estado"];
											$cbCidade = $clientes["cidade"];
										}	
									}
								}else{
									$nome = "";
									$telefone = "";
									$bairro = "";
									$cbEstado = "";
									$cbCidade = "";
								}
							?>
							<form role="form">
								<div class="box-body">
									<div class="form-group col-md-5">
										<label for="txtNome">Nome</label>
										<input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Nome" required value="<?php echo $nome;?>">
									</div>
									<div class="form-group col-md-3">
										<label for="txtTelefone">Telefone</label>
										<input type="text" class="form-control" id="txtTelefone" name="txtTelefone" placeholder="Telefone" required value="<?php echo $telefone;?>">
									</div>
									<div class="form-group col-md-4">
										<label for="txtBairro">Bairro</label>
										<input type="text" class="form-control" id="txtBairro" name="txtBairro" placeholder="Bairro" required value="<?php echo $bairro;?>">
									</div>
									<div class="form-group col-md-4">
										<label for="cbEstado">Estado</label>
										  <select class="form-control" id="cbEstado" name="cbEstado" placeholder="Estado" required>
											 <?php
												$mysql = new conexao;
												$lista = $mysql->sql_query("SELECT *
																			FROM estados 
																			ORDER BY nome ASC");
												while($estados = mysql_fetch_object($lista)){
											?>
												<option value="<?php echo $cbEstado;?>" <?php echo ($resultado["estado"] == $cbEstado) ? "selected='selected'" : "" ?>>
													<?php echo $cbEstado;?>
												</option>
											<?php 
												}
												$mysql->desconecta;
											?>
										</select>										
									</div>
									<div class="form-group col-md-4">
										<label for="cbCidade">Cidade</label>
										 <select class="form-control" class="form-control" id="cbCidade" name="cbCidade" placeholder="Cidade" required>
										 <?php
											$mysql = new conexao;
											$lista = $mysql->sql_query("SELECT *
																		FROM cidades 
																		ORDER BY nome ASC");
											while($cidades = mysql_fetch_object($lista)){
										?>
											<option value="<?php echo $cbCidade];?>" <?php echo ($resultado["cidade"] == $cbCidade) ? "selected='selected'" : "" ?>>
												<?php echo $cbCidade;?>
											</option>
										<?php 
											}
											$mysql->desconecta;
										?>
										</select>
									</div>
								</div>
								<div class="box-footer">
									<button type="submit" class="btn btn-primary">Salvar</button>
									<button type="reset" class="btn btn-danger ">Limpar</button>
								</div>
							</form>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div class="control-sidebar-bg"></div>
    </div>
</body>
</html>
