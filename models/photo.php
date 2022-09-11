<?php
class photo
{
  public $id;
  public $photo;
  public function  setId($i)
  {
    return $this->id = trim($i);
  }
}
interface photoDao
{
  public function addphoto($caminho);
  public function delphoto($id);
  public function seeAll();
}
