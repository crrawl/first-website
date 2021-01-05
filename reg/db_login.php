<?php 

include ('D:\ospanel\domains\blogs.lv\include/db.php'); 

$login = $_POST['login'];
$password = $_POST['password'];
$email = $_POST['email'];

$count = mysqli_query($MySQL_connect, "SELECT * FROM `accounts` WHERE `login` = '$login' AND `password` = '$password' AND `email` = '$email'");

if( mysqli_num_rows($count) == 0 )
{
	echo 'Jus neesat registreti';
} else
{
	echo 'Hy, ' . $login . '!';
}
