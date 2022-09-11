<?php
require 'config.php';
require 'dao/daobida.php';

$pizzadao = new daobebidamysql($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'nome');

$preco = filter_input(INPUT_POST, 'preco');



if ($id && $name  && $preco) {
  $pizzamodels = new bebida();
  $pizzamodels->setId($id);
  $pizzamodels->setNome($name);
  $pizzamodels->setdescricao($descricao);
  $pizzamodels->setpreco($preco);

  $pizzadao->editqt($pizzamodels);

  header("Location:" . $base . 'admin.php');
  exit;
} else {


  header("Location:" . $base . 'editapizza.php?=' . $id);
  exit;
}
