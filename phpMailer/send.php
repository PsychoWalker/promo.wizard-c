<?php
if(isset($_POST['name'])){
    $fio = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $comment = $_POST['comment'];
    $product = $_POST['product'];
    $price = $_POST['price'];

    $fio = htmlspecialchars($fio);
    $email = htmlspecialchars($email);
    $phone = htmlspecialchars($phone);
    $comment = htmlspecialchars($comment);
    $price = htmlspecialchars($price);

    $fio = urldecode($fio);
    $email = urldecode($email);
    $phone = urldecode($phone);
    $comment = urldecode($comment);
    $product = urldecode($product);
    $price = urldecode($price);

    $fio = trim($fio);
    $email = trim($email);

    $message = "<b>ФИО:</b> ".$fio."<br><b>Телефон:</b> +".$phone."<br><b>E-mail:</b> ".$email."<br><b>Сообщение:</b> ".$comment;

    $header = array(
        "From: web@wizard-c.ru",
        "MIME-Version: 1.0",
        "Content-Type: text/html;charset=utf-8"
    );

    mail("hern9luta9@gmail.com", "Сообщение с сайта", $message, implode("\r\n", $header));

    header("Location: http://tester.wizard-c.ru/");}

else{  echo "Hacking";}
?>

