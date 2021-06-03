<?php
	$conn = new mysqli("localhost","root","vpmke7","testt");
	if($conn->connect_error){
		die("Connection Failed!".$conn->connect_error);
	}
?>