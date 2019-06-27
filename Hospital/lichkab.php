<?php session_start() ?>
<?php header('Content-Type: text/html; charset= utf-8') ?>
<html>
<head>
<title>Отделения</title>
<meta charset="UTF-8">
<link rel="stylesheet" type="text/css" href="styles.css" />
<script type="text/javascript" src="jquery/jquery-1.6.4.js"></script>
</head>
<body id="altbody">
<div id="wrapper-header">
  <div id="header">
    <h1>Больница №1.</h1>
  </div>
</div>
<div id="wrapper-menu">
  <div id="menu">
    <ul>
       <li><a href="index.html">Главная</a></li>
      <li><a href="diagnosis.html">Диагностика</a></li>
      <li><a href="regist.html">Вакансии</a></li>
      <li><a href="about_us.html">О нас</a></li>
	    <li><a href="otdelenia.html">Отделения</a></li>
		<li><a href="sotrudniki.html">Сотрудники</a></li>
		 <li><a href="vrema.html">Время работы</a></li>
		 <li><a href="adres.html">Адрес</a></li>
		 <li><a href="pravila.html">Правила</a></li>
		   <li><a href="pismo.html">Специалистам</a></li>
		   <li><a href="lichkab.php">Личный кабинет</a></li>
       <li><a href="kniga.php">Гостевая книга</a></li>
    </ul>
  </div>
</div>


	
<div id="content"> <big><h2><strong>Личный кабинет</strong></h2></big>

 
  <?php require 'auto.php'; ?>

</br></br>
<h1 align="center">Связаться с нами</h1>

<div align='center' class='formochk'>
    <form method=post id='myForm'>
        <div> <input type=text name=name placeholder="Введите ваше имя"></div>
        <div> <input type=text name=phon placeholder="8 800 555 35 35"></div>
        <div> <input type=text name=email placeholder="Введите Ваш E-mail"></div>
        <div class='formoch'>
            <textarea rows="7" cols="40" name="message"></textarea> <br />
        </div>
        <input name=knock type="submit" value="Отправить" />
        </br>

        <br></br>
    </form>
</div>
<script>
    $(document).ready(function() {
        $('#myForm').submit(function() {
            var msg = $('#myForm').serialize();
            $.ajax({
                type: "POST",
                url: "mail.php",
                data: msg,
                success: function(rez) {
                    $("#qw").html(rez);
                }
            });
            return false;
        });
    });
</script>
<div align='center' id='qw'> </div>
</div>
	</div>
	
<div id="footer">Работаем с 2013 года.</div>
</body>
</html>