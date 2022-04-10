<?php 
session_start();

$session = isset($_SESSION['uid']);
if ($session) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="genratecard.php">Genrate MEDIC CARD</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

<?php
    include 'inc/db.php';
    $uid = $_SESSION['uid'];
    $userdetailsPHP = "SELECT * FROM `userdetails` WHERE `uid` = '$uid'";
    $result = mysqli_query($conn, $userdetailsPHP);

    function str_openssl_dec($str,$iv){
    $key='1234567890piyush%$%^%$$#$#';
    $chiper="AES-128-CTR";
    $options=0;
    $str=openssl_decrypt($str,$chiper,$key,$options,$iv);
    return $str;
}

    while($row = mysqli_fetch_assoc($result)){
        $iv=hex2bin($row['iv']);
?>
<form method="post" action="saveprofile.php">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="mt-5" width="150px" src="admin/uploads/profile/<?php echo $row['uphoto']; ?>"></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile</h4>
                    </div>
                    <h5>Personal Details</h5>
                    <div class="row">
                        <div class="col-md-12"><label class="labels">Full name (As per on aadhar)</label><input name="uname" type="text" class="form-control" placeholder="Full Names" value="<?php echo str_openssl_dec($row['uname'],$iv); ?>" disabled></div>   
                    </div>

                        <div class="col-md-12 mt-3"><label class="labels">Email</label><input name="uemail" type="email" class="form-control" placeholder="enter email" value="<?php echo str_openssl_dec($row['uemail'],$iv); ?>" disabled></div>
                        <div class="col-md-12  mt-3"><label class="labels">Mobile Number</label><input name="uphone" type="phone" class="form-control" placeholder="enter phone number " value="<?php echo str_openssl_dec($row['uphone'],$iv); ?>" disabled></div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Date of birth</label><input name="udob" type="date" class="form-control" value="<?php echo str_openssl_dec($row['udob'],$iv); ?>" disabled></div>
                            <div class="col-md-6"><label class="labels">Gender</label><input name="ugender" type="text" class="form-control" value="<?php echo str_openssl_dec($row['ugender'],$iv); ?>" disabled></div>
                        </div>
                        <div class="col-md-12  mt-3"><label class="labels">Address</label><input name="uaddress" type="text" class="form-control" placeholder="enter address " value="<?php echo str_openssl_dec($row['uaddress'],$iv); ?>" disabled></div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">District</label><input name="uditrict" type="text" class="form-control" placeholder="enter district" value="<?php echo $row['udistrict']; ?>"></div>
                            <div class="col-md-6"><label class="labels">State</label><input name="ustate" type="text" class="form-control" placeholder="enter state" value="<?php echo $row['ustate']; ?>"></div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Pincode</label><input name="upincode" type="number" class="form-control" placeholder="enter pincode" value="<?php echo $row['upincode']; ?>"></div>
                            <div class="col-md-6"><label class="labels">Blood Group</label><input name="ubloodgroup" type="text" class="form-control" placeholder="enter blood group" value="<?php echo $row['ubloodgroup']; ?>"></div>
                        </div>

                        <h5 class="mt-5">Documents</h5>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Pancard Number</label><input name="upancard" type="text" class="form-control" placeholder="enter pancard number" value="<?php echo $row['upancard']; ?>"></div>
                            <div class="col-md-6"><label class="labels">Driving Licence Number</label><input name="udriving" type="text" class="form-control" placeholder="enter Driving Licence Number" value="<?php echo $row['ulicense']; ?>"></div>
                        </div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="saveprofile">Save Profile</button></div>
                </div>
            </div>
        </div>
    </div>
</form>
<?php } ?>
</div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>