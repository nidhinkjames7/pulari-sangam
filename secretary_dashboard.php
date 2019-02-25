<?php

session_start();
if(!isset($_SESSION['login'])){
    header('Location: index.php');
}

?>

<?php
    $con = mysqli_connect("localhost","root","","pulari_db");
    $res = mysqli_query($con, "SELECT SUM(amount) FROM deposit");
    $deposit = mysqli_fetch_array($res);
    $res1 = mysqli_query($con, "SELECT SUM(loan_amount) FROM loan");
    $loan = mysqli_fetch_array($res1);
    $req = mysqli_fetch_array(mysqli_query($con,'SELECT COUNT(*) FROM request WHERE status="PENDING"'));
    if($loan[0] == null) $loan[0]=0;
    $balance = $deposit[0] - $loan[0];
?>
<!DOCTYPE html>
<html>
<title>Secretary Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
html,body,h1,h2,h3,h4,h5 {font-family: "Raleway", sans-serif}
</style>
<body class="w3-light-grey">

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="w3_open();"><i class="fa fa-bars"></i>  Menu</button>
  <a href="index.php"><span class="w3-bar-item w3-left">PULARI</span></a>
    <a class="top-nav-btn" href="logout.php"><span class="w3-bar-item w3-right">Logout</span></a>
</div>

<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo $_SESSION['login']?></strong></span><br>
      <a href="profile.php" id="profileBtn" class="w3-bar-item w3-button"><i class="fa fa-user"></i></a>
      <a href="#" class="w3-bar-item w3-button"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="w3_close()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="users.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-circle fa-fw"></i>  Users</a>
    <a href="deposit.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-rupee fa-fw"></i>  Deposit</a>
    <a href="loan.php" class="w3-bar-item w3-button w3-padding"><i class="fa fa-money fa-fw"></i>  Loan</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="w3_close()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>

<!-- !PAGE CONTENT! -->
<div id="dashboard" class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> OVERVIEW</b></h5>
  </header>

  <div class="w3-row-padding w3-margin-bottom">
    <div class="w3-quarter">
      <div class="w3-container w3-red w3-padding-16">
        <div class="w3-left"><i class="fa fa-comment w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3><?php echo $req[0]; ?></h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Requests</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-blue w3-padding-16">
        <div class="w3-left"><i class="fa fa-eye w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>Rs: <?php echo $deposit[0]; ?>/-</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Deposit</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-teal w3-padding-16">
        <div class="w3-left"><i class="fa fa-share-alt w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>Rs: <?php echo $loan[0]; ?>/-</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Loans</h4>
      </div>
    </div>
    <div class="w3-quarter">
      <div class="w3-container w3-orange w3-text-white w3-padding-16">
        <div class="w3-left"><i class="fa fa-users w3-xxxlarge"></i></div>
        <div class="w3-right">
          <h3>Rs: <?php echo $balance; ?>/-</h3>
        </div>
        <div class="w3-clear"></div>
        <h4>Balance</h4>
      </div>
    </div>
  </div>

  <!-- End page content -->
</div>

<script src="vendor/jquery/jquery.min.js"></script>   
<script>
    $(document).ready(function(){
        
        $('.top-nav-btn').click(function(){
            var val = $(this).attr('id');
            switch(val){
                case 'profileBtn':
                    $('#innerSrc').attr('src','add_loan.html');
                    break;
                case 'delBtn':
                    $('#innerSrc').attr('src','request_form.html');
                    break;
                case 'uptBtn':
                    $('#innerSrc').attr('src','update_loan.html');
                    break;
                case 'viewBtn':
                    $('#innerSrc').attr('src','view_loan.php');
                    break;
            }
        });
        
    });
    
    
<script>
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
