<?php
//Передаём переменным данные форм
//Присваиваем каждой форме переменную
$name=$_POST['name'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$message=$_POST['message'];
//отправим данные из формы на e-mail админа
//Задаём переменные для письма админу о новом сообщении клиента
$address = 'Filka@mail.ru';
$sub = "Отзыв";
$mes = "Посетитель: $name \n Указал свой адрес: $mail \n телефон: $phone \n Содержание письма: $message";
//Отправляем письмо админу о новом сообщении
$verify = mail ($address,$sub,$mes,"From: $mail");
//проверка отправилось ли письмо
if ($verify == 'true')
{
echo 'Сообщение отправлено';
echo '<META HTTP-EQUIV=Refresh Content="1;URL=lichkab.php">';
}
else
{
echo 'Сообщение не отправлено';
echo '<META HTTP-EQUIV=Refresh Content="1;URL=lichkab.php">';
}
?>
