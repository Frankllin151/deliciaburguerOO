<?php
require 'config.php';
require 'dao/daophoto.php';
$files = $_FILES['fileUpload'];
if (isset($files['tmp_name']) && empty($files['tmp_name']) === false) {
  $name = 'rfgtrb' . rand(0, 99) . time() . '.png';
  move_uploaded_file($files['tmp_name'], 'assets/upload/' . $name);
}
$caminho = $name;
$cardapiomodal = new daophotomysql($pdo);
$cardapiomodal->addphoto($caminho);

header('Location:' . $base . 'admin.php');
