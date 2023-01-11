<?php
    include '../config.php';
    
    $mails = 'kolbasnikov@list.ru, rustemshagitov@gmail.com'; // ayrat202@mail.ru
    if (isset($_POST['form--url'])) {
        $url = $_POST['form--url']; // скрытое поле для ботов
    } else $url = NULL;
    $headers = 'MIME-Version: 1.0' . "\r\n"; // заголовок соответствует формату плюс символ перевода строки
    $headers .= 'Content-type: text/html; charset=utf-8' . "\r\n"; // указывает на тип посылаемого контента
    
    if ($url == NULL) {
        if (isset($_POST['input--name'])) {
            $name = $_POST['input--name'];
            if (isset($_POST['input--phone'])) {
                $phone = $_POST['input--phone'];
                $message = $name . ' оставил заявку на обратный звонок<br>Телефон: <a href="tel:'. $phone . '">' . $phone . '</a>';
            }
    
            $subject = 'Заявка с сайта Мотор-Доктор: ' . $name; // Тема письма
            $textarea = null;

            if (isset($_POST['textarea'])) {
                $message = "Сообщение от " . $name . ': '. $_POST['textarea'] . '<br>Телефон: ' . $phone;
                $subject .= ' - оставил сообщение';
                $textarea = $_POST['textarea'];
            } else $subject .= ' - запросил обратный звонок';

            if (isset($_POST['id'])) {
                $id_form = (int)$_POST['id'];
                switch ($id_form) {                   
                    case 1: $form_name = 'Модальное окно'; break;
                    case 2: $form_name = 'Обратный звонок'; break;
                    case 3: $form_name = 'Форма перед футером'; break;
                }

                echo 'Форма: '. $form_name . '<br>';
               
            }
            
            mail($mails, $subject, $message, $headers);
            echo 'Спасибо, ' .$name. '. Ваша заявка отправлена. <br>';


            $phone_repl = str_replace('+7', '', $phone);
            echo 'Номер телефона +7' . $phone_repl;
            $now_time = time();

            if ($textarea != NULL) {
                $request = "INSERT INTO `orders`(`name`, `phone`, `message`, `id_form`) VALUES ('".$name."',".$phone_repl.",'".$textarea."', ".$id_form.")";
            } else {
                $request = "INSERT INTO `orders`(`name`, `phone`, `message`, `id_form`) VALUES ('".$name."',".$phone_repl.",NULL, ".$id_form.")";
            }
            // echo '<br>' . $request;
            $result_mysql = $connection->exec($request);

            // $url_full = ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . '/success.html';
            // header("HTTP/1.1 301 Moved Permanently"); 
            // header("Location: " . $url_full);
        
            
            // $file = file_get_contents('../success.html', false);
            // echo $file;
            // include '../success.html';
        }

    } else {
        echo 'Спасибо, вы определены в петушиный угол';
    }

    