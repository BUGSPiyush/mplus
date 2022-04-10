<?php

	include '../inc/db.php';
	session_start(); 

	if (isset($_POST['saveprofile'])) {

		$uid = $_SESSION['uid'];

		mysqli_query($conn, "UPDATE `userdetails` SET `status` = 'active' WHERE `uid` = '$uid'");
				echo "<script>
					window.alert('account activated');
					window.location.href='home.php';
				</script>";
	}	
?>