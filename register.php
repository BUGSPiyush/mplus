<?php
include "inc/db.php";

if (isset($_POST['register'])) {
	

	$uname = $_POST['username'];
	$uemail = $_POST['email'];
	$uphone = $_POST['phone'];
	$udob = $_POST['dob'];
	$ugender = $_POST['gender'];
	$uaddress = $_POST['address'];
	$umartial = $_POST['mstatus'];
	$uemployment = $_POST['employment'];
	$upass = $_POST['password'];
	$uadharnum = $_POST['aadharnumber'];

	$checkRedudantSQL = "SELECT * FROM `userdetails` WHERE `uemail` = '$uemail' OR `uphone` = '$uphone' OR `aadharnum` = '$uadharnum'";
	$checkRedudantRESULT = mysqli_query($conn, $checkRedudantSQL);

	if (empty($uname) || empty($uemail) || empty($uphone) || empty($udob) || empty($ugender) || empty($uaddress) || empty($umartial) || empty($uemployment) || empty($uemployment) || empty($upass) || empty($uadharnum)) {
		echo "<script>
			window.alert('All feilds are required');
			window.location.href='index.php';
		</script>";
	} elseif(mysqli_num_rows($checkRedudantRESULT) != 0){
		echo "<script>
			window.alert('Data has allready been registered!');
			window.location.href='index.php';
		</script>";
	}

	 else {
		$adduserSQL = "INSERT INTO `userdetails`(`uid`, `uname`, `uemail`, `uphone`, `udob`, `ugender`, `uaddress`, `udistrict`, `ustate`, `upincode`, `ubloodgroup`, `uemployment`, `uphoto`, `usign`, `uidproof`, `upass`, `uadhar`, `upancard`, `ulicense`, `ustatus`, `umartial`, `ulanguage`, `uhospitalname`, `uinsurance`, `uinformation`, `udeceases`, `aadharnum`, `status`) VALUES ('','$uname','$uemail','$uphone','$udob','$ugender','$uaddress','','','','','$uemployment','','','','$upass','','','','','','','','','','','$uadharnum','inactive')";

		if(mysqli_query($conn, $adduserSQL)){
			echo "<script>
				window.alert('User added');
				window.alert('once data is been verified by admin you will recive an email with further steps');
				window.location.href='index.php';
			</script>";
		}
	}




}

?>