<?php

session_start();
if(!isset($_SESSION['login'])){
    header('Location: index.php');
}

?>
<!DOCTYPE html>
<html>
<title>Secretary Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="font-awesome-4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- Plugin CSS -->
    <link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/creative.min.css" rel="stylesheet">    
    
    
<style>
    body{
        height: auto;
    }
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
    .top-nav-btn{
        color: #fff;
    }
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <a href="logout.php"><span class="w3-bar-item w3-left">PULARI</span></a>
  <a class="top-nav-btn" href="logout.php"><span class="w3-bar-item w3-right">Logout</span></a>
  <a class="top-nav-btn" id="viewBtn" href="#"><span class="w3-bar-item w3-right">View Deposit</span></a>
  <a class="top-nav-btn" id="addBtn" href="#"><span class="w3-bar-item w3-right">Add Deposit</span></a>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $_SESSION['login']?></strong></span><br>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a  href="secretary_dashboard.php" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-users fa-fw"></i>  Overview</a> 
    <a href="users.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-rupee fa-fw"></i>  Users</a>
    <a href="loan.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-money fa-fw"></i>  Loan</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div id="dashboard" class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> DEPOSIT</b></h5>
  </header>
    
    <div class="inner-content">
        <iframe id="innerSrc" frameborder="0" src="view_deposit.php" width="100%" height="550px"></iframe>
    </div>


  <!-- End page content -->
</div>

 
<script src="vendor/jquery/jquery.min.js"></script>   
<script>
    $(document).ready(function(){
        
        $('.top-nav-btn').click(function(){
            var val = $(this).attr('id');
            switch(val){
                case 'addBtn':
                    $('#innerSrc').attr('src','add_deposit.php');
                    break;
                case 'delBtn':
                    $('#innerSrc').attr('src','request_form.php');
                    break;
                case 'uptBtn':
                    $('#innerSrc').attr('src','update_loan.php');
                    break;
                case 'viewBtn':
                    $('#innerSrc').attr('src','view_deposit.php');
                    break;
            }
        });
        
    });
// Get the Sidebar
var mySidebar = document.getElementById("mySidebar");

// Get the DIV with overlay effect
var overlayBg = document.getElementById("myOverlay");

// Toggle between showing and hiding the sidebar, and add overlay effect
function w3_open() {
    if (mySidebar.style.display === 'block') {
        mySidebar.style.display = 'none';
        overlayBg.style.display = "none";
    } else {
        mySidebar.style.display = 'block';
        overlayBg.style.display = "block";
    }
}

// Close the sidebar with the close button
function w3_close() {
    mySidebar.style.display = "none";
    overlayBg.style.display = "none";
}
    
    
    


</script>

</body>
</html>
