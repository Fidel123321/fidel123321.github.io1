<?php

$fio=$_POST['fio'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$address = 'здесь должен быть ваш email';
$sub = "Здесь должна быть ваша тема сообщения";
$mes = "Посетитель: $fio \nУказал свой адрес: $email \n Номер телефона:$phone";
$verify = mail ($address,$sub,$mes,"From: $email");
if ($verify == 'true')
{
echo "<p>Сообщение отправлено<br /><br />
<a href=forma.html >Вернуться назад </a> </p>";
}
else
{
echo "<p>Сообщение не отправлено<br /><br />
<a href=regist.html >Вернуться назад </a> </p>";
}
?>