<?php
    include __DIR__ . '/config.php';
    
    $mails = 'kolbasnikov@list.ru, rustemshagitov@gmail.com';
    $url = $_POST['form--url']; // скрытое поле ботов
    $headers = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
    
    if ($url == NULL) {
        if (isset($_POST['input--name'])) {
            $name = $_POST['input--name'];
            if (isset($_POST['input--phone'])) {
                $phone = $_POST['input--phone'];
                $message = $name . ' оставил заявку на обратный звонок<br>Телефон: <a href="tel:'. $phone . '">' . $phone . '</a>';
            }
    
            $subject = 'Заявка с сайта: ' . $name; // Тема письма
    
            if (isset($_POST['textarea'])) {
                $message = $_POST['textarea'] . '<br>Телефон: ' . $phone;
                $subject .= ' - запросил обрытный звонок';
            }
            
            mail($mails, $subject, $message, $headers);
            echo 'Спасибо, ' .$name. '. Ваша заявка отправлена. <br>';


            $phone_repl = str_replace('+7', '', $phone);
            echo 'Номер телефона +7' . $phone_repl;
        }

    } else {
        echo 'Спасибо, вы определены в петушиный угол';
    }