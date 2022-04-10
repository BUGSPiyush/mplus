<?php
session_start();
include 'inc/db.php';
include 'phpqrcode/qrlib.php';

$uid = $_SESSION['uid'];
	$res = mysqli_query($conn,"SELECT * FROM `userdetails` WHERE `uid` = '$uid'");
	if($row=mysqli_fetch_assoc($res)){
		$medicid = $row['medicid'];
		$text = "http://mplus.ml/medicapi.php?uid=".$medicid;
	}

$path = 'uploads/qr/';
$file = $path.$medicid.".png";
$ecc = 'L';
$pixel_Size = 10;
QRcode::png($text, $file, $ecc, $pixel_Size);
     header("Location: card.php");
?>
