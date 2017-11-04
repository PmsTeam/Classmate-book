<?php
	$server = 'localhost';
	$logname = 'root';
	$logpw='';
	$database = 'friend_set';

	$conn= mysqli_connect($server,$logname,$logpw,$database);

	if (!$conn)
	{
		die("could not connect :".mysqli_error());
	}