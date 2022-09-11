<?php
class pateis
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

interface pateisDAO
{
  public function showpt();
  public function ptadd($nome, $descricao, $preco, $caminho);
  public function delpt($id);
  public  function editpt(pateis $u);
  public function ptid($id);
}
