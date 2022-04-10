<?php
include "../inc/db.php";
session_start(); 
if (isset($_POST['signin'])) {
	echo "test";
	$uid = $_POST['uid'];
	$lpass = $_POST['password'];
	$loginsql = "SELECT * FROM `admin` WHERE `ausername` = '$uid' AND `apass` = '$lpass' ";

	$result = mysqli_query($conn, $loginsql);
	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		$_SESSION['uid'] = $row['uid'];
			echo "<script>
				window.location.href='home.php';
			</script>";
	} else {
	echo "<script>
			window.alert('user not found or invalid credentials');
			window.location.href='index.php';
		</script>";
	}
}

?>