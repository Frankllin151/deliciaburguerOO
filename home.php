<!DOCTYPE html>
<html lang="en">
<?php require 'dao/daophoto.php';
$photo = new daophotomysql($pdo);
$photoimg = $photo->seeAll();
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width,minimum-scale=1, initial-scale=1">
  <title>Document</title>
  <link rel="stylesheet" href="<?= $base;  ?>/assets/css/style.css">

</head>

<body>
  <div class="menu_dl">
    <div class="menudiv">
      <a class="linkmenu" href="<?= $base; ?>#photoGlp">Galeria</a>
      <a class="linkmenu" href="<?= $base; ?>?>#galyta">Contato</a>
      <a class="linkmenu" href="<?= $base; ?>/cardapio.php">Cardapio</a>
      <a class="linkmenu" target="_blank" href="https://api.whatsapp.com/send?
phone=5584987811396">Whatsapp</a>
      <a class="linkmenu" target="_blank" href="https://www.instagram.com/
deliciasburguer75/">Instragram</a>
    </div>

  </div>


  </div>
  <div class="geral ">
    <section id="sectioninformation">
      <div class="ruleinfomation">
        <div class="areainformationHome">
          <div class="titlehome">
            <h1>Delícia Burguer</h1>
          </div>
          <div class="rualote">
            <p>Zona Rural <br>
              R. Duque de Caxias, Barcelona - RN
            </p>
            <p> </p>
          </div>
          <div class="sola" style="display:none ;" onclick="sendEmail()">
            <div class="solicitaçaoCotaçao">
              <p> SOLICITAR COTAÇÃO</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="positionemailsend">
      <div class="dfcenter">
        <div class="SendEmail">
          <div class="cabelhasendemail">
            <p id="solici">Solicitar Cotação</p>
            <div class="closed" onclick="closedmodal()">
              <img src="<?= $base; ?>/assets/images/closedmodal.png" alt="">

            </div>
          </div>
          <hr id="hrid">
          <form method="POST" action="<?= $base; ?>/actionsolicitaçao.php">
            <label for="">
              <p> Nome:</p>

              <br>
              <input class="input_infomation" name="nome" type="text">
            </label> <br>
            <label for="">
              <p> Telefone:</p>

              <br>
              <input class="input_infomation" name="telefone" type="tel">
            </label>
            <br>
            <label for="">
              <p> Email:</p>

              <br>
              <input class="input_infomation" name="email" type="email">
            </label>
            <p id="help_p">*E obrigatório inserir um e-mail valido</p>

            <br>
            <label for="">
              <p id="help_p"> Como podemos lhe ajudar?</p>

              <br>
              <textarea name="solicitacao" id="txtarea" placeholder="Gostaria de saber 
sobre a disponibilidade e os preços. Preciso de ajudar com seguinte" name="txtarea" rows="1000"></textarea>
            </label>
            <br>
            <br>
            <input id='enviarsend' type="submit" value="Enviar" name="enviarsend">

          </form>
          <p class="evite">
            Evite Incluir infomarções confideciais que você não quer compatilhar com está
            empresa.
          </p>
        </div>
      </div>
    </div>
    <div>
      <section class="galephoto">
        <div class="titlegalere">
          <h2 id="photoGlp">Galeria </h2>
        </div>
        <div class="photopattern">
          <?php foreach ($photoimg  as $item) : ?>

            <div class="areaphoto0">
              <img src="<?= $base; ?>/assets/upload/<?php echo $item['photo'] ?>" alt="">
            </div>
          <?php endforeach; ?>
        </div>
      </section>




      <div id="galeria-area" class="galeria-area">
        <h2>Contato</h2>
        <div id="galeria">
          <a></a>
          <div class="galeriaphoto">
            <img href="https://www.google.com/maps/place/Del%C3%ADcias+Burguer/@-5.9510406,-35.9265986,15z/data=!4m5!3m4!1s0x0:0xf9b12e419f82acdb!8m2!3d-5.9510406!4d-35.9265986" src="<?= $base ?>/assets/images/adresss.png" alt="">
          </div>
        </div>
      </div>




      <div class="divareacontato">

        <div id="galyta" class="contatox">
          <div class="contatoareamain">
            <div class=" title-contato">
              <h3>TELEFONE</h3>
            </div>
            <div class="adressAndtell">
              <a id="atag" href="tel:+55-84987811396" data-tracking-element-type="3" jslog="56037; track:impression,click" itemprop="telephone" dir="ltr">LIGAR
                AGORA</a>
              <p></p>
            </div>
            <div class="adress_tel">
              <p>+55-84987811396</p>
            </div>
          </div>
        </div>
        <div class="contatox">
          <div class="contatoareamain">
            <div class="title-contato">
              <h3>ENDEREÇO</h3>
            </div>
            <div class="adressAndtell">
              <a id="atag" href="https://www.google.com/maps/place/Del%C3%ADcias+Burguer/
@-5.9510406,-35.9265986,15z/data=!4m5!3m4!1s0x0:0xf9b12e419f82acdb!8m2!3d-5.
9510406!4d-35.9265986" target="_blank">VER ROTAS</a>
            </div>
            <div class="adress">
              <p>
                R. Duque de Caxias <br>Barcelona <br>
                RN, 59410-000

              </p>
            </div>
          </div>
        </div>

      </div>

</body>
<script src="<?= $base;  ?>/assets/js/script.js">
</script>

</html>