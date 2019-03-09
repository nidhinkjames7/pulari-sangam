<?php

    $con = mysqli_connect("localhost","root","","pulari_db") or die('Could not connect to DB!');
    session_start();
    $username= $_POST['username'];
    $amount= $_POST['amount']; 
    $sub_date= $_POST['sub_date'];
    $name= $_POST['name'];
        if(isset($_POST['add_subscription'])) 
        {
            $sql = "INSERT INTO subscription(sub_id,username,amount,sub_date,name) values(NULL,'".$username."','".$amount."','".$sub_date."','".$name."')";
            $result = mysqli_query($con,$sql) or die(mysqli_error($con));
        }
    if(!mysqli_error($con))
    {
        echo "<script> alert('Deposit Added Successfully!!!');window.location.href='add_deposit.html';</script>"; 
    }
?>












<!DOCTYPE html>
<html>
<head>
<title>Pulari Subscription</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/add_user_form.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Subscription Form</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="add_deposit.php" method="post" autocomplete="on">
					<input class="text" type="text" name="name" placeholder="Enter Name" required="">
					<input class="text" type="text" name="username" placeholder="Enter Username" required="">
					<input class="text" type="text" name="amount" placeholder="Enter Amount" required="">
                    <label name="date" value="Date"><input class="text" type="date" name="sub_date" required=""></label>

					<div class="wthree-text">
						<div class="clear"> </div>
					</div>
					<input type="submit" name="add_subscription" value="ADD SUBSCRIPTION">
				</form>
			</div>
		</div>
		<!-- copyright -->
		<div class="colorlibcopy-agile">
			<p>© 2019 Pulari Deposit Form. All rights reserved | Design by <a href="http://localhost:81/pulari-sangam/deposit.html" target="_blank">Pulari</a></p>
		</div>
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>