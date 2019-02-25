<?php

session_start();
if(!isset($_SESSION['login'])){
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
<head>
<title>Pulari Deposit</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
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
		<h1>Update Loan Details</h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form method="post" autocomplete="on" id='updForm'>
					<input class="text" type="text" id='usrname' name="username" placeholder="Enter Username" required="">
					<input class="text" type="text" id='mainamt' name="amount" placeholder="Priinciple amount" required="">

					<div class="wthree-text">
						<div class="clear"> </div>
					</div>
					<input type="submit" name="make_payment" id='payBtn' value="Make Payment!">
				</form>
			</div>
		</div>
	</div>
	<!-- //main -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script>
        
        $('document').ready(function(){
//            alert();
            $('#payBtn').click(function(){
//                alert();
                $.ajax({
                    url: 'action_loan.php?act=3&&user='+$('#usrname').val()+'&&amt='+$('#mainamt').val(),
                    type: 'get',
                    success: function(data){
                        alert(data);
                        window.location.reload();
                    }
                });
//                alert($(this).attr('id'));
            });
        });
        
    </script>
</body>
</html>