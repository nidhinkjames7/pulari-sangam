<?php


    $con = mysqli_connect("localhost","root","","pulari_db") or die('Could not connect to DB!');
    
//    $db=mysqli_select_db('pulari_db',$con) or die('Could not connect to DB!');
    session_start();

    $username= $_POST['username'];
    $password= $_POST['password']; 
    $sql = "SELECT * FROM user_details WHERE username = '".$username."' and password = '".$password."'";
    $result = mysqli_query($con,$sql);

    $row = mysqli_fetch_array($result);
    $usr_type = $row['status'];
    $count = mysqli_num_rows($result);
    if($count == 1) 
    {
        $_SESSION['login'] = $username;
        if($username == 'akhil')
        {
            header("location: secretary_dashboard.php");
        }
        else if($usr_type  == 'USER')
        {
            header("location: user_dashboard.php");
        }
        else if($usr_type == 'PRESIDENT')
        {
            header("location:president_dashboard.php");
        }
        else
        {
            header("location:treasurer_dashboard.php");
        }
    }
    else
             header("location:index.php");
?>
<script>
    alert("invalid username or password");
</script>  
<?php
   
?>
