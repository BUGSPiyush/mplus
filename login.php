<?php
include "inc/db.php";
session_start(); 


function str_openssl_dec($str,$iv){
	$key='1234567890piyush%$%^%$$#$#';
	$chiper="AES-128-CTR";
	$options=0;
	$str=openssl_decrypt($str,$chiper,$key,$options,$iv);
	return $str;
}


if (isset($_POST['signin'])) {
	$uid = $_POST['uid'];

	$res = mysqli_query($conn,"SELECT * FROM `userdetails` WHERE `aadharnum` = '$uid' OR `upancard` = '$uid'  OR `ulicense` = '$uid'");

	if($row=mysqli_fetch_assoc($res)){
		$iv=hex2bin($row['iv']);
		$pass=str_openssl_dec($row['upass'],$iv);
	}

	$loginsql = "SELECT * FROM `userdetails` WHERE `aadharnum` = '$uid' OR `upancard` = '$uid'  OR `ulicense` = '$uid' AND `upass` = '$pass' ";

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
			window.alert('user not found or invalid credentials');
			window.location.href='index.php';
		</script>";
	}
}

?>