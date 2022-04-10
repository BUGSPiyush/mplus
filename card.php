<?php
session_start();
include 'inc/db.php';
function str_openssl_dec($str,$iv){
    $key='1234567890piyush%$%^%$$#$#';
    $chiper="AES-128-CTR";
    $options=0;
    $str=openssl_decrypt($str,$chiper,$key,$options,$iv);
    return $str;
}


$uid = $_SESSION['uid'];
$res = mysqli_query($conn, "SELECT * FROM `userdetails` WHERE `uid` = $uid");

if($row=mysqli_fetch_assoc($res)){
    $iv=hex2bin($row['iv']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>CSS User Profile Card</title>
	<link rel="stylesheet" href="css/card.css">
	<script src="https://kit.fontawesome.com/b99e675b6e.js"></script>
</head>
<body>

<div class="wrapper">
    <div class="left">
        <img src="admin/uploads/profile/<?php echo $row['uphoto']; ?>" 
        alt="user" height="130px" width="100px">
        <img src="uploads/qr/<?php echo $row['medicid']; ?>.png" 
        alt="qr" width="100">
         
    </div>
    <div class="right">
        <div class="info">
            <h3>Medic</h3>
            <div class="info_data">
                <div class="data">
                    <h4>Name</h4>
                    <p><?php echo str_openssl_dec($row['uname'],$iv); ?></p>
                </div>
            </div>
        </div>
      <div>
        <div class="data">
           <h4>Phone</h4>
            <p><?php echo str_openssl_dec($row['uphone'],$iv); ?></p>
        </div>

                 <div class="data">
                    <h4>Address</h4>
                    <p><?php echo str_openssl_dec($row['uaddress'],$iv); ?></p>
             </div>

            <div>

           <div class="info_data">
                 <div class="data">
                    <h4>BloodGroup</h4>
                    <p><?php echo $row['ubloodgroup']; ?></p>
                 </div>

        </div>
     
        
    </div>
</body>
</html>
<?php
}
?>