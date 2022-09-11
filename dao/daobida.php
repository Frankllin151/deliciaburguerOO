<?php
require 'models/bebida.php';

class daobebidamysql implements bebidaDAO
{
  private $pdo;
  public function __construct(PDO $driver)
  {
    $this->pdo = $driver;
  }
  public function showqt()
  {
    $sql = 'SELECT * FROM 	bebidas	 ';
    $sql = $this->pdo->query($sql);
    if ($sql->rowCount() > 0) {
      $show = $sql->fetchAll();
    }
    return $show;
  }
  public function qtadd($nome, $preco, $caminho)
  {
    $sql = "INSERT INTO 	bebidas	 (nome, preco, img) VALUES  (:nome,  
    :preco, :img)";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':preco', $preco);
    $sql->bindValue(':img', $caminho);
    $sql->execute();
  }
  public function qtid($id)
  {
    $sql = $this->pdo->prepare("SELECT * FROM 	bebidas	 WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    if ($sql->rowCount() > 0) {
      $array = array();
      $data = $sql->fetch();
      $u = new bebida();
      $u->setId($data['id']);
      $u->setNome($data['nome']);
      $u->setpreco($data['preco']);
      return $u;
    } else {
      return false;
    }
  }
  public function delqt($id)
  {
    $sql = $this->pdo->prepare("DELETE FROM 	bebidas	 WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
  }

  public  function editqt(bebida $u)
  {
    $sql = $this->pdo->prepare("UPDATE 	bebidas	 SET nome = :nome,  preco = :preco WHERE
    id = :id");
    $sql->bindValue(':nome', $u->getNome());

    $sql->bindValue(':preco', $u->getpreco());
    $sql->bindValue(':id', $u->getid());
    $sql->execute();
  }
}
