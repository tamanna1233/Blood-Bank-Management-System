<?php
$conn=mysqli_connect("localhost","root","","database1");
if(!$conn){
    die(mysqli_error($conn));
}


$servername ="localhost";
$username="root";
$password="";
$database_name="database1";


$conn =mysqli_connect($servername, $username, $password,$database_name);

if(!$conn){
    die("connection failed: ".mysqli_connect_error());
}

if(isset($_POST['submit'])){

    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $dob=$_POST['dob'];
    $units=$_POST['units'];
    $blood_group=$_POST['blood_group'];
    $disease=$_POST['disease'];

    $sql_query="INSERT INTO blood_donation (name,mobile,dob,units,blood_group,disease) VALUES('$name','$mobile','$dob','$units','$blood_group','$disease')";
     if(mysqli_query($conn,$sql_query)){
        echo "request submitted";

     }
     else{
        echo "error" .$sql_query."". mysqli_error($conn);
     }
     mysqli_close($conn);

}

?>