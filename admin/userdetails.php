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

<?php
    include '../inc/db.php';
    $uid = $_GET['uid'];
    $userdetailsPHP = "SELECT * FROM `userdetails` WHERE `uid` = '$uid'";
    $result = mysqli_query($conn, $userdetailsPHP);
    while($row = mysqli_fetch_assoc($result)){
?>
<form method="post" action="userverified.php">
    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="mt-5" width="150px" src="uploads/profile/<?php echo $row['uphoto']; ?>"></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">Profile</h4>
                    </div>
                    <h5>Personal Details</h5>
                    <div class="row">
                        <div class="col-md-12"><label class="labels">Full name (As per on aadhar)</label><input type="text" class="form-control" placeholder="Full Names" value="<?php echo $row['uname']; ?>" disabled></div>   
                    </div>

                        <div class="col-md-12 mt-3"><label class="labels">Email</label><input type="email" class="form-control" placeholder="enter email" value="<?php echo $row['uemail']; ?>" disabled></div>
                        <div class="col-md-12  mt-3"><label class="labels">Mobile Number</label><input type="phone" class="form-control" placeholder="enter phone number " value="<?php echo $row['uphone']; ?>" disabled></div>
                        <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Date of birth</label><input type="date" class="form-control" value="<?php echo $row['udob']; ?>" disabled></div>
                            <div class="col-md-6"><label class="labels">Gender</label><input type="text" class="form-control" value="<?php echo $row['ugender']; ?>" disabled></div>
                        </div>
                        <div class="col-md-12  mt-3"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address " value="<?php echo $row['uaddress']; ?>" disabled></div>
                    <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="submit" name="saveprofile">User verified</button></div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center experience"><span>Documents</span></div><br>
                    <div class="col-md-12"><label class="labels">Aadharcard number</label><input type="text" class="form-control" placeholder="experience" value="<?php echo $row['aadharnum']; ?>" disabled></div> <br>
                    <div class="col-md-12"><label class="labels">Load aadhar card</label><img width="300px" src="uploads/aadhar/<?php echo $row['uadhar'];?>"></div>
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