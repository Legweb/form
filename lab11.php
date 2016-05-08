<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<html>
	<head></head>
	<body>
		<?php
		function mySum($y1,$x1,$z1) { 
		
			$one=(sin(pow($y1,2))*cos(pow($y1,2)))/pow(abs($x1-$y1/$y1+$z1),1/5);
			$two=$x1*pow(sin($y1+pow(abs($x1),0.3)),2);
			$three=pow(abs(($z1*$z1/$x1))-pow(log(abs($x1)),2),1/2);
			$rez=$one+$two/$three;
		return ($rez);
		}; 

			$error="error: ";
			$name=$_POST["Name"];
			$surname=$_POST["Surname"];
			$group=$_POST["Group"];
			$x=$_POST["X"];
			$y=$_POST["Y"];
			$z=$_POST["Z"];
			$mail=$_POST["Mail"];
			$y1=$y*4;
			$x1=$x*4;
			$z1=$z*4;
			$rez=mySum($y1,$x1,$z1); 
			//$one=(sin(pow($y1,2))*cos(pow($y1,2)))/pow(abs($x1-$y1/$y1+$z1),1/5);
			//$two=$x1*pow(sin($y1+pow(abs($x1),0.3)),2);
			//$three=pow(abs(($z1*$z1/$x1))-pow(log(abs($x1)),2),1/2);
			//$rez=$one+$two/$three;
			//echo $rez;

			if (strlen($name) == 0) 
				$error.="<br>Invalid name";
			if (strlen($surname) == 0) 
				$error.="<br>Invalid surname";
			if (strlen($group) == 0) 
				$error.="<br>Invalid group";
			

			if (!is_numeric($x)) 
					$error.="<br>Invalid variable x";  
			if (!is_numeric($y)) 
					$error.="<br>Invalid variable y";
			if (!is_numeric($z)) 
					$error.="<br>Invalid variable z";	

			
				         
		?>
		

		
     		Welcome <?php echo $_POST["Name"]; ?> <?php echo $_POST["Surname"]; ?><br>
				Your answer is: <?php echo $rez; ?>
				<?php
				$from = "localhost@localhost.com";
				$to = $mail;
				$subject = "Rezalt";
				$message = "Name: ".$name."\nSurname: ".$surname."\nGrup: ".$group."\n Rezalt: = ".$rez;
				$headers = "From:" . $from;
				mail($to, $subject, iconv("utf-8", "Windows-1251", $message), $headers);
				echo "Letter sended";

				?>


		
	</body>
</html>


