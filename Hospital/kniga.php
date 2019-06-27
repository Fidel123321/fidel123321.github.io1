<?php header('Content-Type: text/html; charset= utf-8')?>
<?php
echo "
<head>
<title>Отделения</title>
<meta http-equiv='content-type' content='text/html; charset=utf-8' />
<link rel='stylesheet' type='text/css' href='styles.css' />
</head>
<body id='altbody'>
<div id='wrapper-header'>
  <div id='header'>
    <h1>Больница №1.</h1>
  </div>
</div>
<div id='wrapper-menu'>
  <div id='menu'>
    <ul>
       <li><a href='index.html'>Главная</a></li>
      <li><a href='diagnosis.html'>Диагностика</a></li>
      <li><a href='regist.html'>Контакты</a></li>
      <li><a href='about_us.html'>О нас</a></li>
	    <li><a href='otdelenia.html'>Отделения</a></li>
		<li><a href='sotrudniki.html'>Сотрудники</a></li>
		 <li><a href='vrema.html'>Время работы</a></li>
		 <li><a href='adres.html'>Адрес</a></li>
		 <li><a href='pravila.html'>Правила</a></li>
		   <li><a href='pismo.html'>Письмо главному врачу</a></li>
    </ul>
  </div>
</div>

        <div class='content'>

       </br>
<h2 align='center'>Гостевая книга</h2>
	<p>Заполнив данные поля формы, вы сможете отправить нам своё сообщение, отзыв, комментарий и т.п.</p>
</br>

<form action='script.php' method='post'>
<div style='margin: auto;'>
<table align='center' style='color: black;'>
<tr>
<td>Имя пользователя</td><td><input type='text' name='name'></td>
</tr>

<tr>
<td>E-mail<br /></td><td><input type='email' name='email'></td>
</tr>

<tr>
<td>Сообщение</td><td><textarea name='mail' cols='22' rows='3'></textarea></td>
</tr>

<tr>
<td><input type='submit'></td>
</tr>
</table>
</div>
</form>
</center>


</br></br></br>
<h1 align='center'>Записи в нашей гостевой книге:</h1>
";
 	
// Подключаемся к БД
$db_host = 'localhost';
$db_user = 'root';
$db_password = '';
$database = 'gostevaja';
 
mysql_connect($db_host, $db_user, $db_password);
mysql_select_db($database);

$r=mysql_query("SELECT * FROM kniga ORDER BY id DESC"); // Создаем SQL запрос, //сортировка по убыванию ID
for($i=0; $i< mysql_num_rows($r); $i++) // Перебор всех записей в таблице
{
$f=mysql_fetch_array($r); // Обрабатывает ряд результата запроса, возвращая ассоциативный массив, численный массив или оба
print " <table align='center' class='kniga2' style='color: black;'><tr id='z1'><td>$f[1]<hr></td></tr><trid='z2'><td>$f[2]:</td></tr></br></br><tr><td>$f[4] <br></td></tr></table>

"; // Вывод значений в HTML, где $f[0], значение первого столбца, $f[1] - значение второго и т.д. 
}
echo"</div>
<div id='footer'>Работаем с 2013 года.</div>
</body>
"
?>
