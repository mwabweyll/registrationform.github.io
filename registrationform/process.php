<?php
require_once('config.php');
?>
<?php

if(isset($_POST)){

	$user_ID 		= $_POST['user_ID'];
	$fname 			= $_POST['fname'];
	$mname 			= $_POST['mname'];
	$lname 			= $_POST['lname'];
	$gender			= $_POST['gender'];
	$username		= $_POST['username'];
	$password 		= $_POST['password'];

		$sql = "INSERT INTO register (user_ID, fname, mname, lname, gender, username, password) VALUES(?,?,?,?,?,?,?)";
		$stmtinsert = $db->prepare($sql);
		$result = $stmtinsert->execute([$user_ID, $fname, $mname, $lname, $gender, $username, $password]);
		if($result){
			echo 'Successfully saved.';
		}else{
			echo 'There were error while saving the data.';
		}
}else{
	echo 'No data';
}
