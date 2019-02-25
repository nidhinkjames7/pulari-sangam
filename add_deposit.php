<?php

    $con = mysqli_connect("localhost","root","","pulari_db") or die('Could not connect to DB!');
    session_start();
    $username= $_POST['username'];
    $amount= $_POST['amount']; 
    $deposit_date= $_POST['deposit_date'];
    $name= $_POST['name'];
        if(isset($_POST['add_deposit'])) 
        {
            $sql = "INSERT INTO deposit(deposit_id,username,amount,deposit_date,user_id,name) values(NULL,'".$username."','".$amount."','".$deposit_date."','','".$name."')";
            $result = mysqli_query($con,$sql) or die(mysqli_error($con));
        }
    if(!mysqli_error($con))
    {
        echo "<script> alert('Deposit Added Successfully!!!');window.location.href='add_deposit.html';</script>"; 
    }
?>
