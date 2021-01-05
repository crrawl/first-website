<?php
$MySQL_connect = mysqli_connect('127.0.0.1', 'root', 'root', 'site');

if ($MySQL_connect == false) {
	echo 'CONNECT FAILURE(DB)';
	echo mysqli_connect_error();
	exit();
}
