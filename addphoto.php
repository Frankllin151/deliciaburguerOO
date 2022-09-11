<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>

<body id='body_addpizza'>
  <h1>Adicionar imagem</h1>


  <form method="POST" action="photosalve.php" enctype="multipart/form-data">

    Escolha uma Imagem: <br>
    <input type="file" name="fileUpload" id="fileToUpload">
    </label>

    <input type="submit" value="Enviar" name="submit">
  </form>
</body>

</html>