<html> <!-- constants -->
	<p>Hello World!</p>
		<?php
			
			$age = 15;
			$name = "Harry";
		?>
	<p>Hello World Again!</p>
		<?php

			//var_dump(scandir(getcwd()));
			$array = scandir(getcwd());
			echo $name;
			define("COMPANY", "ABC Pet Store");
			echo COMPANY;
			echo $array[3];
			PRINT '<br>';
			var_dump($_SERVER);
			//$string = getcwd();
			//$array[1]=scandir($string);
			//echo $array;
		?>
</html>