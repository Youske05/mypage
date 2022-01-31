<?php
    $email = $_POST['user_email'];
    $message = $_POST['text_comment'];
    $name = $_POST['user_name'];

    $error = '';
    if (trim($email ==''))
        $error = 'Введите ваш email';
    else if (trim($message) =='')
        $error = 'Введите само сообщение';
    else if(strlen($message) < 10)
        $error ='Сообщение должно быть более 10 символов';
    else if (trim($name) =='')
        $error = 'Введите ваше имя';

    if ($error !='') {
        echo $error;
        exit;
    }

    //почта на которую придет письмо

    $mail_to ="iosifpapuashvili@yandex.ru";

    //тема письма
    $subject = "Письмо с обратной связи";

    //заголовок письма
    $headers = "MIME-Version: 1.0\r\n";
    $headers = "Content-type: text/html; charset=utf-8\r\n";
    $headers = "From: Тестовое письмо <sir.papuashvili@yandex.ru>\r\n";

    //  mail($mail_to,$subject,$message,$headers);
    header('Location:/styles.css/index.html');