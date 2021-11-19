<?
  if(isset($_GET["iv_color"]))
	 print_r($_GET["iv_color"])

?>
<?
  $bg_color = "#fff";
  if (isset($_GET["iv_color"]))
	  $bg_color = $_GET["iv_color"];
  else
	  $bg_color = "#fff";
  ?>
  
  
 <?
 if (session_is_registered('USER')) 
{
print "<br><font class='login'>Здравствуйте,<br> ".$_SESSION['USER']['name']." ".$_SESSION['USER']['lastname']. "</font>";
print "<p><form name='out' method='POST' action='index.php'>
<input type='submit' name='vihod' value='Выход'></form></p></div>";

/* Если юзер не авторизован тогда вывести форма авт-я */
} else {
print "<br><a href='reg_user.php'>Зарегистрироваться</a>";
print "<br>
<form name='avt' method='POST' action='avt_user.php'>
Логин:<br>
<input type='text' name='login'><br>
Пароль:<br>
<input type='password' name='pass'><br><br>
<input type='submit' name='enter' value='Войти'></form>";
}
 
 
 ?>

<doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="background-color:<?=$bg_color?>">
    <div class="container">
	 <h1><?
	   echo "Выбери любимый цвет"?></h1>
 
  <body>
     
	
	<form action="/izmaylov/" method="GET">
  <div class="MARK">
    <label for="exampleColorInput" class="form-label">Color picker</label>
    <input type="color" name="iv_color" class="form-control form-control-color" id="exampleColorInput" value="#563d7c" title="Choose your color">
  </div>
  <button type="кнопка" class="btn btn-primary">Sumbit</button>
 </form>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-kQtW33rZJAHjgefvhyyzcGF3C5TFyBQBA13V1RKPf4uH+bwyzQxZ6CmMZHmNBEfJ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/js/bootstrap.min.js" integrity="sha384-PsUw7Xwds7x08Ew3exXhqzbhuEYmA2xnwc8BuD6SEr+UmEHlX8/MCltYEodzWA4u" crossorigin="anonymous"></script>
    -->
  </body>
</html>






