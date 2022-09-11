<?php
class pizza
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

interface pizzaDAO
{
  public function showALL();
  public function PIZZAadd($nome, $descricao, $preco, $caminho);
  public function delid($id);
  public  function editid(pizza $u);
}
