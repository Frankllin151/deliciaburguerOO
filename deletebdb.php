<?php
require 'config.php';
require 'dao/daobida.php';

//require 'dao/daopizza.php';
$pizzadao = new daobebidamysql($pdo);

$id = filter_input(INPUT_GET, 'id');
if ($id) {
  $pizzadao->delqt($id);
}
header('Location:' . $base . 'admin.php');
