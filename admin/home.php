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
	<title></title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="logout.php">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

	<div class="container mt-5">

<?php
	include '../inc/db.php';
	$adminuserSQL = "SELECT * FROM `userdetails` WHERE `status` = 'inactive'";
	$result = mysqli_query($conn, $adminuserSQL);

	while($row = mysqli_fetch_assoc($result)){
?>
		<div class="card" style="width: 18rem;">
		  <img src="uploads/profile/<?php echo $row['uphoto']; ?>" class="card-img-top">
		  <div class="card-body">
		    <h5 class="card-title"><?php echo $row['uname']; ?></h5>
		    <a href="userdetails.php?uid=<?php echo $row['uid']; ?>" class="btn btn-primary">Visit user</a>
		  </div>
		</div>
<?php
	}

?>
	</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>
<?php 
}else{
     header("Location: index.php");
     exit();
}
 ?>