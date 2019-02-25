<?php

    $con = mysqli_connect("localhost","root","","pulari_db") or die('Could not connect to DB!');
    session_start();
    $username= $_POST['username'];
    $password= $_POST['password']; 
    $already=mysqli_query($con,"select * from `user_details` where `username`='$username'")or die(mysqli_error($con));
    if(mysqli_num_rows($already)>0)
    echo "<script> alert('Username already exist');window.location.href='add_user.html';</script>"; 
    else
    {
        if(isset($_POST['signup'])) 
        {
            $sql = "INSERT INTO user_details(user_id,name,address,dob,gender,mobile,email,photo,username,password,status) values('','','','','','','','','$username','$password','')";
            $result = mysqli_query($con,$sql) or die(mysqli_error($con));
        }
    }
    if(!mysqli_error($con))
    {
        echo "<script> alert('User Added Successfully!!!');window.location.href='add_user.html';</script>"; 
    }
?>
