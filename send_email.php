<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Captura os dados enviados pelo formulário
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $question = htmlspecialchars($_POST['question']);

    // Configuração do email
    $to = "carlos.filipe.ruivo@espinhalnovo.org"; // Seu email
    $subject = "Nova Resposta - Formulário Jujutsu Kaisen";
    $body = "Você recebeu uma nova resposta no formulário Jujutsu Kaisen:\n\n"
          . "Nome: $name\n"
          . "Email: $email\n"
          . "Personagem Favorito: $question\n\n"
          . "Enviado automaticamente pelo sistema.";
    $headers = "From: $email";

    // Envia o email
    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Houve um problema ao enviar sua mensagem. Tente novamente mais tarde.";
    }
} else {
    echo "Acesso inválido.";
}
?>
