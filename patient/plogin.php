<?php
include('connect.php');
include('patientreg.php');

 session_start();
if(isset($_POST['submit'])){
    $email =$_POST['email'];
    $password =$_POST['password'];

    $query="SELECT * FROM patient_registration WHERE email='$email' AND password='$password'";
    $run =mysqli_query($conn,$query);
    $row =mysqli_num_rows($run);

    if($row>0){
        header("location:../blood request/requestblood.html");

    }
    else{
      
        echo "<script>alert('wrong id or password');
        window.location.href='../patient/patientlogin.html'</script>";
   

        
    }

}

?>