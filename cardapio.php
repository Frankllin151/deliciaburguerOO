<?php require 'config.php'; ?>
<?php
require 'dao/daopizza.php';
require 'dao/daoSanduiches.php';
require 'dao/daopateis.php';
require 'dao/daocahorroqt.php';
require 'dao/daobida.php';
require 'dao/daophoto.php';
?>


<?php $daopizza = new daopizzamtsql($pdo);
$daosd = new daosanduichesmtsql($pdo);
$daopt = new daopateischesmtsql($pdo);
$daocachorro = new daocachorromysql($pdo);
$bebid = new daobebidamysql($pdo);

///////
$cachorroAll = $daocachorro->showqt();
$bidaAll = $bebid->showqt();
$pateisShow = $daopt->showpt();
$pizzaAll = $daopizza->showALL();
$sandui = $daosd->showsd();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,user-scable=no">
  <link rel="stylesheet" href="<?= $base;  ?>/assets/css/style.css">
  <title>Document</title>
  <style>
  </style>

</head>


<body>

  <div class="menu_dl">
    <div class="menudiv">
      <a class="linkmenu" href="<?= $base ?>#photoGlp">Galeria</a>
      <a class="linkmenu" href="<?= $base ?>#galyta">Contato</a>
      <a class="linkmenu" href="<?= $base ?>/cardapio">Cardapio</a>
      <a class="linkmenu" target="_blank" href="https://api.whatsapp.com/send?
phone=5584987811396">Whatsapp</a>
      <a class="linkmenu" target="_blank" href="https://www.instagram.com/
deliciasburguer75/">Instragram</a>
    </div>
  </div>
  <header class="header_cardapio">
    <svg class="svgman" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ad4f4f" fill-opacity="1" d="M0,320L21.8,272C43.6,224,87,128,131,96C174.5,64,218,96,262,112C305.5,128,349,128,393,122.7C436.4,117,480,107,524,112C567.3,117,611,139,655,144C698.2,149,742,139,785,117.3C829.1,96,873,64,916,80C960,96,1004,160,1047,176C1090.9,192,1135,160,1178,144C1221.8,128,1265,128,1309,138.7C1352.7,149,1396,171,1418,181.3L1440,192L1440,0L1418.2,0C1396.4,0,1353,0,1309,0C1265.5,0,1222,0,1178,0C1134.5,0,1091,0,1047,0C1003.6,0,960,0,916,0C872.7,0,829,0,785,0C741.8,0,698,0,655,0C610.9,0,567,0,524,0C480,0,436,0,393,0C349.1,0,305,0,262,0C218.2,0,175,0,131,0C87.3,0,44,0,22,0L0,0Z"></path>
    </svg>
    <?php require 'header.php'; ?>
    <h1>Cardapio</h1>

  </header>
  <section id="sectionlanhces">
    <div class="titledl">
      <p>Cardápio</p>
      <h1>Delícia Burguer</h1>
    </div>
    <div class="produto-area">
      <div>
        <h1 class="titleitems">Pizza</h1>
      </div>
      <div class="produtoitem">
        <?php foreach ($pizzaAll as $item) : ?>
          <div class="pizzaItem">

            <div class="namepizza"><?php echo $item['nome']; ?></div>
            <div class="photo">
              <img src="<?= $base; ?>/assets/upload/<?php echo $item['img']; ?>" alt="">
            </div>
            <div class="descriçaopizza"><?php echo $item['descricao']; ?></div>
            <div class="preço">R$<?php echo  str_replace(',', '.', number_format($item['preco'], 2)); ?></div>

          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </section>
  <section id="sectionlanhces">
    <div class="produto-area">
      <h1 class="titleitems">Sanduiches</h1>

      <div class="produtoitem">
        <?php foreach ($sandui as $item) : ?>
          <div class="sanduichesItem">
            <div class="namesand"><?php echo $item['nome']; ?></div>
            <div class="photo">
              <img src="<?= $base; ?>/assets/upload/<?php echo $item['img']; ?>" alt="">
            </div>
            <div class="descriçaosnd"><?php echo $item['descricao']; ?></div>
            <div class="preçosnd">R$ <?php echo  str_replace(',', '.', number_format($item['preco'], 2)); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="sectionlanhces">
    <div class="produto-area">
      <h1 class="titleitems">Pastéis</h1>
      <div class="produtoitem">

        <?php foreach ($pateisShow as $item) : ?>

          <div class="sanduichesItem">
            <div class="namesand"><?php echo $item['nome']; ?></div>

            <div class="photo">
              <img src="<?= $base; ?>/assets/upload/<?php echo $item['img']; ?>" alt="">
            </div>
            <div class="descriçaosnd"><?php echo $item['descricao']; ?></div>
            <div class="preçosnd">R$<?php echo  str_replace(',', '.', number_format($item['preco'], 2)); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section id="sectionlanhces">
    <div class="produto-area">
      <h1 class="titleitems">Cachorro Quente</h1>
      <div class="produtoitem">

        <?php foreach ($cachorroAll as $item) : ?>
          <div class="sanduichesItem">
            <div class="namesand"><?php echo $item['nome']; ?></div>
            <div class="photo">
              <img src="<?= $base; ?>/assets/upload/<?php echo $item['img']; ?>" alt="">
            </div>
            <div class="descriçaosnd"><?php echo $item['descricao']; ?></div>
            <div class="preçosnd">R$<?php echo  str_replace(',', '.', number_format($item['preco'], 2)); ?></div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </section>

  <section id="sectionlanhces">
    <div class="produto-area">
      <h1 class="titleitems">Bebidas</h1>
      <div class="produtoitem">

        <?php foreach ($bidaAll  as $item) : ?>
          <div class="sanduichesItem">
            <div class="namesand"><?php echo $item['nome']; ?></div>

            <div class="photo">
              <img src="<?= $base; ?>/assets/upload/<?php echo $item['img']; ?>" alt="">
            </div>
            <div class="preçosnd">
              R$ <?php echo  str_replace(',', '.', number_format($item['preco'], 2)); ?>
            </div>
          </div>
        <?php endforeach; ?>
      </div>
    </div>

  </section>
  <?php $this->loadfooter($viewName, $Dataview) ?>
</body>

</html>