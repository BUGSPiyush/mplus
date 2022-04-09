<?php 
session_start();
if (isset($_POST['name'])) {
	if (empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['udob']) || empty($_POST['ugender']) || empty($_POST['uaddress']) || empty($_POST['udistrict']) || empty($_POST['ustate']) || empty($_POST['upincode']) || empty($_POST['ubloodgroup'])|| empty($_POST['uemployment']) || empty($_POST['uphoto']) || empty($_POST['usign']) || empty($_POST['uidproof']) ||  empty($_POST['upass']) || empty($_POST['uadhar']) || empty($_POST['upancard']) || empty($_POST['ulicense'])|| empty($_POST['ustatus'])|| empty($_POST['umartial'])|| empty($_POST['ulanguage'])|| empty($_POST['uhospitalname'])|| empty($_POST['uinformation'])|| empty($_POST['udeceases'])) {
		$_SESSION['details'] = "All the field required";
		header("Location: for");
	} else if (!filter_var($_POST['uemail'],FILTER_VALIDATE_EMAIL)){
		$_SESSION['details'] = "Enter your valid email address";
		header("Location: register.php");
	}else {
		$conn = mysqli_connect("localhost","root","","userdetails");
		$uname = $_POST['uname'];
		$uemail = $_POST['uemail'];
		$uphone = $_POST['uphone'];
		$udob = $_POST['udob'];
		$ugender = $_POST['ugender'];
		$uaddress = $_POST['uaddress'];
		$udistrict = $_POST['udistrict'];
		$ustate = $_POST['ustate'];
		$upincode = $_POST['upincode'];
		$ubloodgroup = $_POST['ubloodgroup'];
		$uemployment = $_POST['uemployment'];
		$uphoto = $_POST['uphoto'];
		$usign = $_POST['usign'];
		$uidproof = $_POST['uidproof'];
		$upass = $_POST['upass'];
		$uadhar = $_POST['uadhar'];
		$upancard = $_POST['upancard'];
		$ulicense = $_POST['ulicense'];
		$ustatus = $_POST['ustatus'];
		$umartial = $_POST['umartial'];
		$ulanguage = $_POST['ulanguage'];
		$uhospitalname = $_POST['uhospitalname'];
		$uinsurance = $_POST['uinsurance'];
		$uinformation = $_POST['uinformation'];
		$udeceases = $_POST['udeceases'];
		$is_done = $conn->query("INSERT INTO `userdetails`(`uname`, `uemail`, `uphone`, `uaddress`, `udob`, `ugender`,`uaddress`, `udistrict`, `ustate`,`upincode`, `ubloodgroup`, `uemployment`, `uphoto`, `usign`, `uidproof`, `upass`, `uadhar`, `upancard`, `ulicense`, `ustatus`, `umartial`, `ulanguage`, `uhospitalname`, `uinsurance`, `uinformation`, `udeceases`) VALUES (`$uname`, `$uemail`, `$uphone`,, `$udob`, `$ugender`,  `$uaddress`, `$udistrict`, `$ustate`,`$upincode`, `$ubloodgroup`,`$uemployment`, `$uphoto`, `$usign`, `$uidproof`, `$upass`,  `$uadhar`, `$upancard`, `$ulicense`, `$ustatus`, `$umartial`, `$ucountry`, `$ulanguage`, `$uhospitalname`, `$uinsurance`, `$uinformation`, `$udeceases`)");
		if ($is_done == TRUE) {
			$_SESSION['details'] = "Thank you for contacting us!";
			header("Location: register.php");
		}
	}
	
}
?>