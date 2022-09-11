<?php require 'config.php'; ?>
<?php require 'header.php'; ?>
<?php
require 'dao/daopizza.php';
require 'dao/daoSanduiches.php';
require 'dao/daopateis.php';
require 'dao/daocahorroqt.php';
require 'dao/daobida.php';
require 'dao/daophoto.php';
?>

<!DOCTYPE html>
<html lang="en">
<?php $daopizza = new daopizzamtsql($pdo);
$daosd = new daosanduichesmtsql($pdo);
$daopt = new daopateischesmtsql($pdo);
$daocachorro = new daocachorromysql($pdo);
$bebid = new daobebidamysql($pdo);
$photo = new daophotomysql($pdo);
///////
$photoimg = $photo->seeAll();
$cachorroAll = $daocachorro->showqt();
$bidaAll = $bebid->showqt();
$pateisShow = $daopt->showpt();
$pizzaAll = $daopizza->showALL();
$sandui = $daosd->showsd();

?>


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,minimum-scale=1, initial-scale=1">
  <title>Admin Delícia Burguer</title>
</head>

<body id="admin">
  <div class="menu_dl">
    <div class="menudiv">
      <a class="linkmenu" href="<?= $base;  ?>/photoGlp">Galeria</a>
      <a class="linkmenu" href="<?= $base;  ?>/galyta">Contato</a>
      <a class="linkmenu" href="<?= $base;  ?>/cardapio.php">Cardapio</a>
    </div>
  </div>
  <div class="Area_crud">
    <p>Pizza:</p>
    <a href="<?= $base;  ?>addpizza.php">Adicionar</a>
    <table border="1" width="100%">
      <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>DESCRIÇÃO</th>
        <th>PREÇO</th>
        <th>AÇÕES</th>
      </tr>
      <tr>
        <?php foreach ($pizzaAll as $item) : ?>
          <td><?php echo $item['id']; ?></td>
          <td><?php echo $item['nome']; ?></td>
          <td><?php echo $item['descricao']; ?></td>
          <td> <?php echo  str_replace(',', '.', number_format($item['preco'], 2)); ?></td>
          <td>
            <a href="<?= $base;  ?>/editapizza.php?id=<?= $item['id']; ?>">Editar</a>
            <a href="<?= $base;  ?>excluirpizza.php?id=<?= $item['id']; ?>" onclick=" return confirm('Tem certeza  quer deseja excluir  esse item? ')">Excluir</a>
          </td>
      </tr>
    <?php endforeach; ?>
    </table>
  </div>

  <div class="Area_crud">
    <p>Sanduiches:</p>
    <a href="<?= $base;  ?>/addsand.php">Adicionar</a>
    <table border="1" width="100%">
      <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>DESCRIÇÃO</th>
        <th>PREÇO</th>
        <th>AÇÕES</th>
      </tr>
      <tr>
        <?php foreach ($sandui as $item) : ?>
          <td><?php echo $item['id']; ?></td>
          <td><?php echo $item['nome']; ?></td>
          <td><?php echo $item['descricao']; ?></td>
          <td> <?php echo  str_replace(',', '.', number_format($item['preco'], 2)); ?></td>
          <td>
            <a href="<?= $base;  ?>/editasand.php?id=<?= $item['id']; ?>">Editar</a>
            <a href="<?= $base;  ?>/delsand.php?id=<?= $item['id']; ?>" onclick=" return confirm('Tem certeza quer deseja excluir  esse item? ')">Excluir</a>
          </td>
      </tr>
    <?php endforeach; ?>
    </table>
  </div>

  <div class="Area_crud">
    <p>Pastéis:</p>
    <a href="<?= $base;  ?>/addpt.php">Adicionar</a>
    <table border="1" width="100%">
      <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>DESCRIÇÃO</th>
        <th>PREÇO</th>
        <th>AÇÕES</th>
      </tr>
      <tr>
        <?php foreach ($pateisShow as $item) : ?>
          <td><?php echo $item['id']; ?></td>
          <td><?php echo $item['nome']; ?></td>
          <td><?php echo $item['descricao']; ?></td>
          <td> <?php echo  str_replace(',', '.', number_format($item['preco'], 2)); ?></td>
          <td>
            <a href="<?= $base;  ?>/editapt.php?id=<?php echo $item['id']; ?>">Editar</a>
            <a href="<?= $base;  ?>/delpateis.php?id=<?php echo $item['id']; ?>" onclick=" return confirm('Tem certeza quer deseja excluir  esse item? ')">Excluir</a>
          </td>
      </tr>
    <?php endforeach; ?>
    </table>
  </div>

  <div class="Area_crud">
    <p>Cachorro Quente:</p>
    <a href="<?= $base;  ?>/addqtc.php">Adicionar</a>
    <table border="1" width="100%">
      <tr>
        <th>ID</th>
        <th>NOME</th>
        <th>DESCRIÇÃO</th>
        <th>PREÇO</th>
        <th>AÇÕES</th>
      </tr>
      <tr>
        <?php foreach ($cachorroAll as $item) : ?>
          <td><?php echo $item['id']; ?></td>
          <td><?php echo $item['nome']; ?></td>
          <td><?php echo $item['descricao']; ?></td>
          <td> <?php echo  str_replace(',', '.', number_format($item['preco'], 2)); ?></td>
          <td>
            <a href="<?= $base;  ?>/editcaqt.php?id=<?php echo $item['id']; ?>">Editar</a>
            <a href="<?= $base;  ?>/deleteqt.php?id=<?php echo $item['id']; ?>" onclick=" return confirm('Tem certeza quer deseja excluir  esse item? ')">Excluir</a>
          </td>
      </tr>
    <?php endforeach; ?>
    </table>
  </div>
  <div class="Area_crud">
    <p>Bebidas:</p>
    <a href="<?= $base;  ?>/addbebida.php">Adicionar</a>
    <table border="1" width="100%">
      <tr>
        <th>ID</th>
        <th>NOME</th>

        <th>PREÇO</th>
        <th>AÇÕES</th>
      </tr>
      <?php foreach ($bidaAll as $item) : ?>
        <td><?php echo $item['id']; ?></td>
        <td><?php echo $item['nome']; ?></td>
        <td> <?php echo  str_replace(',', '.', number_format($item['preco'], 2)); ?></td>
        <td>
          <a href="<?= $base;  ?>/editbebid.php?id=<?php echo $item['id']; ?>">Editar</a>
          <a href="<?= $base;  ?>/deletebdb.php?id=<?php echo $item['id']; ?>" onclick=" return confirm('Tem certeza quer deseja excluir esse item? ')">Excluir</a>
        </td>
        </tr>
      <?php endforeach; ?>
    </table>

  </div>
  <div class="Area_crud">
    <p>Image Galeria</p>
    <a href="<?= $base;  ?>/addphoto.php">Adicionar</a>
    <table border="1" width="100%">
      <tr>
        <th>ID</th>
        <th> IMAGEMS</th>

      </tr>
      <?php foreach ($photoimg as $item) : ?>
        <td><?php echo $item['id']; ?></td>
        <td><?php echo $item['photo']; ?></td>

        <td>
          <a href="<?= $base;  ?>/deletephoto.php?id=<?php echo $item['id']; ?>" onclick=" return confirm('Tem certeza quer deseja excluir esse item? ')
">Excluir</a>
        </td>
        </tr>
      <?php endforeach; ?>
    </table>
  </div>
</body>

</html>