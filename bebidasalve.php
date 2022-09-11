<?php
require 'config.php';
require 'dao/daobida.php';
$files = $_FILES['fileUpload'];
if (isset($files['tmp_name']) && empty($files['tmp_name']) === false) {
  $name = 'defdbsre' . rand(0, 99) . time() . '.png';
  move_uploaded_file($files['tmp_name'], 'assets/upload/' . $name);
}
$caminho = $name;
if (!empty($_POST['nome'])) {
  $nome =  $_POST['nome'];

  $preco = $_POST['preco'];
  $cardapiomodal = new daobebidamysql($pdo);
  $cardapiomodal->qtadd($nome, $preco, $caminho);
}

header('Location:' . $base . 'admin.php');
