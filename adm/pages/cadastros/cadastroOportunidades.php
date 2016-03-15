<?php
include("../../funcoes/conexao.php");
$connect = new conexao();
if (array_key_exists("enviar", $_POST)) {

    $nome = $_POST["txtNome"];
    $descricao = $_POST["txtDescricao"];
    $tipo = $_POST["cbTipo"];
    $dtaInicio = $_POST["dtaInicio"];
    $dtaFim = $_POST["dtaFim"];
    $localOportunidade = $_POST["txtLocal"];

    if (($nome == "") || ($descricao == "") || ($tipo == "") || ($dtaInicio == "") || ($dtaFim == "") || ($localOportunidade == "")) {
        echo "Preencha as informações corretamente.";
        exit;
    } else {
        if (array_key_exists("id", $_GET)) {
            $SQL = "UPDATE principal_oportunidades SET nome = '" . $nome . "', descricao = '" . $descricao . "', tipo_oportunidades = '" . $tipo . "', local_oportunidade = '" . $localOportunidade . "', dta_inicio = " . $dtaInicio . ", dta_fim = " . $dtaFim . "WHERE oportunidade_id = " . $_GET["id"];
        } else {
            $SQL = "INSERT INTO principal_oportunidades VALUES('" . $nome . "', '" . $descricao . "','" . $tipo . "', '" . $localOportunidade . "', " . $dtaInicio . ", " . $dtaFim . ")";
        }	
    }
	$connect->conectar();
	$connect->set("sql", $SQL);
	$retorno = $connect->executar();
	if ($retorno > 0) {
		echo "<script>alert('Oportunidade atualizada/inserida com sucesso.');</script>";
		echo "<script>window.location = 'oportunidades.php';</script>";
	} else {
		echo "<script>alert('Erro ao atualizar/inserir o Oportunidade.');</script>";
	}
}
?>

<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Corrida Maluca --> Cadastro de Oportunidades</title>
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
            $(function() {
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
                    <h1>Cadastro de Oportunidades
                    </h1>
                    <ol class="breadcrumb">
                        <li><a href="../../default.php"><i class="fa fa-dashboard"></i>Home</a></li>
                        <li><a href="../../pages/cadastros/oportunidades.php">Oportunidades</a></li>
                        <li><a href="../../pages/cadastros/cadastroOportunidades.php">Cadstro Oportunidades</a></li>
                    </ol>
                </section>
                <section class="content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="box box-primary">
                                <div class="box-header with-border">
                                    <h3 class="box-title">Cadastro de Oportunidades</h3>
                                </div>
                                <?php
                                if (isset($GET["id"])) {
                                    if (is_numeric($GET["id"])) {
										$connect->conectar();
                                        $sqlForm = "SELECT opor.oportunidade_id AS id,
															opor.nome AS nome,
															opor.descricao AS descricao,
															opor.tipo_oportunidades AS tipo,
															opor.local_oportunidade AS local, 
															opor.dta_inicio AS dtaInicio,
															opor.dta_fim AS dtaFim
														FROM principal_oportunidades AS opor
														WHERE opor.oportunidade_id = " . $GET["id"];
                                        $connect->set("sql", $sqlForm);
                                        $lista = $connect->executar();
                                        while ($oportunidades = mysql_fetch_object($lista)) {
                                            $nome = $oportunidades->nome;
                                            $descricao = $oportunidades->descricao;
                                            $tipo = $oportunidades->tipo;
                                            $dtaInicio = $oportunidades->dtaInicio;
                                            $dtaFim = $oportunidades->dtaFim;
                                            $localOportunidade = $oportunidades->local;
                                        }
                                    }
                                } else {
                                    $nome = "";
                                    $descricao = " ";
                                    $tipo = "";
                                    $dtaInicio = "";
                                    $dtaFim = "";
                                    $localOportunidade = "";
                                }
                                ?>
                                <form role="form">
                                    <div class="box-body">
                                        <div class="form-group col-md-5">
                                            <label for="txtNome">Nome</label>
                                            <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Nome" value="<?php echo $nome; ?>" required/>
                                        </div>
                                        <div class="form-group col-md-5">
                                            <label for="txtLocal">Local</label>
                                            <input type="text" class="form-control" id="txtLocal" name="txtLocal" placeholder="Local" value="<?php echo $localOportunidade; ?>" required/>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="dtaInicio">Data Início</label>
                                            <input type="date" class="form-control" id="dtaInicio" name="dtaInicio" value="<?php echo $dtaInicio; ?>" required/>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="dtaFim">Data Fim</label>
                                            <input type="date" class="form-control" id="dtaFim" name="dtaFim" value="<?php echo $dtaFim; ?>" required/>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="cbTipo">Tipo Oportunidade</label>
                                            <select class="form-control" class="form-control" id="cbTipo" name="cbTipo" placeholder="Tipo Oportunidade" required>
                                                <option value="Vaga">Vaga</option>
                                                <option value="Curso">Curso</option>
                                            </select>	
                                        </div>
                                        <div class="form-group col-md-9">
                                            <label for="txtDescricao">Descrição</label>
                                            <textarea class="form-control" cols=60 id="txtDescricao" rows="10" name="txtDescricao" maxlength="500" wrap="hard" placeholder="Descrição Oportunidades" value="<?php echo $descricao; ?>" required>
                                            </textarea>
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