<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

<title>Billing Info</title> 
<style>
    
    .center-container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; 
    }

    
    .footer {
        position: fixed;
        bottom: 0;
        left: 0;
        width: 100%;
        background-color: #f8f9fa;
        padding: 20px 0;
        text-align: center;
       
    }
    body {
      background: linear-gradient(to right, #c0af61,#d8a604);
    }
    table tbody {
        background-color: #f8f9fa; 
    }
</style>
</head>

<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="adminindex.php">BILLING INFO</a>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="g_home.php">Home</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container my-4">
    <table class="table">
        <thead>
            <tr>
                <th>Billing ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Mobile</th>
                <th>Email</th>
                <th>Address</th>
                <th>City</th>
                <th>State</th>
                <th>Zip Code</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include "connection.php";
            $sql = "select billing_id,f_name,l_name,mobile,email,address,city,state,zip_code from billing_info";
            $result = $conn->query($sql);
            if(!$result){
                die("Invalid query!");
            }
            while($row=$result->fetch_assoc()){
                echo "
                <tr>
                    <th>$row[billing_id]</th>
                    <td>$row[f_name]</td>
                    <td>$row[l_name]</td>
                    <td>$row[mobile]</td>
                    <td>$row[email]</td>
                    <td>$row[address]</td>
                    <td>$row[city]</td>
                    <td>$row[state]</td>
                    <td>$row[zip_code]</td>
                    <td>
                        <a class='btn btn-success' href='editBilling.php?billing_id=$row[billing_id]'>Edit</a>
                        <a class='btn btn-danger' href='deletebilling.php?billing_id=$row[billing_id]'>Cancel Order</a>
                    </td>
                </tr>
                ";
            }
            ?>
        </tbody>
    </table>
</div>


<div class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a type="button" class="btn btn-primary" href="billing.php">Add New Card</a>
            </div>
            <div class="col-md-6">
                <a type="button" class="btn btn-primary" onclick="showConfirmation()">Place Order</a>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
<script>
    function showConfirmation() {
        
        var confirmation = confirm("Your order has been confirmed. Click OK to go to the homepage.");
        
        
        if (confirmation) {
            window.location.href = "g_home.php"; 
        }
    }
</script>

</body>
</html>
