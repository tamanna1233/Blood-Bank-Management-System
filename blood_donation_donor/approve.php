<?php



$conn=mysqli_connect("localhost","root","","database1");
if(!$conn){
    die(mysqli_error($conn));
}
$servername ="localhost";
$username="root";
$password="";
$database_name="database1";


// include('connect.php');

if(isset($_POST['approve'])){
$s_no = $_POST['s_no'];

$sql = "UPDATE `blood_donation` SET `status` = 1 WHERE `s_no` = $s_no";
mysqli_query($conn, $sql);

header("Location: donations.php");
exit;
}
?>