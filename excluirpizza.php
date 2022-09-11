<?php
require 'config.php';
require 'dao/daopizza.php';

//require 'dao/daopizza.php';
$pizzadao = new daopizzamtsql($pdo);

$id = filter_input(INPUT_GET, 'id');
if ($id) {
  $pizzadao->delid($id);
}
header('Location:' . $base . 'admin.php');
