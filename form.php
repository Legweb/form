<?php
$name=$_POST["name"];
$email=$_POST["email"];
$tema=$_POST["tema"];
$text=$_POST["text"];
$from = $email;
$to = "forest88@i.ua";
$subject = $tema;
$message = "Name: ".$name."\nText: ".$text;
$headers = "From:" . $from;
mail($to, $subject, iconv("utf-8", "Windows-1251", $message), $headers);
?>
<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
      <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>

      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
		<style>
			.cen{

    padding-left: 37%;
    padding-top: 15%;
}

		</style>
    </head>


    <body>

	  <div class="row ">
		  <div class="cen">

		  
	   <a href="/form/form.html" class="waves-effect waves-light  btn-large">Лист успішно відпрвлений!</a>
          </div>
        </div>
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>

    </body>
  </html>