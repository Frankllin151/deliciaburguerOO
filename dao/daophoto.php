<?php
require 'models/photo.php';
class daophotomysql implements photoDao
{
  private $pdo;
  public function __construct(PDO $driver)
  {
    $this->pdo = $driver;
  }
  public function addphoto($caminho)
  {
    $sql = "INSERT INTO photos (photo) VALUES  (:photo)";
    $sql = $this->pdo->prepare($sql);
    $sql->bindValue(':photo', $caminho);
    $sql->execute();
  }
  public function delphoto($id)
  {
    $sql = $this->pdo->prepare("DELETE FROM photos	 WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();
  }
  public function seeAll()
  {
    $sql = 'SELECT * FROM photos ';
    $sql = $this->pdo->query($sql);
    if ($sql->rowCount() > 0) {
      $show = $sql->fetchAll();
    }
    return $show;
  }
}
