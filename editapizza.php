<?php
require 'config.php';
require 'dao/daopizza.php';
$pizzaDao = new daopizzamtsql($pdo);
$showall = $pizzaDao->showALL();


$id = filter_input(INPUT_GET, 'id');

if (!empty($id)) {
  $pizzaID = $pizzaDao->findIDp($id);
  // print_r($pizzaID['nome']);
  $deu = get_object_vars($pizzaID);
} else {
  //header('Location:' . $base . 'admin.php');
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body id='body_addpizza'>
  <h1>Editar Pizza</h1>


  <form method="POST" action="editaPsalve.php">

    <input type="hidden" name="id" value="<?php echo $deu['id'] ?>">
    <label for="">
      Nome do item: <br>
      <input type=" text" placeholder="" name="nome" value="<?php echo $deu['nome'] ?>">
    </label>
    <br>
    <label for="">
      Descriçao <br>
      <input type="text" name="descricao" value="<?php echo $deu['descricao'] ?>">
    </label>
    <br>
    <label for="">
      Preço: <br>
      <input name="preco" type="number" step="any" value="<?php echo $deu['preco'] ?>">
    </label>
    <br>






    <input type="submit" value="Salvar" name="submit">
  </form>
</body>

</html>