<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body id='body_addpizza'>
  <h1>Adicionar Bebida</h1>


  <form method="POST" action="bebidasalve.php" enctype="multipart/form-data">


    <label for="">
      Nome do item: <br>
      <input type="text" placeholder="" name="nome">
    </label>

    <br>
    <label for="">
      Preço: <br>
      <input name="preco" type="number" step="any">
    </label>
    <br>

    <label for="">
      Escolha uma Imagem: <br>
      <input type="file" name="fileUpload" id="fileToUpload">
    </label>

    <input type="submit" value="Enviar" name="submit">
  </form>
</body>

</html>