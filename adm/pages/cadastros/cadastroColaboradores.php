<?php
include("../../funcoes/conexao.php");
$connect = new conexao();
if (array_key_exists("enviar", $_POST)) {
    $id = $_POST["ID"];
    $nome = $_POST["txtNome"];
    $telefone = $_POST["txtTelefone"];
    $dtaAdmissao = $_POST["dtaAdmissao"];
    $perfil = $_POST["cbPerfil"];
    if (($nome == "") || ($telefone == "") || ($bairro == "") || ($estado == "0") || ($cidade == "")) {
        echo "Preencha as informações corretamente.";
        exit;
    } else {
        if ($id <> "") {
            $SQL = "UPDATE principal_usuarios SET nome = '" . $nome . "', telefone = '" . $telefone . "', dtaAdmissao = '" . $dtaAdmissao . "', perfil = " . $perfil . " WHERE clientes_id = " . $id;
        } else {
            $SQL = "INSERT INTO principal_usuarios (nome, telefone, perfil, data_admissao) VALUES('" . $nome . "', '" . $telefone . "', '" . $perfil . "', " . $dtaAdmissao . ")";
        }
        
        $connect->conectar();
        $connect->set("sql", $SQL);
        $retorno = $connect->executar();
        if ($retorno > 0) {
            echo "<script>alert('Cliente atualizado/inserido com sucesso.');</script>";
            echo "<script>window.location = 'colaboradores.php';</script>";
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
        <title>Corrida Maluca --> Cadastro de Colaboradores</title>
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <link rel="stylesheet" href="../../bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <link rel="stylesheet" href="../../plugins/datatables/dataTables.bootstrap.css">
        <link rel="stylesheet" href="../../dist/css/AdminLTE.min.css">
        <link rel="stylesheet" href="../../dist/css/skins/_all-skins.min.css">
        <script src="../../plugins/jQuery/jQuery-2.1.4.min.js"></script>
        <script src="../../plugins/jQuery/jquery.mask.min.js"></script>
        <script src="../../bootstrap/js/bootstrap.min.js"></script>
        <script src="../../plugins/datatables/jquery.dataTables.min.js"></script>
        <script src="../../plugins/datatables/dataTables.bootstrap.min.js"></script>
        <script src="../../plugins/slimScroll/jquery.slimscroll.min.js"></script>
        <script src="../../plugins/fastclick/fastclick.min.js"></script>
        <script src="../../dist/js/app.min.js"></script>
        <script src="../../dist/js/demo.js"></script>
	<script src="../../dist/js/cliente.js"></script>
        <script>
            $(function() {
                $('#tblQualificacao').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
                $('#tblSistemico').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
                $('#tblPsicologico').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
                $('#tblFisico').DataTable({
                    "paging": true,
                    "lengthChange": false,
                    "searching": false,
                    "ordering": true,
                    "info": true,
                    "autoWidth": false
                });
                $('#tblFeedBack').DataTable({
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
                        <li><a href="../../pages/cadastros/clientes.php">Colaboradores</a></li>
                        <li><a href="../../pages/cadastros/cadastroColaboradores.php">Cadstro Colaboradores</a></li>
                    </ol>
                </section>
                <section class="content">
                    <form role="form">
                        <div class="col-md-12">
                            <div class="nav-tabs-custom">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#pessoais" data-toggle="tab">Dados Pessoais</a></li>
                                    <li><a href="#empresarias" data-toggle="tab">Dados Empresarias</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="active tab-pane" id="pessoais">
                                        <div>
                                            <div class="box-body">
                                                <?php
                                                if (isset($_GET["id"])) {
                                                    if (is_numeric($_GET["id"])) {
														$connect->conectar();
														$sqlForm = "SELECT usua.usuarios_id AS id, 
                                                                        usua.nome AS nome,
                                                                        usua.telefone AS telefone,
                                                                        usua.perfil AS perfil,
                                                                        usua.data_admissao AS data_admissao.
                                                                FROM principal_usuarios AS usua
                                                                WHERE usua.clientes_id = " . $_GET["id"];
														$connect->set("sql", $sqlForm);
														$lista = $connect->executar();
                                                        while ($clientes = mysql_fetch_object($lista)) {
                                                            $id = $clientes->id;
                                                            $nome = $clientes->nome;
                                                            $telefone = $clientes->telefone;
                                                            $dtaAdmissao = $clientes->data_admissao;
                                                            $cbPerfil = $clientes->perfil;
                                                        }
                                                    }
                                                } else {
                                                    $id = "";
                                                    $nome = "";
                                                    $telefone = "";
                                                    $dtaAdmissao = "";
                                                    $cbPerfil = "";
                                                }
                                                ?>
                                                <input type="hidden" name="ID" id="ID" value="<?php echo $id; ?>"/>
                                                <div class="form-group col-md-5">
                                                    <label for="txtNome">Nome</label>
                                                    <input type="text" class="form-control" id="txtNome" name="txtNome" placeholder="Nome" required value="<?php echo $nome; ?>">
                                                </div>

                                                <div class="form-group col-md-3">
                                                    <label for="txtTelefone">Telefone</label>
                                                    <input type="text" class="form-control" id="txtTelefone" name="txtTelefone" placeholder="Telefone" required value="<?php echo $telefone; ?>">
                                                </div>
                                            </div>											
                                        </div>
                                    </div>
                                    <div class="tab-pane" id="empresarias">
                                        <div>
                                            <div class="box-body">
                                                <div class="form-group col-md-3">
                                                    <label for="dtaAdmissao">Data Admissão</label>
                                                    <input type="date" class="form-control" id="dtaAdmissao" name="dtaAdmissao" placeholder="Data Admissão" required value="<?php echo $dtaAdmissao; ?>">
                                                </div>
                                                <div class="form-group col-md-4">
                                                    <label for="cbPerfil">Perfil</label>
                                                    <select class="form-control" class="form-control" id="cbPerfil" name="cbPerfil" placeholder="Perfil" required>
                                                        <option value="Administrador">Administrador</option>
                                                        <option value="Gestor">Gestor</option>
                                                        <option value="Lider">Lider</option>
                                                        <option value="Operacional">Operacional</option>
                                                    </select>
                                                </div>
                                            </div>
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
                                                                <table id="tblFeedBack" class="table table-bordered table-striped">
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
                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="fisico">
                                                        <div class="box">
                                                            <div class="box-body">
                                                                <table id="tblFisico" class="table table-bordered table-striped">
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

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="psicologico">
                                                        <div class="box">
                                                            <div class="box-body">
                                                                <table id="tblPsicologico" class="table table-bordered table-striped">
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

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="sistemico">
                                                        <div class="box">
                                                            <div class="box-body">
                                                                <table id="tblSistemico" class="table table-bordered table-striped">
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

                                                                    </tbody>
                                                                </table>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="tab-pane" id="qualificacao">
                                                        <div class="box">
                                                            <div class="box-body">
                                                                <table id="tblQualificacao" class="table table-bordered table-striped">
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
                        <div class="box-footer">
                            <button type="submit" class="btn btn-primary">Salvar</button>
                            <button type="reset" class="btn btn-danger ">Limpar</button>
                        </div>
                    </form>
            </div>
        </div>
    </section>
</div>
<div class="control-sidebar-bg"></div>
</div>
</body>
</html>