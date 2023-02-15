<?php 
session_start(); 
include "db_conn.php";

if (isset($_POST['em']) && isset($_POST['password'])) {

	function validate($data){
       $data = trim($data);
	   $data = stripslashes($data);
	   $data = htmlspecialchars($data);
	   return $data;
	}

	$em = validate($_POST['em']);
	$pass = validate($_POST['password']);

	

	$user_data = 'em='. $em;


	if (empty($em)) {
		header("Location: signup.php?error=User Name is required&$user_data");
	    exit();
	}else if(empty($pass)){
        header("Location: signup.php?error=Password is required&$user_data");
	    exit();
	}


	else{

		// hashing the password
        //$pass = md5($pass);

	    $sql = "SELECT * FROM users WHERE email='$em' ";
		$result = mysqli_query($conn, $sql);

		if (mysqli_num_rows($result) > 0) {
			header("Location: signup.php?error=This email is used. Please try another email &$user_data");
	        exit();
		}else {
           $sql2 = "INSERT INTO users(email, password) VALUES('$em', '$pass')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
           	 header("Location: signup.php?success=Your account has been created successfully");
	         exit();
           }else {
	           	header("Location: signup.php?error=unknown error occurred&$user_data");
		        exit();
           }
		}
	}
	
}else{
	header("Location: signup.php");
	exit();
}