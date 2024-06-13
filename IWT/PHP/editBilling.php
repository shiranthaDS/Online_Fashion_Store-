<?php 
  include "connection.php"; 
  $billing_id=""; 
  $fname="";
  $lname="";
  $email="";
  $mobile=""; 
  $address=""; 
  $city="";
  $state="";
  $zip_code="";
  $error=""; 
  $success=""; 
 
  if($_SERVER["REQUEST_METHOD"]=='GET'){ 
    if(!isset($_GET['billing_id'])){ 
      header("location:php/viewBillinginfo.php"); 
      exit; 
    } 
    $billing_id = $_GET['billing_id']; 
    $sql = "select * from billing_info where billing_id=$billing_id"; 
    $result = $conn->query($sql); 
    $row = $result->fetch_assoc(); 
    while(!$row){ 
      header("location:php/viewBillinginfo.php"); 
      exit; 
    } 
    $fname=$row["f_name"]; 
    $lname=$row["l_name"];
    $mobile=$row["mobile"];  
    $email=$row["email"]; 
    $address=$row["address"]; 
    $city=$row["city"]; 
    $state=$row["state"];
    $zip_code=$row["zip_code"]; 
  } 
  else{ 
    $billing_id=$_POST["billing_id"]; 
    $fname=$_POST["fname"]; 
    $lname=$_POST["lname"];
    $mobile=$_POST["mobile"];  
    $email=$_POST["email"]; 
    $address=$_POST["address"]; 
    $city=$_POST["city"];
    $state=$_POST["state"]; 
    $zip_code=$_POST["zip_code"]; 
    
    $sql = "UPDATE billing_info set f_name='$fname', l_name='$lname',mobile='$mobile', email='$email',address='$address',city='$city', state='$state' ,zip_code='$zip_code' where billing_id='$billing_id'";
    $result = $conn->query($sql);
    if ($result) {
      $success = "Data updated successfully!";
    } else {
      $error = "Error updating data: " . $conn->error;
    }
  } 
?>
<!DOCTYPE html> 
<html> 
<head> 
 <title>Edit billing detais</title> 
 <meta name="viewport" content="width=device-width, initial-scale=1"> 
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> 
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> 
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script> 
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script> 

 
</head> 
<body> 
<nav class="navbar navbar-expand-lg navbar-dark bg-dark" class="fw-bold"> 
  <div class="container-fluid"> 
    <a class="navbar-brand" href="adminindex.php">GLAMOUR</a> 
    <div class="collapse navbar-collapse" id="navbarNav"> 
      <ul class="navbar-nav"> 
        <li class="nav-item"> 
          <a class="nav-link active" aria-current="page" href="index.php">Home</a> 
        </li> 
        <li class="nav-item"> 
          <a class="nav-link" href="billing.php">Add New</a> 
        </li> 
      </ul> 
    </div> 
  </div> 
</nav> 
 <div class="col-lg-6 m-auto"> 
 <form method="post" > 
 <br><br><div class="card"> 
 <div class="card-header bg-warning"> 
 <a class="btn btn-info" href="viewBillinginfo.php">Conform Details</a><br><br>

 <h2 class="text-white text-center">  Update Billing Info </h2> 
 </div><br> 
 <input type="hidden" name="billing_id" value="<?php echo $billing_id; ?>" class="form-control"> 
 <label>First Name</label>
 <input type="text" name="fname" value="<?php echo $fname; ?>" class="form-control">
 <label>Last Name</label>
 <input type="text" name="lname" value="<?php echo $lname; ?>" class="form-control">
 <label>Mobile Number</label>
 <input type="phone" name="mobile"  value="<?php echo $mobile; ?>" class="form-control">
 <label>Email</label>
 <input type="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" value="<?php echo $email; ?>" class="form-control">
 <label>Address</label>
 <input type="text" name="address" value="<?php echo $address; ?>" class="form-control">
 <label>City</label>
 <input type="text" name="city" value="<?php echo $city; ?>" class="form-control">
 <label>State</label>
 <input type="text" name="state" value="<?php echo $state; ?>" class="form-control">
 <label>Zip Code</label>
 <input type="text" name="zip_code" value="<?php echo $zip_code; ?>" class="form-control"><br>
 
 <input type="submit" class="btn btn-info" name="submit" value="Submit"><br>
 <a class="btn btn-info" href="viewBillinginfo.php">Cancel</a><br>

 
 
 </div> 
 </form> 
 </div> 

 <style>
  body {
        background: linear-gradient(to right, #c0af61,#d8a604)}
  </style>
</body> 
</html> 
