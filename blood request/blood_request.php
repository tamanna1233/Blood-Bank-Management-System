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

if(isset($_POST['request'])){

    $name=$_POST['name'];
    $mobile=$_POST['mobile'];
    $blood_group=$_POST['blood_group'];
    $units=$_POST['units'];

    $reason=$_POST['reason'];

    $sql_query="INSERT INTO request_blood (name,mobile,blood_group,units,reason) VALUES('$name','$mobile','$blood_group','$units','$reason')";
     if(mysqli_query($conn,$sql_query)){
        echo "request submitted";

     }
     else{
        echo "error" .$sql_query."". mysqli_error($conn);
     }
     mysqli_close($conn);

}

?>