<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<!-- saved from url=(0075)http://www.webstepbook.com/supplements/labsection/lab4-buyagrade/sucker.php -->
<html xmlns="http://www.w3.org/1999/xhtml"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Buy Your Way to a Better Education!</title>
		<link href="./sucker_files/buyagrade.css" type="text/css" rel="stylesheet">
	</head>

	<body>
		<?php 
			if (count(array_filter($_POST))!=count($_POST))
			{
				echo "<h1>Sorry</h1>";
    			die ("You did not fill the form completely.<a href =\"buyagrade.html\">Try again</a>"); 
			}
			
			echo "<h1>Thank you sucker</h1>";
			$q=$_POST['q'];
			$sec = $_POST['section'];
			$credit = $_POST['credit'];
			$card= $_POST['card'];
		?>


		<p>Your information has been recorded.</p>
		 <dl>
		 	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
				<dt><?php echo "Name" ?></dt>
				<dd><?php echo $q; ?></dd>
				
				<dt><?php echo "Section" ?></dt>
				<dd><?php echo $sec; ?></dd>

				<dt><?php echo "Credit Card" ?></dt>
				<dd><?php echo $credit . "(" .  $_POST['card'] . ")"; ?></dd>
			</form>
		</dl> 
		
		<?php 
			
				$myfile= 'sucker.txt';
				$str = $q.";".$sec.";".$credit.";".$card."\n";
				file_put_contents($myfile, $str, FILE_APPEND);
				$current = file_get_contents($myfile);
				echo "<pre>".$current."</pre>";
			
		?>

  </body>
 </html>