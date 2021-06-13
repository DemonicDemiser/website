<?php
	require 'connect.php'; //connect to db so our queries will work

	$name = $_POST['name'];
	$email = $_POST['email'];
	$username = $_POST['username'];
	$pass = $_POST['password']; // getting information from form
	
	if($email == '' || $name == '' || $username  == '' || $pass == '') { //This part displays errors and redirect user to registration.php
																	  //if no data was filled 
		echo "
			<script>
				alert('Some inputs are emty!');
				window.location.assign('registration.php'); 
			</script>
		";
	} 
	else {
		if(strlen($email)>50 OR strlen($name)>100 OR strlen($pass)>100 OR strlen($username)> 100){ //This part displays errors 
			echo "
			<script>
				alert('Some inputs are too long!');
				window.location.assign('registration.php'); 
			</script>
			" ;
		} 
		else {
			$sql = "SELECT * FROM users WHERE email = '$email'"; // getting data from database usertable2
			$query = mysqli_query($conn,$sql);
			if(mysqli_num_rows($query)>0){ //This part displays errors and redirect user to registration.php if filled data is already exist
				echo "
				<script>
					alert('This email aleady exists!');
					window.location.assign('registration.php');
				</script> 
			";
			}
			else {
            $sql = "INSERT INTO users(Name, Email, Username, Password) VALUES ('$name', '$email','$username','$password')"; // adding three more data 
            mysqli_query($conn,$sql);
            echo $sql;
            header("Location: Login.php"); //redirecting to login.php after registration
			}
		}
	}
				
?>