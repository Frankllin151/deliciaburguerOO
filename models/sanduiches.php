<?php
class sanduiches
{
  public $id;
  public $preco;
  public $nome;
  public $descricao;
  public  $img;
  public function  setId($i)
  {
    return $this->id = trim($i);
  }
  public function  setNome($n)
  {
    return $this->nome = $n;
  }
  public function setpreco($p)
  {
    return $this->preco = $p;
  }
  public function setdescricao($d)
  {
    return $this->descricao = $d;
  }
  public function  getNome()
  {
    return $this->nome;
  }
  public function getpreco()
  {
    return $this->preco;
  }
  public function getdescricao()
  {
    return $this->descricao;
  }
  public function getid()
  {
    return $this->id;
  }
}

interface sanduichesDAO
{
  public function showsd();
  public function sandui($nome, $descricao, $preco, $caminho);
  public function deleteS($id);
  public  function editSd(sanduiches $u);
  public function sandid($id);
}
