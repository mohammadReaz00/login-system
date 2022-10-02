<?php
function db()
{
	static $conn;
	if ($conn == NULL) {
		$conn = mysqli_connect('localhost', 'root', '', '');
	}
	if (!$conn) {
		die("Could not connect to database");
	}
	return $conn;
}
