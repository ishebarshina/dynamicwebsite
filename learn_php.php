<!DOCTYPE html>
<head>
</head>
<body>
	<span>Hello, world!<br></span>
</body>


<?php
// Однострочный комментарий
# Однострочный
/*Многострочный*/
	$a = 123; // php variable
	echo $a; // print variable
	echo '<br>';
	define('LEET', 1337); // define constant
	echo LEET;
	echo '<br>';
# Типы данных в php
/*
	INTEGER
	DOUBLE / FLOAT
	STRING - Строка ' ... '
	BOOLEAN - Логический тип - NRUE, FALSE
	ARRAY - Массив
	OBJECT - Объект
	NULL - Отсутствие значения
	RESOURCE - содержит ссылку на внешний ресурс
*/

# STRINGS
	$str1 = 'Hello, ';
	$str2 = 'world!';
	$str_full = $str1 . $str2;
	echo $str_full;
	echo '<br>';
# HEREDOC
	echo <<<END
	Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне.
	Lorem Ipsum является стандартной "рыбой" для текстов на латинице с
	начала XVI века. В то время некий безымянный печатник создал большую
	коллекцию размеров и форм шрифтов, используя Lorem Ipsum для распечатки
	образцов. Lorem Ipsum не только успешно пережил без заметных изменений пять
	веков, но и перешагнул в электронный дизайн. Его популяризации в новое
	время послужили публикация листов Letraset с образцами Lorem Ipsum в
	60-х годах и, в более недавнее время, программы электронной вёрстки типа
	Aldus PageMaker, в шаблонах которых используется Lorem Ipsum.<br>
END;

# ARRAYS

	$names = array('Alex', 'Susan', 'Anna');
	$days = ['Monday', 'Friday'];
	echo $names[0];
// append element:
	$days[] = 'Sunday';
	echo '<pre>';
	print_r($names);
	echo '<br>';
	print_r($days);
	echo '<br>';
// АССОЦИАТИВНЫЕ МАССИВЫ
// ИНДЕКС - НЕ ЧИСЛО
	$food = [
		'apple' => 'fruit',
		'cucmber' => 'vegetable'
	];
	echo $food['apple'];
	echo '<br>';

// if - else
	$a = 3;
	if ($a > 3) {
		echo 'a > 3<br>';
	} elseif ($a === 3) {
		echo 'a === 3<br>';
	} else {
		echo 'a < 3<br>';
	}
// swith - case
// while ( ... ) { do smth }
// do {} while ()
	for ($i = 0; $i < 5; $i++) {
		echo $i . ' <br>';
	}
	echo '<br>';
	for ($i = 0; $i < 5; $i++) {
		echo "$i <br>";
	}

	echo '<br>';
	$f = 1.34;
	echo (int)$f . '<br><br>';

	function greeting($name) {
		echo "Hello, $name!"; // returns NULL
	}

	greeting('Cat');

/* Чтобы воспользоваться глоообальной переменной внутри функцииб нужно
воспользоваться словом Global, то есть обращаться к переменной следующим образом:
Global: $var_name
для локальной можно ничего не писать, или можно:
local: $var_name
*/

	include_once 'func_file.php'; // require is stronger and will trow FatalError, not Warning

# OBJECTS
/*
Класс
	Объект
		Свойства
		Методы
*/
/*
Модификаторы доступа:
pulic - доступ к свойствам и методам из любой части кода
protected - доступ только внутри текущего класса и классов наследников
private - доступ к свойствам и методам только внутри текущего класса
*/

	class Human {
		/*public $first_name = 'Anna';
		public $last_name = 'Ivanova';
		public $age = 24;*/
		const HEAD_COUNT = 1; // constant inside class definition
		public static $population = 0; // static poperty

		public function hi() {
			echo "Hi, $this->first_name $this->last_name <br>";
		}
		// для обращения к статическим методам вместо this используем self
		public function __construct($first_name = 'Anna',
									$last_name = 'Kim', $age = 21) {
			$this->first_name = $first_name;
			$this->last_name = $last_name;
			$this->age = $age;
			self::$population += 1;
			echo "$this->first_name $this->last_name Object is created <br>";
			self::printPopulation();
		}

		public function __destruct() {
			self::$population -= 1;
			echo "$this->first_name $this->last_name Object is destructed <br>";
			self::printPopulation();
		}

		public static function printPopulation() {
			 // такое обращение не может находиться внутри строки даже с " "
			echo "Number of Objects: " . self::$population . "<br>";
		}
	}

	$anna = new Human;
	$alex = new Human;

	$alex->first_name = 'Alex';
	unset($alex);
	$alex = new Human('Alex', 'Petrov', 25);
	$alex->last_name = 'Petrov';

	echo '<pre>';
	print_r($anna);
	print_r($alex);
	$anna->hi();

	echo Human::$population; // :: разрешение области видимости
	echo '<br>';

?>
