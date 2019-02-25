<?php

session_start();
if(!isset($_SESSION['login'])){
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>View Loans</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/perfect-scrollbar/perfect-scrollbar.css">
<!--====================================================./vendor/fontawesome-free/===========================================-->
	<link rel="stylesheet" type="text/css" href="css/table_main%20(1).css">
	<link rel="stylesheet" type="text/css" href="css/table_main%20(2).css">
<!--===============================================================================================-->
    <style>
        th{
            font-weight: bold;
        }
        .tick{
            color: green;
            margin-right: 10px;
            cursor: pointer;
        }
        .cancel{
            color: red;
            cursor: pointer;
        }
    </style>
</head>
<body style="padding: 20px;">
	<div class="table-responsive">
        <table class="table table-bordered">
          <thead>
              <tr>
                <th>Loan ID</th>
                <th>Username</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Loan Amount</th>
                <th>Loan needed Date</th>
                <th>Status</th>
                <th>Interest Rate</th>
                <th>Balance Amount</th>
              </tr>
            </thead>
            <tbody>
                <?php
                    $con = mysqli_connect("localhost","root","","pulari_db");
                    $res = mysqli_query($con, "SELECT * FROM request");
                    while ($row =mysqli_fetch_array($res)){
                        echo "
                            <tr>
                                <td>".$row[0]."</td>
                                <td>".$row[2]."</td>
                                <td>".$row[3]."</td>
                                <td>".$row[6]."</td>
                                <td>".$row[4]."</td>
                                <td>".$row[5]."</td>
                                <td>".$row[9]."</td>
                                <td>".$row[10]."</td>
                                <td>".$row[11]."</td>
                            </tr>
                        ";
                    }
                ?>
              
            </tbody>
      </table>
    </div>

<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>
	<script>
		$('.js-pscroll').each(function(){
			var ps = new PerfectScrollbar(this);

			$(window).on('resize', function(){
				ps.update();
			})
		});
			
		
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>