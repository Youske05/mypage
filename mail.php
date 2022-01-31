<?php
$mag_box = ""; // в этой переменной будем хранить сообщения формы
    if ($_POST['btn_submit']) {
        $errors = array(); //контейнер для ошибок
        //проверка корректность полей
        if($_POST['user_name'] =="") $errors[] ="Поле 'Ваше имя' не заполнено!";
        if($_POST['user_email'] =="") $errors[] ="Поле 'Ваш e-mail' не заполнено!";
        if($_POST['text_comment'] =="") $errors[] ="Поле 'Текст сообщения' не заполнено!";



        //если форма без ошибок
        if(empty($errors)) {

            $message = "Имя пользователя: " . $_POST['user_name'] . "<br/>";
            $message = "E-mail пользователя: " . $_POST['user_email'] . "<br/>";
            $message = "Текст письма: " . $_POST['text_comment'] . "<br/>";
            send_mail($message); //отправление письма
            // вывод сообщения об успехе
            $mag_box = "<span style ='color: green;'> Сообщение успешно отправлено! </span>";

        } else {
            // если были ошибки, вывод:
            $mag_box = "";
            foreach ($errors as $one_error) {
                $mag_box = "<span style ='color: red';>$one_error </span><br/>";
            }
        }
    }
    //функция отправки письма
    function send_mail($message) {
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
    }
    ?>