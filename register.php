<?php
include "inc/db.php";

function str_openssl_enc($str,$iv){
	$key='1234567890piyush%$%^%$$#$#';
	$chiper="AES-128-CTR";
	$options=0;
	$str=openssl_encrypt($str,$chiper,$key,$options,$iv);
	return $str;
}

if (isset($_POST['register'])) {
	
	$iv=openssl_random_pseudo_bytes(16);


	$uname = mysqli_real_escape_string($conn,$_POST['username']);
	$uemail = mysqli_real_escape_string($conn,$_POST['email']);
	$uphone = mysqli_real_escape_string($conn,$_POST['phone']);
	$udob = mysqli_real_escape_string($conn,$_POST['dob']);
	$ugender = mysqli_real_escape_string($conn,$_POST['gender']);
	$uaddress = mysqli_real_escape_string($conn,$_POST['address']);
	$umartial = mysqli_real_escape_string($conn,$_POST['mstatus']);
	$uemployment = mysqli_real_escape_string($conn,$_POST['employment']);
	$upass = mysqli_real_escape_string($conn,$_POST['password']);
	// $uadharnum = mysqli_real_escape_string($conn,$_POST['aadharnumber']);

	$name=str_openssl_enc($uname,$iv);
	$email=str_openssl_enc($uemail,$iv);
	$phone=str_openssl_enc($uphone,$iv);
	$dob=str_openssl_enc($udob,$iv);
	$gender=str_openssl_enc($ugender,$iv);
	$address=str_openssl_enc($uaddress,$iv);
	$martial=str_openssl_enc($umartial,$iv);
	$employment=str_openssl_enc($uemployment,$iv);
	$pass=str_openssl_enc($upass,$iv);
	// $adharnum=str_openssl_enc($uadharnum,$iv);

	$iv=bin2hex($iv);

	// $uname = $_POST['username'];
	// $uemail = $_POST['email'];
	// $uphone = $_POST['phone'];
	// $udob = $_POST['dob'];
	// $ugender = $_POST['gender'];
	// $uaddress = $_POST['address'];
	// $umartial = $_POST['mstatus'];
	// $uemployment = $_POST['employment'];
	// $upass = $_POST['password'];
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


		$str=rand();
		$medicid = sha1($str);

		$adduserSQL = "INSERT INTO `userdetails`(`uid`, `uname`, `uemail`, `uphone`, `udob`, `ugender`, `uaddress`, `udistrict`, `ustate`, `upincode`, `ubloodgroup`, `uemployment`, `uphoto`, `usign`, `uidproof`, `upass`, `uadhar`, `upancard`, `ulicense`, `ustatus`, `umartial`, `ulanguage`, `uhospitalname`, `uinsurance`, `uinformation`, `udeceases`, `aadharnum`, `status`, `medicid`, `iv`) VALUES ('','$name','$email','$phone','$dob','$gender','$address','','','','','$employment','','','','$pass','','','','','','','','','','','$uadharnum','inactive', '$medicid', '$iv')";

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