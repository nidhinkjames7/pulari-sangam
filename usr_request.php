<?php

session_start();
if(!isset($_SESSION['login'])){
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Loan Request Form</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>


	<div class="container-contact100">
		<div class="contact100-map" id="google_map" data-map-x="40.722047" data-map-y="-73.986422" data-pin="images/icons/map-marker.png" data-scrollwhell="0" data-draggable="1"></div>

		<div class="wrap-contact100">
<!--			<span class="contact100-form-symbol">
				<img src="img/symbol-01.png" alt="SYMBOL-MAIL">
			</span>-->

			<form action="add_request.php" method="post" class="contact100-form validate-form flex-sb flex-w">
				<span class="contact100-form-title">
					Loan Reuest Form
				</span>

				<div class="wrap-input100 rs1 validate-input">
					<input class="input100" type="text" readonly name="username" placeholder="UserName" value="<?php echo $_SESSION['login']?>" required>
					<span class="focus-input100"></span>
				</div>

				<div class="wrap-input100 rs1 validate-input">
					<input class="input100" type="text" name="subject" placeholder="Subject" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1 validate-input">
					<input class="input100" type="text" name="loan_amount" placeholder="Enter Loan Amount" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 rs1 validate-input">
					<input class="input100" type="date" name="loan_date" required>
					<span class="focus-input100"></span>
				</div>
				<div class="wrap-input100 validate-input" data-validate = "Message is required">
					<textarea class="input100" name="msg" placeholder="Write Us A Request"></textarea>
					<span class="focus-input100"></span>
				</div>
<!--
                <div class="container-contact100-form-btn">
                    <input type="button" value="Back" class="container-contact100-form-btn">
                </div>
-->
				<div class="container-contact100-form-btn">
					<input type="submit" name="loan_request" class="contact100-form-btn" value="Send">
				</div>
                
                <div class="colorlibcopy-agile">
			<p>© 2019 Pulari Deposit Form. All rights reserved | Design by <a href="secretary_dashboard.php" target="_blank">Pulari</a></p>
		</div>
			</form>
		</div>
	</div>



	<div id="dropDownSelect1"></div>

<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAKFWBqlKAGCeS1rMVoaNlwyayu0e0YRes"></script>
	<script src="js/map-custom.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-23581568-13');
	</script>
</body>
</html>
