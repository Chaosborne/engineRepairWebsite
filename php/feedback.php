<?php
    $mails = 'kolbasnikov@list.ru, rustemshagitov@gmail.com'
    $url = $_POST['form--url']; // скрытое поле ботов
    

    if ($url === NULL) {
        if (isset($_POST['form--name'])) {
            $name = $_POST['form--name'];
        }
        if (isset($_POST['form--phone'])) {
            $phone = $_POST['form--phone'];
        }
        $message = $name . 'оставил заявку на обратный звонок<br>Телефон: ' . $phone;

        $subject = 'Заявка с сайта: ' . $name;
        if (isset($_POST['form--message'])) {
            $message = $_POST['form--message'] . '<br>Телефон: ' . $phone;
            $subject .= ' - запросил обрытный звонок';
        }
        
        mail($mails, $tema, $message)

    } else {
        echo 'Спасибо, вы определены в петушиный угол';
    }