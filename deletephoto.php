<?php
require 'config.php';
require 'dao/daophoto.php';

//require 'dao/daopizza.php';
$pizzadao = new daophotomysql($pdo);

$id = filter_input(INPUT_GET, 'id');
if ($id) {
  $pizzadao->delphoto($id);
}
header('Location:' . $base . 'admin.php');
