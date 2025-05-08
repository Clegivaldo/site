<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $name = $_POST["name"];
  $email = $_POST["email"];
  $whatsapp = $_POST["whatsapp"];
  $curso = $_POST["curso"];
  $pergunta = $_POST["pergunta"];

  // Configurar o email de destino
  $recipient = "posgraduacao@facx.edu.br";

  // Configurar o assunto e o corpo do email
  $subject = "=?UTF-8?B?" . base64_encode("Matrícula para curso de " . $curso) . "?=";
  $body = "Nome: " . $name . "\nEmail: " . $email . "\nWhatsApp: " . $whatsapp . "\nPergunta:" . $pergunta;

  // Configurar os cabeçalhos do email
  $headers = "From: " . $email . "\r\n";
  $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";
  $headers .= "Content-Transfer-Encoding: quoted-printable\r\n";

  // Enviar o email
  if (mail($recipient, $subject, $body, $headers)) {
    echo "Email enviado com sucesso.";
  } else {
    echo "Ocorreu um erro ao enviar o email.";
  }
}
?>