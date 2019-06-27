<?php
//Передаём переменным данные форм
//Присваиваем каждой форме переменную
$name=$_POST['name'];
$phone=$_POST['phone'];
$mail=$_POST['mail'];
$message=$_POST['message'];
//отправим данные из формы на e-mail админа
//Задаём переменные для письма админу о новом сообщении клиента
$address = 'filippgolovny@mail.com';
$sub = "Отзыв";
$mes = "Посетитель: $name \nУказал свой адрес: $mail \n телефон:$phone \n Содержание письма: $message";
//Отправляем письмо админу о новом сообщении
$verify = mail ($address,$sub,$mes,"From: $mail");
//проверка отправилось ли письмо
if ($verify == 'true')
{
echo "<p>Сообщение отправлено<br /><br />
<a href=regist.html >Вернуться назад </a> </p>";
echo '<META HTTP-EQUIV=Refresh Content="1;URL=regist.html">';
}
else
{
echo "<p>Сообщение не отправлено<br /><br />
<a href=regist.html >Вернуться назад </a> </p>";
echo '<META HTTP-EQUIV=Refresh Content="1;URL=regist.html">';
}
?>
