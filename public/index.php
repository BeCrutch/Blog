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

	<div>
		
		<?php
		#числа
		$integer_1 = 10;
		$integer_2 = 5;
		$integer_3 = 2;
		$float = 12.25;
		#строки
		$string_1 = 'Roman';//строка
		$string_2 = "Naumenko";//строка, ковычки не имеют значения
		#массивы
		$array_1 = array( 99, 98, 97, 96, 95 );
		$array_2 = array(  //массив по ключ => значение
			'Design' => array(
				'first' => 'Оля',
				'second' => 'Татьяна' 
			),
			'FrontEnd' => 'Роман',
			'BackEnd' => array(
				'first' => 'Денис',
				'second' => 'Александр'
			),
			'Content' => 'Анна'
		);
		#булево значение
		$boolean = true;

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

		<!--Разница между кавычками для (оптимизации нагрузки страницы) в целях производительности-->
		<span><?echo 'dev: $string_1'?></span> <!--Обрабадываться как обычный текст '' -->
		<span><?echo "dev: $string_1"?></span> <!--Обрабадываться как переменноу "" -->
		<!---->

		<input type="text" value="<?php echo $boolean ?>">


		<!-- Канкатенация -->
		<p><?echo $string_1 . ' ' . $string_2 ?> </p>
		<!---->

		<!-- Математические действия (+ - / * %)  '(10 + 5) / 2 * 10 % 2 = 1' -->
		<p><?echo ($integer_1 + $integer_2) / $integer_3 * $integer_1 % $integer_3  ?></p>
		<!---->

	</div>
</body>
</html>