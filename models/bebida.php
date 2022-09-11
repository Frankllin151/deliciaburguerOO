<?php
class bebida
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

interface bebidaDAO
{
  public function showqt();
  public function qtadd($nome, $preco, $caminho);
  public function delqt($id);
  public  function editqt(bebida $u);
  public function qtid($id);
}
