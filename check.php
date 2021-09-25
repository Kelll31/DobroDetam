<?php
$result1 = $mysql->query("SELECT * FROM `users` WHERE `username` = '$username'");
$user1 = $result1->fetch_assoc(); // Конвертируем в массив
if(!empty($user1)){
	echo "Данный логин уже используется!";
	exit();
}
?>