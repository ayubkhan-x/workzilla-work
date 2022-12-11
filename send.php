<?php
$name = $_POST['name'];
$phone = $_POST['phone'];
$ekont = $_POST['ekont'];

$name = htmlspecialchars($name);
$phone = htmlspecialchars($phone);
$ekont = htmlspecialchars($ekont);

$name = urldecode($name);
$phone = urldecode($phone);
$ekont = urldecode($ekont);
 
$name = trim($name);
$phone = trim($phone);
$ekont = trim($ekont);




if (
    mail(
        "ayubkhan.khakimov@mail.ru",
        "Новое письмо с сайта", 
        "Имя и Фамилия": .$name. "\n"
        "Телефон номер: " . $phone . "\n"
        "Отделение Еконт: " . $ekont . "\n"
    )
) {
    // header('Location: https://kadyrov.site/final.html');
} else {
    echo ('Error');
}
?>