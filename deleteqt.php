<?php
require 'config.php';
require 'dao/daocahorroqt.php';

//require 'dao/daopizza.php';
$pizzadao = new daocachorromysql($pdo);

$id = filter_input(INPUT_GET, 'id');
if ($id) {
  $pizzadao->delqt($id);
}
header('Location:' . $base . 'admin.php');
