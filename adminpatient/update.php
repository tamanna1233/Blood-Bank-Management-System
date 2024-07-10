<?php
include 'connect.php';
$id=$_GET['updateid'];
if(isset($_POST['submit'])){
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $mobile=$_POST['mobile'];
    $gender=$_POST['gender'];
    $dob =$_POST['dob'];
    $blood_group=$_POST['blood_group'];
    


     $sql="update patient_registration set first_name='$first_name',last_name='$last_name',email='$email', password='$password',mobile='$mobile',gender='$gender',dob='$dob',blood_group='$blood_group' where id=$id";
     $result = mysqli_query($conn,$sql);
     if($result){
        // echo "updated successfully";
        header('Location:display.php');
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

         <form action="" method="post">

         <table>
            <tr>
                <td><label for="">First name</label></td>
               <td> <input type="text" name="first_name" >
               </td>
            </tr>
            <tr>
                <td><label for="">Last name</label></td>
               <td> <input type="text" name="last_name" >
               </td>
            </tr>
            <tr>
                <td><label for="">Email</label></td>
                <td><input type="email" name="email" ></td>
                </tr>
                <tr>
                    <td><label for="">Password</label></td>
                    <td><input type="password" name="password" ></td>
                    </tr>
                    <tr>
                        <td><label for="">mobile</label></td>
                        <td><input type="tel" name="mobile" ></td>
                        </tr>
                       <tr>
                        <td> <label>Gender</label><br>
<label><input type="radio" name="gender">Male</label>
<label><input type="radio" name="gender">Female</label></td>
                       </tr>
                       <tr>
                        <td><label>Date of Birth</label>

<input type="date" required name="dob"><br>
</td>
                       </tr>
                       <tr>
                        <td><label for="blood group">Blood Type </label>
<select name="blood_group" id="blood group" aria-placeholder="blood type">
    <option value="A+">A+</option>
    <option value="A-">A-</option>
    <option value="B+">B+</option>
    <option value="B-">B-</option>
    <option value="AB+">AB+</option>
    <option value="AB-">AB-</option>
    <option value="O+">O+</option>
    <option value="O-">O-</option>

    
</select></td>
                       </tr>
                        
                                <button type="submit" name="submit">update</button>
                        
         </table>

         </form>

    </div>
</body>
</html>
