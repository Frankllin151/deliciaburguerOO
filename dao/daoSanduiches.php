<?php
require 'models/sanduiches.php';

class daosanduichesmtsql implements sanduichesDAO
{
  private $pdo;
  public function __construct(PDO $driver)
  {
    $this->pdo = $driver;
  }
  public function showsd()
  {
    $sql = 'SELECT * FROM sanduiches ';
    $sql = $this->pdo->query($sql);
    if ($sql->rowCount() > 0) {
      $show = $sql->fetchAll();
    }
    return $show;
  }
  public function sandui($nome, $descricao, $preco, $caminho)
  {
    $sql = "INSERT INTO sanduiches (nome, descricao, preco, img) VALUES  (:nome, :descricao, 
    :preco, :img)";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':descricao', $descricao);
    $sql->bindValue(':preco', $preco);
    $sql->bindValue(':img', $caminho);
    $sql->execute();
  }
  public function sandid($id)
  {
    $sql = $this->pdo->prepare("SELECT * FROM sanduiches WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    if ($sql->rowCount() > 0) {
      $array = array();
      $data = $sql->fetch();
      $u = new sanduiches();
      $u->setId($data['id']);
      $u->setNome($data['nome']);
      $u->setdescricao($data['descricao']);
      $u->setpreco($data['preco']);
      return $u;
    } else {
      return false;
    }
  }
  public function deleteS($id)
  {
    $sql = $this->pdo->prepare("DELETE FROM sanduiches WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
  }

  public  function editSd(sanduiches $u)
  {
    $sql = $this->pdo->prepare("UPDATE sanduiches SET nome = :nome, descricao = :descricao, preco = :preco WHERE
    id = :id");
    $sql->bindValue(':nome', $u->getNome());
    $sql->bindValue(':descricao', $u->getdescricao());
    $sql->bindValue(':preco', $u->getpreco());
    $sql->bindValue(':id', $u->getid());
    $sql->execute();
  }
}
