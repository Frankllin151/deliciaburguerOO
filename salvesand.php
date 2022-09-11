<?php
require 'config.php';
require 'dao/daoSanduiches.php';
$files = $_FILES['fileUpload'];
if (isset($files['tmp_name']) && empty($files['tmp_name']) === false) {
  $name = 'devree' . rand(0, 99) . time() . '.png';
  move_uploaded_file($files['tmp_name'], 'assets/upload/' . $name);
}
$caminho = $name;
if (!empty($_POST['nome'])) {
  $nome =  $_POST['nome'];
  $descricao = $_POST['descricao'];
  $preco = $_POST['preco'];
  $cardapiomodal = new daosanduichesmtsql($pdo);
  $cardapiomodal->sandui($nome, $descricao, $preco, $caminho);
}
header('Location:' . $base . 'admin.php');
