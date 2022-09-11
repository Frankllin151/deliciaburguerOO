<?php
require 'models/chorty.php';

class daocachorromysql implements cachorroqtDAO
{
  private $pdo;
  public function __construct(PDO $driver)
  {
    $this->pdo = $driver;
  }
  public function showqt()
  {
    $sql = 'SELECT * FROM cachorroquente	 ';
    $sql = $this->pdo->query($sql);
    if ($sql->rowCount() > 0) {
      $show = $sql->fetchAll();
    }
    return $show;
  }
  public function qtadd($nome, $descricao, $preco, $caminho)
  {
    $sql = "INSERT INTO cachorroquente	 (nome, descricao, preco, img) VALUES  (:nome, :descricao, 
    :preco, :img)";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(':nome', $nome);
    $sql->bindValue(':descricao', $descricao);
    $sql->bindValue(':preco', $preco);
    $sql->bindValue(':img', $caminho);
    $sql->execute();
  }
  public function qtid($id)
  {
    $sql = $this->pdo->prepare("SELECT * FROM cachorroquente	 WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
    if ($sql->rowCount() > 0) {
      $array = array();
      $data = $sql->fetch();
      $u = new cachorroqt();
      $u->setId($data['id']);
      $u->setNome($data['nome']);
      $u->setdescricao($data['descricao']);
      $u->setpreco($data['preco']);
      return $u;
    } else {
      return false;
    }
  }
  public function delqt($id)
  {
    $sql = $this->pdo->prepare("DELETE FROM cachorroquente	 WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
  }

  public  function editqt(cachorroqt $u)
  {
    $sql = $this->pdo->prepare("UPDATE cachorroquente	 SET nome = :nome, descricao = :descricao, preco = :preco WHERE
    id = :id");
    $sql->bindValue(':nome', $u->getNome());
    $sql->bindValue(':descricao', $u->getdescricao());
    $sql->bindValue(':preco', $u->getpreco());
    $sql->bindValue(':id', $u->getid());
    $sql->execute();
  }
}
