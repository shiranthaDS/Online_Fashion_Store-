<!DOCTYPE html>
<html>
	<head>
		<title>Billing Details</title>
	
			
	</head>
	<body>

		<script>
            function confirm()
            {
                alert("Order Placed sucsessfully!");

            }
        </script>
<style>
	*{
	font-family:poppins,sans-serif;
	margin:0;
	padding:0;
	box-sizing:border-box;
	outline:none;
	border:none;
	text-transform:capitalize;
	transition:all .2s linear;
	
}
.container{
	display:flex;
	justify-content:center;
	align-items:center;
	padding:25px;
	min-height:100vh;
	background-image:url('imgg1.jpg');
	padding-bottom:70px;
}
.container form{
	padding:20px;
	width:700px;
	background:#cacc41;
	box-shadow:0 5px 10px rgba(0,0,0,1);
}

.row{
	
	display:flex;
	flex-wrap:wrap;
	gap:15px;
}
.col{
	
	flex:1 1 250px; 
}

.title{
	
	font-size:20px;
	color:#333;
	padding-bottom:5px;
	text-transform:uppercase;
	
}
.inputbox{
	
	margin:15px 0;
}
.inputbox span{
	
	margin-bottom:5px;
	display:block;
}
.inputbox input{
	width:100%;
	border:1px solid #ccc;
	padding:10px 5px;
	font-size:15px;
	text-transform:none;
	
}
.inputbox input:focus{
	border:1px solid #000;
}
.flex{
	 display:flex;
	 gap:15px;
	 
 }
 
.img{
	height:34px;
	margin-top:5px;
	filter:drop-shadow(0 0 1px #000);
 }
 
 .container form .submit-btn{
	 width:100%;
	 padding:12px;
	 font-size:17px;
	 background:#27ae60;
	 color:#fff;
	 margin-top:5px;
	 cursor:pointer;
	 
 }
 
 #select{
	width:100%;
	border:1px solid #ccc;
	padding:10px 5px;
	font-size:15px;
	text-transform:none;
 }
 .input-box .credit-cards img {
    width: 65px;
    border-radius: 5px;
    border: 1px solid #000;
    cursor: pointer;
    margin-bottom: 2px;
}
</style>
	<div class="container">
	
	<form  action="submitBilling.php" method="POST">
	
	<div class="row">
		<div class="col">
		
			<h3 class="title">billing address</h3>
		
	
			<div class="inputbox">
				<span>first name :</span>
				<input type='text' name='info1' placeholder="Nimal"  required>
			</div>
			<div class="inputbox">			
				<span>last name :</span>
				<input type='text' name='info2' placeholder="Perera"  required>
			</div>
			<div class="inputbox">	
				<span>mobile number :</span>
				<input type='phone' name='info3' placeholder="07-"  required>
			</div>
			<div class="inputbox">	
				<span>e-mail :</span>
				<input type='email' name='info4' placeholder="abc@gmail.com"  required>
			</div>
			<div class="inputbox">
				<span>address :</span>
				<input type='text' name='info5' placeholder="street-Lane" required>
			</div>
			<div class="inputbox">
				<span>city :</span>
				<input type='text' name='info6' placeholder="Malabe" required>
			</div>
			<div class="flex">
				<div class="inputbox">
					<span>state :</span>
					<input type='text' name='info7' placeholder="colombo" required>	
				</div>
				<div class="inputbox">
					<span>zip code :</span>
					<input type='text' name='info8' placeholder="165687" required>	
				</div>
			</div>
		</div>
		
		<div class="col">
		
			<h3 class="title">payment</h3>
			<div class="input-box">
				<span>cards accepted :</span>
				<div class="credit-cards">
					<img src="1.jpg" >
					<img src="2.jpg" >
					<img src="3.jpg" >
					<img src="4.jpg" >
				</div>
			</div>
			<div class="inputbox">			
				<span>name on card :</span>
				<input type='text' name='cardname' placeholder="S.N.Perera"  required>
			</div>
			<div class="inputbox">	
				<span>credit card number :</span>
				<input type='number' name='cardno' placeholder="1111-2222-3333-4444"  required>
			</div>
			<div class="inputbox">	
				<span>exp month :</span>
				<input type='text' name='expmon' placeholder="xx" required>
			</div>
			
			<div class="flex">
				<div class="inputbox">
					<span>exp year :</span>
					<input type='number' name='expyear' placeholder="xxxx" required>	
				</div>
				<div class="inputbox">
					<span>CVV :</span>
					<input type='text' name='cvv' placeholder="xxx" required>	
				</div>
			</div>
		</div>
	</div>
	
	<input type="submit" value="proceed to checkout" class="submit-btn"  >
	</form>

</div>

</body>
</html>