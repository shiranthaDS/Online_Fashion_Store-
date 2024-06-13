<?php 
    include "connection.php"; 
    if(isset($_GET['billing_id'])){ 
        $billing_id =$_GET['billing_id']; 
        $sql = "delete from billing_info where billing_id=$billing_id"; 
        $conn->query($sql); 
    } 
    header('location:../php/viewBillinginfo.php'); 
    exit; 
?>