<<<<<<< HEAD
<?php

error_reporting(E_ALL & ~ E_NOTICE & ~ E_DEPRECATED);

class conexao {

    var $host = "localhost";
    var $db = "corridamaluca";
    var $user = "root";
    var $password = "123";
    private $sql;

    function conectar() {
        $conexao =
                mysql_connect($this->host, $this->user, $this->password) 
                    or die($this->mensagem(mysql_error()));
        $this->selecionarDB();
        return $conexao;
    }

    function selecionarDB() {
        $banco = mysql_select_db($this->db) or die($this->mensagem(mysql_error()));
        if ($banco) {
            return true;
        } else {
            return false;
        }
    }

     function executar() {
        $query = mysql_query($this->sql) or die($this->mensagem(mysql_error()));
        return $query;
    }

    function set($propriedade, $valor) {
        $this->$propriedade = $valor;
    }

    function mensagem($erro) {
        echo $erro;
=======
<?
class conexao {
    var $host = "localhost"; 
    var $user = "root";
    var $senha = "123";
    var $dbase = "corridamaluca";

    var $query;
    var $link;
    var $resultado;
    
    function MySQL(){
    }
	
    function conecta(){
        $this->link = @mysql_connect($this->host,$this->user,$this->senha);
        if(!$this->link){
            print "Ocorreu um Erro na conexão MySQL:";
			print "<b>".mysql_error()."</b>";
			die();
        }elseif(!mysql_select_db($this->dbase,$this->link)){
            print "Ocorreu um Erro em selecionar o Banco:";
			print "<b>".mysql_error()."</b>";
			die();
        }
    }


    function sql_query($query){
        $this->conecta();
        $this->query = $query;
        if($this->resultado = mysql_query($this->query)){
            $this->desconecta();
            return $this->resultado;
        }else{
            print "Ocorreu um erro ao executar a Query MySQL: <b>$query</b>";
			print "<br><br>";
			print "Erro no MySQL: <b>".mysql_error()."</b>";
			die();
            $this->desconecta();
        }        
    }

    function desconecta(){
        return mysql_close($this->link);
>>>>>>> origin/master
    }
}
?>
