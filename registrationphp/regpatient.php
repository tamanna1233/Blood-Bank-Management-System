




<?php
$servername= "localhost";
$firstname =$_POST['firstname'];
$lastname =$_POST['lastname'];
$Email =$_POST['Email'];
$password =$_POST['password'];
$number =$_POST['number'];
$dbname="redwings"
// $dob =$_POST['dob'];
// $bloodgroup =$_POST['bloodgroup'];
$Gender =$_POST['Gender'];

// database connection
$conn =new mysqli('localhost','root','','redwings');

// checkconnection
if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
else{
    $stmt=$conn->prepare("insert into registeration( firstname, lastname, Gender,Email,password,number) values(?,?,?,?,?,?)");
    $stmt->bind_param("sssssi",$firstname,$lastname,$Email,$password,$number, $Gender);
    $stmt->execute();
    echo "registration successfully";
    $stmt->close();
    $conn->close();
}
?>
