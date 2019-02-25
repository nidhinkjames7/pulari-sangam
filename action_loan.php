<?php

$con = mysqli_connect("localhost","root","","pulari_db");
if($_GET['act']=='1'){    
    $date = date('Y-m-d');
    $due = date('Y-m-d',strtotime('+30 days'));
    
    $row = mysqli_fetch_array(mysqli_query($con,'SELECT * FROM request WHERE request_id='.$_GET['id']));
    $intRate = ($row[4] * 3)/ 100;
    $bal = $row[4];
    if($res = mysqli_query($con,"UPDATE request SET status='APPROVED',loan_sanction_date='".$date."',due_date='".$due."',
    loan_balance='".$bal."',interest_rate='".$intRate."' WHERE request_id=".$_GET['id']))
        echo "Action performed Successfully!";
    else
        echo "Error Occured!";
}
else if($_GET['act']=='2'){
    if($res = mysqli_query($con,"UPDATE request SET status='CANCELLED' WHERE request_id=".$_GET['id']))
        echo "Action performed Successfully!";
    else
        echo "Error Occured!";    
}
else if($_GET['act']=='3'){
    
    if($_GET['amt'] == null){
        $_GET['amt'] = 0;
    };
    
    $res = mysqli_query($con,"SELECT * FROM request WHERE status='APPROVED' AND username='".$_GET['user']."'");
    if(mysqli_num_rows($res) > 0){
        
        $row = mysqli_fetch_array($res);
        $amt = $row[11] - $_GET['amt'];

        $due = date('Y-m-d',strtotime('+30 days'));
        
        echo "Due Date: ".$due."<br/>";

        if($amt <= 0){
            if($res = mysqli_query($con,"UPDATE request SET status='COMPLETED',loan_balance=0,due_date=NULL WHERE request_id=".$row[0]))
                echo "Inside Complete ! Action performed Successfully!";
            else
                echo "Error Occured!"; 
        }
        else{
            if($res = mysqli_query($con,"UPDATE request SET loan_balance=".$amt.",due_date='".$due."' WHERE request_id=".$row[0]))
                echo "Inside Update ! Action performed Successfully!";
            else
                echo "Error Occured!"; 
        }    
    } 
}

?>