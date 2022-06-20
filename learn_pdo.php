
<?php
// Закоментированный код - для MySQL.
// Этот пользователь и БД созданы, но БД пуста.
// Дальне работю с mssql
/*
$driver = 'mysql';
$host = 'localhost';
$db_name = 'dynweb';
$db_user = 'admin';
$db_pass = '123';
$charset = 'utf8';
$options = [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];

try {
	$pdo = new
	PDO("$driver:host=$host;dbname=$db_name;charset=$charset",
	$db_user, $db_pass, $options);
} catch(PDOExceptopn $e) {
	die("Can't connect to database.<br>");
}*/

// MSSQL
/*
CREATE LOGIN <login-name> WITH PASSWORD = '123';
create user <user-name> for login <login-name>;
use <database-name>;
grant <permission-name> on <object-name> to <username\principle>
*/
// Video 6

?>
