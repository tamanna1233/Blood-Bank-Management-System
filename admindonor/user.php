<?php
include 'connect.php';
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


$sql="INSERT INTO donor_registration (first_name, last_name, email, password, mobile,  gender, dob, blood_group) VALUES('$first_name','$last_name','$email','$password','$mobile','$gender',' $dob','$blood_group')";
     $result = mysqli_query($conn,$sql);
     
     if($result){
         echo "datasumit successfully";
        // header('Location:display.php');
     }
     else{
        die(mysqli_error($conn));
     }


     }
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">

    <form action="" method="">
              <label for="fname">First Name</label>
              <input type="text" id="fname" name="first_name" placeholder="Your name.." required>
          
              <label for="lname">Last Name</label>
              <input type="text" id="lname" name="last_name" placeholder="Your last name..">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" placeholder="abcd@gmail.com" required>
          <label for="">password</label>
          <input type="password" name="password">
          <label for="">confirm password</label>
          <input type="password" name="cpassword">
          <label for="mobile">Mobile No.
          </label>
<input type="number" minlength="10" maxlength="10" id="mobile" name="mobile" placeholder="enter Mobile No." required>
<label>Gender</label><br>
<label><input type="radio" name="gender">Male</label>
<label><input type="radio" name="gender">Female</label><br><br>

<label>Date of Birth</label>

            <input type="date" required name="dob"><br>

<label for="blood group">Blood Type </label>
<select name="blood_group" id="blood group" aria-placeholder="blood type">
    <option value="A+">A+</option>
    <option value="B">B</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>

    
</select>




              <button type="submit"  name="save">submit</button>
            </form>
    </div>
</body>
</html>