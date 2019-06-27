 <?
 if(empty($_SESSION['auth']))
  { 

    ?>
	<div align='center' class='formochka'>
	<h1 align='center'>Вход:</h1>
 <form method='post'> 
 <div><input type=text name=name placeholder="Введите логин"></div>
<div><input type=password name=pass placeholder="Введите пароль"></div>
<input type=submit value='Войти'>
<a href="registr.php">Регистрация</a> 
 </form>
 </div>
   
   <?php 
  
if(isset($_POST['name'])&& isset($_POST['pass']))
{

$filename = "text.txt";  
   
    // Проверяем корректность введённого имени 
    // и пароля 
    $arr = file($filename); 
    $i = 0; 
    $temp = array(); 
    foreach($arr as $line) 
    { 
      // Разбиваем строку по разделителю :: 
      $data = explode("::",$line); 
      // В массив $temp помещаем имена и пароли 
      // зарегистрированных посетителей 
      $temp['name'][$i]     = $data[0]; 
      $temp['password'][$i] = $data[1]; 
      $temp['email'][$i]    = $data[2]; 
      $temp['url'][$i]      = trim($data[3]); 
      // Увеличиваем счётчик 
      $i++; 
    } 



    // Если в массиве $temp['name'] нет введённого 
    // логина - останавливаем работу скрипта 
    if(!in_array($_POST['name'],$temp['name'])) 
    { 
      echo("Пользователь с таким именем не зарегистрирован"); 
    } 
    else
  {
    // Если пользователь с именем $_POST['name'] обнаружен 
    // проверяем правильность введённого пароля 
    $index = array_search($_POST['name'],$temp['name']); 
    if($_POST['pass'] != $temp['password'][$index]) 
    { 
      echo("Пароль не соответствует логину"); 
    } 
   else 
    {
      
      $_SESSION['auth']=1;

     $_SESSION['name']=$_POST['name'];
     $_POST['password']=$_POST['pass'];

 echo "<HTML><HEAD> 
         <META HTTP-EQUIV='Refresh' CONTENT='0; URL=$_SERVER[PHP_SELF]'> 
       </HEAD></HTML>"; 
     


}
   } 

}


 }

  
 
if(isset($_SESSION['auth']))
{
echo "Здравствуйте  ".$_SESSION['name']."<br>";
?>
<form  method='post' > 
<input type=submit name='exzit' value='Выход'>
</form>

<?php
if(isset($_POST['exzit']))
{
unset($_SESSION['auth']);
echo 'Выход успешен';
 echo "<HTML><HEAD> 
         <META HTTP-EQUIV='Refresh' CONTENT='0; URL=$_SERVER[PHP_SELF]'> 
       </HEAD></HTML>"; 
  }


}