<?php
    $con=mysql_connect("localhost:81","root","");
    if(!$con)
    {
        die(mysql_error());
    }
    $db=mysql_select_db("pulari_db",$con);
    if(!$db)
    {
        die(mysql_error());
    }
?>