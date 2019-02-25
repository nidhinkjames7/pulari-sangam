<?php

    $con = mysqli_connect("localhost","root","","pulari_db") or die('Could not connect to DB!');
    session_start();
    $username= $_POST['username'];
    $loan_amount= $_POST['loan_amount']; 
    $loan_date= $_POST['loan_date'];
    $subject= $_POST['subject'];
    $msg= $_POST['msg'];
//    echo "Date: ".$loan_date;
        if(isset($_POST['loan_request']) && 'username'== akhil) 
        {
            $row = mysqli_fetch_array(mysqli_query($con,'SELECT * FROM user_details WHERE username='.$username));
            $sql = "INSERT INTO request values (NULL,'".$row[0]."','".$username."','".$subject."','".$loan_amount."','".$loan_date."','".$msg."','','','PENDING','','')";
            $result = mysqli_query($con,$sql) or die(mysqli_error($con));
            header('Location: secretary_dashboard.php');
        }
        else
        {
            $row = mysqli_fetch_array(mysqli_query($con,'SELECT * FROM user_details WHERE username='.$username));
            $sql = "INSERT INTO request values (NULL,'".$row[0]."','".$username."','".$subject."','".$loan_amount."','".$loan_date."','".$msg."','','','PENDING','','')";
            $result = mysqli_query($con,$sql) or die(mysqli_error($con));
            header('Location: user_dashboard.php');
        }
        

    /*if(!mysqli_error($con))
    {
        echo "<script> alert('Loan Request Send Successfully!!!');window.location.href='secretary_dashboard.php';</script>"; 
    }*/
?>
