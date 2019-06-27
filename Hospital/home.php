<?php session_start() ?>
<?php header('Content-Type: text/html; charset= utf-8') ?>
<html>

<head>
     <title>Личный кабинет</title>
     <meta charset="UTF-8">

     <link rel="stylesheet" type="text/css" media="screen" href="css/styles.css" />
     <link rel="shortcut icon" href="images/Logo.png" type="images/x-icon">
     <link rel="stylesheet" href="css/link.css">
     <link rel="stylesheet" href="css/style2.css" type="text/css">
     <script type="text/javascript" src="jquery/jquery-1.6.4.js"></script>
</head>

<body>
     <div class="wrapper">
          <div class="header">
               <div class="logo">
                    <div class="poloska"></div>
                    <div class="gif">
                         <img src="images/6.gif" alt="" />
                    </div>
                    <div class="MIKP">
                         <img src="images/MIKP.gif" alt="" />
                    </div>

                    <div class="img1">
                         <img src="images/logo.gif" alt="" />
                    </div>
               </div>
          </div>

          <div id="left">

               <div class="toro">
                    <ul>
                         <li><a href="MIOKStatyi.html"><i>Статьи</i></a></li>
                         <li><a href="MIOKPhoto.html"><i>Фотографии</i></a></li>
                         <li><a href="MIOKKarta.html"><i>Карта сайта</i></a></li>
                         <li><a href="MIOKSvyazsnami.html"><i>Связаться с нами</i></a></li>
                         <li><a href="kniga.php"><i>Гостевая книга</i></a></li>
                    </ul>
               </div>

               <div class="logo2"><img src="images/kd1.png" alt="" /></div>

               <div class="rekl"><a href="#"><img style="width:200px;" src="images/rekl.jpg" alt="" /></a></div>

               <div class="container">
                    <div id="content-slider">
                         <div id="slider">
                              <div id="mask">
                                   <ul>
                                        <li id="first" class="firstanimation">
                                             <a href="news1.html">
                                                  <img style="width:200px; height:200px;" src="images/1.1.png" alt="" />
                                             </a>
                                             <div class="tooltip">
                                                  <h1><a href="news1.html">РН Falcon Heavy..</a></h1>
                                             </div>
                                        </li>

                                        <li id="second" class="secondanimation">
                                             <a href="news2.html">
                                                  <img style="width:200px; height:200px;" src="images/1.1.1.png" alt="Lions" />
                                             </a>
                                             <div class="tooltip">
                                                  <h1><a href="news2.html">Stratolaunch Model 351..</a></h1>
                                             </div>
                                        </li>

                                        <li id="third" class="thirdanimation">
                                             <a href="news3.html">
                                                  <img style="width:200px; height:200px;" src="images/1.3.1.png" alt="Snowalker" />
                                             </a>
                                             <div class="tooltip">
                                                  <h1><a href="news3.html">SpaceX запустила..</a></h1>
                                             </div>
                                        </li>

                                        <li id="fourth" class="fourthanimation">
                                             <a href="news4.html">
                                                  <img style="width:200px; height:200px;" src="images/1.4.1.png" alt="Howling" />
                                             </a>
                                             <div class="tooltip">
                                                  <h1><a href="news4.html">Beresheet разбился..</a></h1>
                                             </div>
                                        </li>

                                        <li id="fifth" class="fifthanimation">
                                             <a href="news5.html">
                                                  <img style="width:200px; height:200px;" src="images/1.5.png" alt="Sunbathing" />
                                             </a>
                                             <div class="tooltip">
                                                  <h1><a href="news5.html">Первая в мире..</a></h1>
                                             </div>
                                        </li>
                                   </ul>
                              </div>
                              <div class="progress-bar"></div>
                         </div>
                    </div>
               </div>

          </div>



          <div id="block">

               <?php require 'auto.php'; ?>





               <?php
               if (isset($_SESSION['auth'])) {
                    ?>

                    </form>

                    <h1 align='center'>Связаться с нами:</h1>
                    <div class='formochk'>
                         <form method=post id='myForm'>
                              <input type=text name=name placeholder="Введите ваше имя"> </br>
                              <input type=text name=phon placeholder="8 800 555 35 35"></br>
                              <input type=text name=email placeholder="Введите Ваш E-mail"> </br>
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
                                             $("#aj").html(rez);
                                        }
                                   });
                                   return false;
                              });
                         });
                    </script>
                    <div id='aj'> </div>
               <?php
          } else {

               echo "<br> <a href='home.php'  style='font-size:25px; color:white; '>Для входа в личный кабинет пожалуйста авторизируйтесь</a>";
          }
          ?>




          </div>


          <div class="footer">
               <div class="op1">
                    <p>© 2019 "AllSpace"</p>
               </div>
               <div class="op2">
                    <p>Автор: Редько Данил</p>
               </div>
               <div class="op3">
                    <p>©Все права защищены</p>
               </div>
          </div>

          <div class="god">
               <ul id="gad">
                    <li><a href="Index.html"><i class="fa fa-home"></i>Главная</a></li>
                    <li><a href="MIOKNovosti.html"><i class="fa fa-th-list"></i>Новости</a></li>
                    <li><a href="#"><i class="fa fa-cogs"></i>Люди</a>
                         <ul>
                              <li><a href="MIOKLudiIzobretateli.html">Изобретатели</a></li>
                              <li><a href="MIOKLudiKosmonavti.html">Космонавты</a></li>
                         </ul>
                    </li>
                    <li><a href="#"><i class="fa fa-cogs"></i>Категории</a>
                         <ul>
                              <li><a href="MIOKKategoriiIOK.html">История освоения космоса</a></li>
                              <li><a href="MIOKKategoriiKNT.html">Космические небесные тела</a></li>
                              <li><a href="MIOKKategoriiNYAVKP.html">Необычные явления в космическом пространстве</a></li>
                              <li><a href="MIOKKategoriiMIKP.html">Методы изучения космического пространства</a></li>
                              <li><a href="MIOKKategoriiC.html">Созвездия</a></li>
                         </ul>
                    </li>
                    <li><a href="MIOKKontakti.html"><i class="fa fa-envelope-open"></i>Контакты</a></li>
               </ul>
          </div>
     </div>
</body>

</html>