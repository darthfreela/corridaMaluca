
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

	}
?>
