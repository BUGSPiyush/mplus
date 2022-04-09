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
<div class="container rounded bg-white mt-5 mb-5">
    <div class="row">
        <div class="col-md-3 border-right">
            <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="mt-5" width="150px" src="https://www.static-contents.youth4work.com/y4w/577718b1-0275-4fe5-8532-64c5ba1c6bd2.png"><span class="font-weight-bold">User name</span><span> </span></div>
        </div>
        <div class="col-md-5 border-right">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h4 class="text-right">Profile</h4>
                </div>
                <h5>Personal Details</h5>
                <div class="row">
                    <div class="col-md-12"><label class="labels">Full name (As per on aadhar)</label><input type="text" class="form-control" placeholder="Full Names"></div>
                </div>

                    <div class="col-md-12 mt-3"><label class="labels">Email</label><input type="email" class="form-control" placeholder="enter email" value=""></div>
                    <div class="col-md-12  mt-3"><label class="labels">Mobile Number</label><input type="phone" class="form-control" placeholder="enter phone number " value=""></div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Date of birth</label><input type="date" class="form-control"></div>
                        <div class="col-md-6"><label class="labels">Gender</label>
                            <div class="col-md-6" style="width:200px;">
                              <select>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                                <option value="3">Other</option>
                              </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12  mt-3"><label class="labels">Address</label><input type="text" class="form-control" placeholder="enter address " value=""></div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">District</label><input type="text" class="form-control" placeholder="enter district" value=""></div>
                        <div class="col-md-6"><label class="labels">State</label><input type="text" class="form-control" placeholder="enter state" value=""></div>
                    </div>

                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Pincode</label><input type="number" class="form-control" placeholder="enter pincode" value=""></div>
                        <div class="col-md-6"><label class="labels">Blood Group</label><input type="text" class="form-control" placeholder="enter blood group" value=""></div>
                    </div>

                    <h5 class="mt-5">Documents</h5>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">Pancard Number</label><input type="text" class="form-control" placeholder="enter pancard number" value=""></div>
                        <div class="col-md-6"><label class="labels">Driving Licence Number</label><input type="text" class="form-control" placeholder="enter Driving Licence Number" value=""></div>
                    </div>
                <div class="mt-5 text-center"><button class="btn btn-primary profile-button" type="button">Save Profile</button></div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="p-3 py-5">
                <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text" class="form-control" placeholder="experience" value=""></div> <br>
                <div class="col-md-12"><label class="labels">Additional Details</label><input type="text" class="form-control" placeholder="additional details" value=""></div>
            </div>
        </div>
    </div>
</div>
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