<?php
require 'config.php';
require 'dao/daoSanduiches.php';

//require 'dao/daopizza.php';
$pizzadao = new daosanduichesmtsql($pdo);

$id = filter_input(INPUT_GET, 'id');
if ($id) {
  $pizzadao->deleteS($id);
}
header('Location:' . $base . 'admin.php');
