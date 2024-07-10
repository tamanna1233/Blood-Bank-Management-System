<?php
$conn=mysqli_connect("localhost","root","","database1");
if(!$conn){
    die(mysqli_error($conn));
}
$servername ="localhost";
$username="root";
$password="";
$database_name="database1";

if(isset($_POST['reject'])){
$id = $_POST['id'];

$sql = "UPDATE `request_blood` SET `status` = 2 WHERE `id` = $id";
mysqli_query($conn, $sql);

header("Location: request.php");
exit;
}
?>