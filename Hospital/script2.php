<?php
//Передаём переменным данные форм
//Присваиваем каждой форме переменную
$message=$_POST['message'];
//отправим данные из формы на e-mail админа
//Задаём переменные для письма админу о новом сообщении клиента
$address = 'filippgolovny@mail.com';
$sub = "Отзыв";
$mes = "Посетитель: Содержание письма: $message";
//Отправляем письмо админу о новом сообщении
$verify = mail ($address,$sub,$mes,"From: $mail");
//проверка отправилось ли письмо
if ($verify == 'true')
{
echo "<p>Сообщение отправлено<br /><br />
<a href=pismo.html >Вернуться назад </a> </p>";
echo '<META HTTP-EQUIV=Refresh Content="1;URL=pismo.html">';
}
else
{
echo "<p>Сообщение не отправлено<br /><br />
<a href=pismo.html >Вернуться назад </a> </p>";
echo '<META HTTP-EQUIV=Refresh Content="1;URL=pismo.html">';
}
?>
