<?php
require_once("../init.php");

class Banco{
    protected $mysqli;

    public function __construct(){
        $this->conexao();
    }
    
    public function conexao(){
        $this->mysqli = new mysqli(BD_SERVIDOR,BD_USUARIO,BD_SENHA,BD_BANCO);
    }

    public function cadastraLivro($nome,$autor,$quantidade,$preco,$data){
        $stmt = $this->mysqli->prepare("insert into livros (`nome`,`autor`,`quantidade`,`preco`,`data`) values (?,?,?,?,?)");
        $stmt->bind_param($nome,$autor,$quantidade,$preco,$data);
        if($stmt->execute() == TRUE){
            return true;
        }else{
            return false;
        };
    }

    public function listarLivros(){ //lista TODOS os livros
        $result = $this->mysqli->query("select * from livros");
        while($row = $result->fetch_array(MYSQLI_ASSOC)){
            $array[]=$row;
        }
        return $array;
    }

    public function pesquisaLivro($cod){ //vai trazer um livro ESPECIFICO com base em um cod
        $result = $this->mysqli->query("select * from `livros` where `cod`='".$cod."'");
        return $result->fetch_array(MYSQLI_ASSOC);
    }

    public function excluirLivro($cod){
        if($this->mysqli->query("delete from `livros` where `cod`='".$cod."'") == TRUE){
            return true;
        }else{
            return false;
        };
    }

    public function atualizaLivro($cod,$nome,$autor,$quantidade,$preco,$flag,$data){
        $stmt = $this->mysqli->prepare("update `livros` set `nome`=?, `autor`=?, `quantidade`=?, `preco`=?, `flag`=?, `data`=? where `cod`=?");
        $stmt->bind_param($nome,$autor,$quantidade,$preco,$flag,$data,$cod);
        if($stmt->execute() == TRUE){
            return true;
        }else{
            return false;
        };
    }
}
?>