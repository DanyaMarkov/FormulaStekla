<?php

// правильный способ подключить стили и скрипты
add_action('wp_enqueue_scripts', 'formulastekla_scripts');
function formulastekla_scripts()
{
  wp_enqueue_style('main',  get_template_directory_uri() . '/css/main.css');
  wp_enqueue_style('calculator',  get_template_directory_uri() . '/css/calculator.css');
  wp_enqueue_style('bootstrap',  '//cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css');
  
  wp_enqueue_script('script_calculator', get_template_directory_uri() . '/js/calc.js', array(), '1.0.0', true);
  wp_enqueue_script('script', get_template_directory_uri() . '/js/scripts.min.js', array(), '1.0.0', true);
}

add_action( 'wp_ajax_my_action', 'my_action_callback' );
add_action( 'wp_ajax_nopriv_my_action', 'my_action_callback' );

function my_action_callback() {

   if ($_SERVER["REQUEST_METHOD"] == "POST") {
        # Email админа
        $mail_to = "adel.garipovazn16@yandex.ru";
        $email = "";
        $message = "";
        # Собираем данные из формы
        $subject = "Стекольная мастерская Формула Стекла";
        
        $name = str_replace(array("\r","\n"),array(" "," ") , strip_tags(trim($_POST["client_name"])));
        $phone = trim($_POST["client_phone"]);
        $email = trim($_POST["client_email"]);
        $message = trim($_POST["client_message"]);
              
        # Содержимое письма
        $content = "Имя: $name\n";
        $content = "Телефон: $phone\n";
        $content .= "Email: $email\n\n";
        $content .= "Сообщение:\n$message\n";

        # Заголовок письма
        $headers = "From: $name <$email>";

        # Попытка отправить письмо с помощью mail()
        $success = wp_mail($mail_to, $subject, $content, $headers);
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

	// выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
	wp_die();
}