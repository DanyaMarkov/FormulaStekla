<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        # Подставляем email админа
        $mail_to = get_option("admin_mail");
        
        # Собираем данные из формы
        $subject = "Заявка из SPaceX";
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["client_name"])));
        $phone = trim($_POST["client_phone"]);
        $email = trim($_POST["client_email"]);
        $message = trim($_POST["client_message"]);
        
        // if ( empty($name) OR emtpy($email) OR empty($subject) OR empty($message)) {
        //     # Set a 400 (bad request) response code and exit.
        //     http_response_code(400);
        //     echo "Пожалуйста заполните все обязательные поля!";
        //     exit;
        // }
        
        # Содержимое письма
        $content = "Name: $name\n";
        $content = "Phone: $phone\n";
        $content .= "Email: $email\n\n";
        $content .= "Message:\n$message\n";

        # Заголовок письма
        $headers = "From: $name <$email>";

        # Попытка отправить письмо с помощью mail()
        $success = mail($mail_to, $subject, $content, $headers);
        if ($success) {
            # Set a 200 (okay) response code.
            http_response_code(200);
            echo "Thank You! Your message has been sent.";
        } else {
            # Set a 500 (internal server error) response code.
            http_response_code(500);
            echo "Oops! Something went wrong, we couldn't send your message.";
        }

    } else {
        # Not a POST request, set a 403 (forbidden) response code.
        http_response_code(403);
        echo "There was a problem with your submission, please try again.";
    }

?>