<?php
include "inc/db.php";
session_start(); 
if (isset($_POST['signin'])) {
	$uid = $_POST['uid'];
	$lpass = $_POST['password'];
	$loginsql = "SELECT * FROM `userdetails` WHERE `aadharnum` = '$uid' OR `upancard` = '$uid' OR `ulicense` = '$uid' AND `upass` = $lpass ";

	$result = mysqli_query($conn, $loginsql);
	if (mysqli_num_rows($result) === 1) {
		$row = mysqli_fetch_assoc($result);
		if ($row['status'] === "inactive") {
			echo "<script>
					window.alert('Your account is inactive');
					window.location.href='index.php';
				</script>";
		} else {
			$_SESSION['uid'] = $row['uid'];
			echo "<script>
				window.location.href='home.php';
			</script>";
		}
	} else {
	echo "<script>
			window.alert('user not found');
			window.location.href='index.php';
		</script>";
	}
}

?>