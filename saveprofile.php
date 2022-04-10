<?php

session_start();
include 'inc/db.php';


if (isset($_POST['saveprofile'])) {

	$uid = $_SESSION['uid'];
	$res = mysqli_query($conn,"SELECT * FROM `userdetails` WHERE `uid` = '$uid'");
	if($row=mysqli_fetch_assoc($res)){

		$iv = $row['iv'];


		$ditrict = $_POST['uditrict'];
		$state = $_POST['ustate'];
		$pincode = $_POST['upincode'];
		$bloodgroup = $_POST['ubloodgroup'];
		$pancard = $_POST['upancard'];
		$driving = $_POST['udriving'];


		$updateSQL  = "UPDATE `userdetails` SET `udistrict` = '$ditrict', `ustate` = '$state', `upincode` = '$pincode', `ubloodgroup` = '$bloodgroup', `upancard` = '$pancard', `ulicense` = '$driving' WHERE `iv` =  '$iv'";
		if(mysqli_query($conn, $updateSQL)){
				echo "<script>
					window.alert('Data added successfully');
					window.location.href='home.php';
				</script>";
		}

	}
}


?>