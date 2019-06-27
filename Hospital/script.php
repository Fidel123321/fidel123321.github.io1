<?php
//Передаём переменным данные форм
//Присваиваем каждой форме переменную
$name=$_POST['name'];
$email=$_POST['email'];
$mail=$_POST['mail'];


// Подключаемся к БД
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$database = 'gostevaja';
 
mysql_connect($db_host, $db_user, $db_password);
mysql_select_db($database);
 
mysql_query("CREATE TABLE IF NOT EXISTS kniga (`id` int(10) unsigned NOT NULL auto_increment, `date_created` datetime NOT NULL, `name` text, `email` text,
`mail` text,  PRIMARY KEY  (`id`) )
ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6849") or die(mysql_error());
 
//Записываем в БД данные форм
$query="INSERT INTO `kniga` (`id`, `date_created`, `name`, `email`, `mail`)
VALUES ('', NOW(), '$name', '$email', '$mail')";
$result = mysql_query($query);
if (!$result) {
$feedback = 'ОШИБКА - Ошибка базы данных';
$feedback .= mysql_error();
return $feedback;
}
echo '<META HTTP-EQUIV=Refresh Content="1;URL=kniga.php">'
?>
