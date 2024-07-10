

<?php
include('connect.php');

$servername= "localhost";
$username = "root"; 
$password = "";  
$database_name="database1";

// Create connection

$conn =mysqli_connect($servername, $username, $password,$database_name);

if(!$conn){
die("connection failed: ".mysqli_connect_error());
}

if(isset($_POST['save'])){
$first_name=$_POST['first_name'];
$last_name=$_POST['last_name'];
$email=$_POST['email'];
$password=$_POST['password'];
$cpassword=$_POST['cpassword'];
$mobile=$_POST['mobile'];
$gender=$_POST['gender'];
$dob =$_POST['dob'];
$blood_group=$_POST['blood_group'];

if($password!=$cpassword){
  echo '<script>
  alert("password do not match");
  window.location="donorregister.html";
  </script>';
}
else{
       echo  '<script>
       window.location="donorlogin.html";
       </script>'; 
}


$sql_query="INSERT INTO donor_registration(first_name, last_name, email, password, mobile,  gender, dob, blood_group) VALUES('$first_name','$last_name','$email','$password','$mobile','$gender',' $dob','$blood_group')";

if(mysqli_query($conn,$sql_query)){
    echo "new details entry inserted successfully";
}
 else{
    echo "Error:". $sql_query .
    "" . mysqli_error( $conn );
  }
  mysqli_close( $conn);
}

// login page

// if(isset($_POST['login'])){
//   $username= mysqli_real_escape_string($db, $_POST['username']);
//   $password= mysqli_real_escape_string($db, $_POST['password']);
//   if(empty($username)){
//     array_push($errors,"username is required");

//   }
//   if(empty($password)){
//     array_push($errors,"password is required");

//   }

//   if(count($errors)==0){
//     $password+md5($password);
//     $query="SELECT * FROM users WHERE username='$username' && password='$password'";
    
//   }


// }

// ?>