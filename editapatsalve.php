<?php
require 'config.php';
require 'dao/daopateis.php';

$pizzadao = new daopateischesmtsql($pdo);

$id = filter_input(INPUT_POST, 'id');
$name = filter_input(INPUT_POST, 'nome');
$descricao = filter_input(INPUT_POST, 'descricao');
$preco = filter_input(INPUT_POST, 'preco');
echo $id . $name . $descricao . $preco . '<br/>';


if ($id && $name && $descricao && $preco) {
  $pizzamodels = new pateis();
  $pizzamodels->setId($id);
  $pizzamodels->setNome($name);
  $pizzamodels->setdescricao($descricao);
  $pizzamodels->setpreco($preco);

  $pizzadao->editpt($pizzamodels);

  header("Location:" . $base . 'admin.php');
  exit;
} else {


  header("Location:" . $base . 'editapizza.php?=' . $id);
  exit;
}
