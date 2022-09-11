<?php
if (isset($_POST['solicitacao']) && !empty($_POST['email']) && !empty($_POST['solicitacao'])) {
  $nome = addslashes($_POST['nome']);
  $email = addslashes($_POST['email']);
  $telphone = addslashes($_POST['telefone']);
  $txtmsg =  addslashes($_POST['solicitacao']);
  /// 
  $to = 'delíciaburguer47@gmail.com';
  $subject = 'Cliente';
  $body = 'Nome' . $nome . 'E-mail' . $email . 'Contato' . $telphone . 'Mensagem' .
    $txtmsg;
  $header = 'From:delíciaburguer47@gmail.com' . '\r\n' . 'Reply-to'
    . $email . '\r\n' . 'X-mailer:PHP/' . phpversion();
  /// 
  mail($to, $subject, $body, $header);
  echo 'enviado';
  //header('Location:' . $base);
} else {
  echo 'nao enviado';
}
