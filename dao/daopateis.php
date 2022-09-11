<?php
require 'models/pateis.php';

class daopateischesmtsql implements pateisDAO
{
  private $pdo;
  public function __construct(PDO $driver)
  {
    $this->pdo = $driver;
  }
  public function showpt()
  {
    $sql = 'SELECT * FROM pateis ';
    $sql = $this->pdo->query($sql);
    if ($sql->rowCount() > 0) {
      $show = $sql->fetchAll();
    }
    return $show;
  }
  public function ptadd($nome, $descricao, $preco, $caminho)
  {
    $sql = "INSERT INTO pateis (nome, descricao, preco, img) VALUES  (:nome, :descricao, 
    :preco, :img)";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':descricao', $descricao);
    $sql->bindValue(':preco', $preco);
    $sql->bindValue(':img', $caminho);
    $sql->execute();
  }
  public function ptid($id)
  {
    $sql = $this->pdo->prepare("SELECT * FROM pateis WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    if ($sql->rowCount() > 0) {
      $array = array();
      $data = $sql->fetch();
      $u = new pateis();
      $u->setId($data['id']);
      $u->setNome($data['nome']);
      $u->setdescricao($data['descricao']);
      $u->setpreco($data['preco']);
      return $u;
    } else {
      return false;
    }
  }
  public function delpt($id)
  {
    $sql = $this->pdo->prepare("DELETE FROM pateis WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
  }

  public  function editpt(pateis $u)
  {
    $sql = $this->pdo->prepare("UPDATE pateis SET nome = :nome, descricao = :descricao, preco = :preco WHERE
    id = :id");
    $sql->bindValue(':nome', $u->getNome());
    $sql->bindValue(':descricao', $u->getdescricao());
    $sql->bindValue(':preco', $u->getpreco());
    $sql->bindValue(':id', $u->getid());
    $sql->execute();
  }
}
