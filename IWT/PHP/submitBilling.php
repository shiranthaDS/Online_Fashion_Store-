<?php
	/*include_once'config.php';*/
?>

<?php
	require 'connection.php';
	$fname=$_POST["info1"];
	$lname=$_POST["info2"];
	$mob=$_POST["info3"];
	$eml=$_POST["info4"];
	$add=$_POST["info5"];
    $cit=$_POST["info6"];
    $sat=$_POST["info7"];
    $zcode=$_POST["info8"];
	$cname=$_POST["cardname"];
	$cnumber=$_POST["cardno"];
    $expm=$_POST["expmon"];
	$expy=$_POST["expyear"];
	$cvv=$_POST["cvv"];
	
	
$sql ="INSERT into billing_info(f_name,l_name,mobile,email,address,city,state,zip_code,c_name,c_number,exp_m,exp_y,cvv) VALUES
('$fname','$lname','$mob','$eml','$add','$cit','$sat','$zcode','$cname','$cnumber','$expm','$expy','$cvv')";

//execute the query
if(mysqli_query($conn,$sql)){
	
	echo "<script>alert('Click OK for View billing Details')</script>";
	echo "<script>window.location.href = 'viewBillinginfo.php';</script>";
}
else{
	echo "<script>alert('error in insertion')</script>";
}
mysqli_close($conn);


?>