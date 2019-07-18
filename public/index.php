<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<style>
	.title {
		text-align: center;
	}
</style>
<body>

	<h2>Переменные</h2>
	<div>
		
		<?php

		//
		$integer = 10;
		$float = 12.25;
		$string_1 = 'Roman';//строка
		$string_2 = "Naumenko";//строка, ковычки не имеют значения



		?>

	</div>



	<div class="title">
		<p>
		<?php 
			$a1 = 'roma';
			echo gettype( $a1 );
			if (is_int($a1)) {
				echo 'integer';
			} else {
				echo 'no_integer';
			}	
		?>
		</p>
		<input type="text" value="<?php echo $integer ?>">
	</div>
</body>
</html>