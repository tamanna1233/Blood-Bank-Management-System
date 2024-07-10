<?php

include 'connect.php';
if(isset($_GET['deleteid']))
{
    $id=$_GET[('deleteid')];

    $sql="delete from donor_registration Where id=$id";
    $result=mysqli_query($conn,$sql);
    if($result){
        // echo "deleted succeccfully";
        header("location:display.php");
    }
    else
    {
        die(mysql_error($conn));
    }
}
?>