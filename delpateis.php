<?php
require 'config.php';
require 'dao/daopateis.php';

//require 'dao/daopizza.php';
$pizzadao = new daopateischesmtsql($pdo);

$id = filter_input(INPUT_GET, 'id');
if ($id) {
  $pizzadao->delpt($id);
}
header('Location:' . $base . 'admin.php');
